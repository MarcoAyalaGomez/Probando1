@extends('layouts.master') 
@section ('title', 'home')
@section('header')
@section('content')
<table class="table table table-striped mt-4">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Código</th>
            <th scope="col">Nombre</th>
            <th scope="col">Categoría</th>
            <th scope="col">Sucursal</th>
            <th scope="col">Descripción</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Precio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <td>{{$producto->id}}</td>
            <td>{{$producto->codigo}}</td>
            <td>{{$producto->nombre }}</td>
            <td>{{$producto->categoria}}</td>
            <td>{{$producto->sucursal}}</td>
            <td>{{$producto->descripcion}}</td>
            <td>{{$producto->cantidad}}</td>
            <td>{{$producto->precio}}</td>
            
        @endforeach
    </tbody>
</table>
@stop 