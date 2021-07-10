<?php

namespace App\Http\Controllers;

use App\Models\TComprobante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TComprobanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tcomprobante = TComprobante::all();
        return response()->json([
            "meta"=>array("msg"=>"Ok"),
            "status"=>true,
            "objects"=>$tcomprobante
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
        Log::channel('stderr')->info('¡Peticion llego!');

        $tcomprobante = new TComprobante();

        $tcomprobante -> nombre = $request->input('nombre');

        $tcomprobante->save();

        $objetos = TComprobante::all();

        return response()->json([
            "meta"=>array("msg"=>"Ok"),
            "status"=>true,
            "objects"=>$objetos
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TComprobante  $tComprobante
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tcomprobante = TComprobante::where('id',$id)->get();
        
        return response()->json([
            "meta"=>array('msg'=>"Ok"),
            "status"=>true,
            "object"=>$tcomprobante
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TComprobante  $tComprobante
     * @return \Illuminate\Http\Response
     */
    public function edit(TComprobante $tComprobante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TComprobante  $tComprobante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $tcomprobante = TComprobante::where('id',$id);

        $tcomprobante->update($request->all());

        $objects = TComprobante::all();

        return response()->json([
            "meta"=>array('msg'=>'Ok'),
            "status"=>true,
            "objects"=>$objects
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TComprobante  $tComprobante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tcomprobante = TComprobante::where('id',$id);
        
        $tcomprobante->delete();
    
        $objects = TComprobante::all();

        return response()->json([
            "meta"=>array("msg"=>"Ok"),
            "status"=>true,
            "objects"=>$objects
        ]);
    }
}
