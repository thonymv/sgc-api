<?php

namespace App\Http\Controllers;

use App\Models\contenidoSinoptico;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

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
        return response()->json(['contenidos' => $contenidos], 200);
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
    public function show(contenidoSinoptico $contenido)
    {
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
