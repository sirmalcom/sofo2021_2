<?php

namespace App\Http\Controllers;

use App\Models\MProducto;
use Illuminate\Http\Request;

class MProductoController extends Controller
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
            "objects"=>MProducto::all()
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
        $model = new MProducto();
        $model->idTCategoria = $request->input('idTCategoria');
        $model->nombre = $request->input('nombre');
        $model->descripcion = $request->input('descripcion');
        $model->stock = $request->input('stock');
        $model->stockMinimo = $request->input('stockMinimo');
        $model->ultimoCostoCompra = $request->input('ultimoCostoCompra');
        $model->ultimoCostoVenta = $request->input('ultimoCostoVenta');
        $model->ganancia = $request->input('ganancia');
        $model->save();
        return response()->json([
            "meta"=>array('msg'=>"Ok"),
            "status"=>true,
            "objects"=>MProducto::all()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MProducto  $mProducto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $model = MProducto::where('id',$id)->get();
        return response()->json([
            "meta"=>array("msg"=>"Ok"),
            "status"=>true,
            "object"=>$model
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MProducto  $mProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(MProducto $mProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MProducto  $mProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $model = MProducto::where('id',$id);
        $model->update($request->all());
        return response()->json([
            "meta"=>array('msg'=>"Ok"),
            "status"=>true,
            "objects"=>MProducto::all()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MProducto  $mProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $model = MProducto::where('id',$id);
        $model->delete();
        return response()->json([
            "meta"=>array('msg'=>"Ok"),
            "status"=>true,
            "objects"=>Mproducto::all()
        ]);
    }
}
