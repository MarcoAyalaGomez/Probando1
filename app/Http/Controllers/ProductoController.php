<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos =Producto::all();
        return view('Producto.index')-> with('productos', $productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = new Producto(); 

        $productos-> codigo = $request-> get('codigo'); 
        $productos-> nombre = $request-> get('nombre'); 
        $productos-> categoria = $request-> get('categoria'); 
        $productos-> sucursal = $request-> get('sucursal'); 
        $productos-> descripcion = $request-> get('descripcion'); 
        $productos-> cantidad = $request-> get('cantidad'); 
        $productos-> precio = $request-> get('precio'); 

        $productos -> save();

        return redirect('/Producto'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto =Producto::find($id);
        return view('Producto.lista')-> with('producto',$producto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto =Producto::find($id);
        return view('Producto.edit')-> with('producto',$producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto =  Producto::find($id);

        $producto-> codigo = $request-> get('codigo'); 
        $producto-> nombre = $request-> get('nombre'); 
        $producto-> categoria = $request-> get('categoria'); 
        $producto-> sucursal = $request-> get('sucursal'); 
        $producto-> descripcion = $request-> get('descripcion'); 
        $producto-> cantidad = $request-> get('cantidad'); 
        $producto-> precio = $request-> get('precio'); 

        $producto -> save();

        return redirect('/Producto'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto =  Producto::find($id);
        $producto-> delete(); 
        return redirect('/Producto');
    }
}
