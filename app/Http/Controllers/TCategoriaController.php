<?php

namespace App\Http\Controllers;

use App\Models\TCategoria;
use Illuminate\Http\Request;

class TCategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tcategoria = TCategoria::all();
        return response()->json([
            "meta"=>array('msg'=>'Ok'),
            "status"=>true,
            "objects"=>$tcategoria
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
        $tcategoria = new TCategoria();
        $tcategoria->nombre = $request->input('nombre');
        $tcategoria->save();
        return response()->json([
            "meta"=>array('msg'=>"Ok"),
            "status"=>true,
            "objects"=>TCategoria::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TCategoria  $tCategoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $tcategoria = TCategoria::where('id',$id)->get();
        return response()->json([
            "meta"=>array("msg"=>"Ok"),
            "status"=>true,
            "object"=>$tcategoria
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TCategoria  $tCategoria
     * @return \Illuminate\Http\Response
     */
    public function edit(TCategoria $tCategoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TCategoria  $tCategoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $tcategoria = TCategoria::where('id',$id);
        $tcategoria->update($request->all());
        return response()->json([
            "meta"=>array('msg'=>"Ok"),
            "status"=>true,
            "objects"=>TCategoria::all()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TCategoria  $tCategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tcategoria = TCategoria::where('id',$id);
        $tcategoria->delete();
        return response()->json([
            "meta"=>array('msg'=>"Ok"),
            "status"=>true,
            "objects"=>TCategoria::all()
        ]);
    }
}
