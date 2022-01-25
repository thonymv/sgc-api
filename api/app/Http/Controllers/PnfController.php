<?php

namespace App\Http\Controllers;

use App\Models\Pnf;
use Illuminate\Http\Request;

class PnfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pnf = Pnf::all();
        return response()->json(['pnf' => $pnf], 200);
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
        $pnf = Pnf::create($data);
        $pnf->save();
        return response()->json(['pnf' => $pnf], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pnf  $pnf
     * @return \Illuminate\Http\Response
     */
    public function show(Pnf $pnf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pnf  $pnf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->json()->all();
        $pnf = Pnf::find($id)->update($data);
        return response()->json(['pnf' => $pnf], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pnf  $pnf
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pnf = Pnf::find($id)->delete();
        return response()->json(['pnf' => $pnf], 200);
    }
}
