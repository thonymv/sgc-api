<?php

namespace App\Http\Controllers;

use App\Models\contenidoSinoptico;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use PDF;

class ContenidoSinopticoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contenidos = contenidoSinoptico::all();
        foreach ($contenidos as $contenido) {
            $contenido["malla_data"] = $contenido->malla()->get()[0];
        }
        return response()->json(['contenidos' => $contenidos], 200);
    }

    public function pdf($id)
    {
        try {
            $contenido = contenidoSinoptico::find($id);
            $contenido["malla_data"] = $contenido->malla()->get()[0];
            $modalidad = $contenido["malla_data"]["modalidad"];
            switch ($modalidad) {
                case 0:
                    $contenido["modalidad"] = $contenido["duracion"] > 1 ? 'trimestres' : 'trimestre';
                    break;
                case 1:
                    $contenido["modalidad"] = $contenido["duracion"] > 1 ? 'semestres' : 'semestre';
                    break;
                default:
                    $contenido["modalidad"] = $contenido["duracion"] > 1 ? 'años' : 'año';
                    break;
            }
            $contenido['url'] = url('/');
            // return view('pdf', $contenido);
            $pdf = PDF::loadView('pdf', $contenido);
            return $pdf->download('itsolutionstuff.pdf');
        } catch (QueryException $exception) {
            return response()->json(['exception' => $exception], 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $data = $request->json()->all();
            $contenido = contenidoSinoptico::create($data);
            $contenido->save();
            return response()->json(['contenido' => $contenido], 200);
        } catch (QueryException $exception) {
            return response()->json(['exception' => $exception], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contenidoSinoptico  $contenidoSinoptico
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contenido = contenidoSinoptico::find($id);
        $contenido["malla_data"] = $contenido->malla()->get()[0];
        return response()->json(['contenido' => $contenido], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contenidoSinoptico  $contenidoSinoptico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->json()->all();
        $contenido = contenidoSinoptico::find($id)->update($data);
        return response()->json(['contenido' => $contenido], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contenidoSinoptico  $contenidoSinoptico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contenido = contenidoSinoptico::find($id)->delete();
        return response()->json(['contenido' => $contenido], 200);
    }
}
