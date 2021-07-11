<?php

namespace App\Http\Controllers;

use App\Models\MCliente;
use Illuminate\Http\Request;

class MClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json([
            "meta"=>array('msg'=>'Ok'),
            "status"=>true,
            "objects"=>MCliente::all()
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
        $model = new MCliente();
        $model->nombre = $request->input('nombre');
        $model->idTDocumento = $request->input('idTDocumento');
        $model->numeroDocumento = $request->input('numeroDocumento');
        $model->direccion = $request->input('direccion');
        $model->save();
        return response()->json([
            "meta"=>array('msg'=>"Ok"),
            "status"=>true,
            "objects"=>MCliente::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MCliente  $mCliente
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = MCliente::where('id',$id)->get();
        return response()->json([
            "meta"=>array("msg"=>"Ok"),
            "status"=>true,
            "object"=>$model
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MCliente  $mCliente
     * @return \Illuminate\Http\Response
     */
    public function edit(MCliente $mCliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MCliente  $mCliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $model = MCliente::where('id',$id);
        $model->update($request->all());
        return response()->json([
            "meta"=>array('msg'=>"Ok"),
            "status"=>true,
            "objects"=>MCliente::all()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MCliente  $mCliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $model = MCliente::where('id',$id);
        $model->delete();
        return response()->json([
            "meta"=>array('msg'=>"Ok"),
            "status"=>true,
            "objects"=>MCliente::all()
        ]);
    }
}
