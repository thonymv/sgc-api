<?php

namespace App\Http\Controllers;

use App\Models\MallaCurricular;
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
        $mallas = MallaCurricular::all();
        return response()->json(['mallas' => $mallas], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->json()->all();
        $malla = MallaCurricular::create($data);
        $malla->save();
        return response()->json(['malla' => $malla], 200);
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
