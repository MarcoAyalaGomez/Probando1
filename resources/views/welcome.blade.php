@extends('layouts.master') 
@section ('title', 'home')
@section('header')
@section('content')
<hr>
<form class="row g-3" action="" method="POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nombre del producto</label>
  <input type="text" class="form-control" id="nproducto">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Código del producto</label>
  <input type="number" class="form-control" id="cproducto" >
</div>
<label for="exampleDataList" class="form-label">Sucursal </label>
<input class="form-control" list="datalistOptions" id="sucursal" placeholder="Escriba una sucursal...">
<datalist id="datalistOptions">
  <option value="Maipú">
  <option value="Puente Alto">
  <option value="La Reina">
</datalist>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Categoría</label>
  <input type="text" class="form-control" id="caproducto">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Cantidad a registrar</label>
  <input type="number" class="form-control" id="cantidad" >
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Precio del producto</label>
  <input type="number" class="form-control" id="precio" >
</div>


<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Descripción del producto</label>
  <textarea class="form-control" id="dproducto" rows="3"></textarea>
</div>
<div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">Registrar Producto</button>
  </div>
</form>
<hr>
@stop 
@section('footer')