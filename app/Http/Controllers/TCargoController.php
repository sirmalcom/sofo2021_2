<?php

namespace App\Http\Controllers;

use App\Models\TCargo;
use Illuminate\Http\Request;

class TCargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tcargo = TCargo::all();
        return response()->json([
            "meta"=>array("msg"=>"Ok"),
            "status"=>true,
            "objects"=>$tcargo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tcargo = new TCargo();

        $tcargo->nombre = $request->input('nombre');

        $tcargo->save();

        $objects = TCargo::all();

        return response()->json([
            "meta"=>array('msg'=>"Ok"),
            "status"=>true,
            "objects"=>$objects
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TCargo  $tCargo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tcargo = TCargo::where('id',$id)->get();

        return response()->json([
            "meta"=>array('msg'=>'Ok'),
            "status"=>true,
            "object"=>$tcargo
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TCargo  $tCargo
     * @return \Illuminate\Http\Response
     */
    public function edit(TCargo $tCargo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TCargo  $tCargo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tcargo = TCargo::where('id',$id);

        $tcargo->update($request->all());

        $data = TCargo::all();

        return response()->json([
            "meta"=>array('msg'=>"Ok"),
            "status"=>true,
            "objects"=>$data
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TCargo  $tCargo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tcargo = TCargo::where('id',$id);

        $tcargo->delete();

        $data = TCargo::all();

        return response()->json([
            "meta"=>array('msg','Ok'),
            "status"=>true,
            "objects"=>$data
        ]);

    }
}
