<?php

namespace App\Http\Controllers;

use App\Models\MallaCurricular;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class MallaCurricularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $mallas = MallaCurricular::all();
            foreach ($mallas as $malla) {
                $malla["nucleo_data"] = $malla->nucleo()->get()[0];
                $malla["pnf_data"] = $malla->pnf()->get()[0];
            }
            return response()->json(['mallas' => $mallas], 200);
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
            $malla = MallaCurricular::create($data);
            $malla->save();
            return response()->json(['malla' => $malla], 200);
        } catch (QueryException $exception) {
            return response()->json(['exception' => $exception], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MallaCurricular  $mallaCurricular
     * @return \Illuminate\Http\Response
     */
    public function show(MallaCurricular $mallaCurricular)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MallaCurricular  $mallaCurricular
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->json()->all();
        $malla = MallaCurricular::find($id)->update($data);
        return response()->json(['malla' => $malla], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MallaCurricular  $mallaCurricular
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $malla = MallaCurricular::find($id)->delete();
        return response()->json(['malla' => $malla], 200);
    }
}
