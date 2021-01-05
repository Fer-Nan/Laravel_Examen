@extends('layouts.app')
@section('Botones')
<a href={{route('tiposzapatos.create')}} class="btn btn-primary mr-2 text-white">SIGUIENTE</a>
@endsection
<div class="content">
            <img src="{{asset('https://reinspirit.com/wp-content/uploads/2016/09/james.jpg')}}"  width="300" height="200">
                <div class="title m-b-md">
@section( 'content')
<h2 class="text-center mb-5">Tienda de Calzado</h5>
    <div class="col-md-10 mx-auto bg-white p-3">
        <table class="table">
            <thead class="bg-primary text-light">
                <tr>
                    <th scole="col">Nombres Cliente</th>
                    <th scole="col">Apellidos</th>
                    <th scole="col">modelo</th>
                    <th scole="col">Categoría</th>
                    <th scole="col">Talla</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Juan carlos</td>
                    <td>Lopez Zuñiga</td>
                    <td>Deportivo</td>
                    <td>Caballero</td>
                    <td>40</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection


