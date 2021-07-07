<?php

namespace App\Http\Controllers;

use App\Models\TDocumento;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class TDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tdocumento = TDocumento::where("estado",1)->get();
        $json = array(
            "meta"=>array(
                "msg"=>"Ok"
            ),
            "status"=>true,
            "objects"=>$tdocumento
        ); 
        return response()->json($json);
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
        
        Log::channel('stderr')->info('¡Peticion llego!');

        $tdocumento = new TDocumento();
        $tdocumento -> nombre = $request->input("nombre");
        $tdocumento -> estado = 1;
        $tdocumento->save();    

        $index = TDocumento::where("estado",1)->get();

        return response()->json([
            "meta"=>array("msg"=>"Ok"),
            "status"=>true,
            "objects"=>$index
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TDocumento  $tDocumento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tdocumento = TDocumento::where("estado",1)->where("id",$id)->get();
        $json = array(
            "meta"=>array("msg"=>"Ok"),
            "status"=>true,
            "object"=>$tdocumento   
        );

        return response()->json($json);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TDocumento  $tDocumento
     * @return \Illuminate\Http\Response
     */
    public function edit(TDocumento $tDocumento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TDocumento  $tDocumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        //
        $tdocumento = TDocumento::where('id',$id);
        $tdocumento->update($request->all());
        $all = TDocumento::where('estado',1)->get();
        return response()-> json([
            "meta"=>array("msg"=>"Ok"),
            "status"=>true,
            "object"=>$all
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TDocumento  $tDocumento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //Eliminado logico
        $tdocumento = TDocumento::where('id',$id)->get();
        $tdocumento->update($request->estado = 0);
        $all = TDocumento::all();
        return response()->json([
            "meta"=>array("msg"=>"Ok"),
            "status"=>true,
            "objects"=>$all
        ]);
    }
}
