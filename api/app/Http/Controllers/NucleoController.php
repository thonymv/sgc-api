<?php

namespace App\Http\Controllers;

use App\Models\Nucleo;
use Illuminate\Http\Request;

class NucleoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nucleo = Nucleo::all();
        return response()->json(['nucleo' => $nucleo], 200);
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
        $nucleo = Nucleo::create($data);
        $nucleo->save();
        return response()->json(['nucleo' => $nucleo], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nucleo  $nucleo
     * @return \Illuminate\Http\Response
     */
    public function show(Nucleo $nucleo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nucleo  $nucleo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->json()->all();
        $nucleo = Nucleo::find($id)->update($data);
        return response()->json(['nucleo' => $nucleo], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nucleo  $nucleo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nucleo = Nucleo::find($id)->delete();
        return response()->json(['nucleo' => $nucleo], 200);
    }
}
