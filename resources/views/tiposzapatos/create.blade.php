@extends('layouts.app')
@section('Botones')
<a href={{route('tiposzapatos.index')}} class="btn btn-primary mr-2 text-white">ANTERIOR</a>
@endsection
<div class="content">
            <img src="{{asset('https://reinspirit.com/wp-content/uploads/2016/09/james.jpg')}}"  width="300" height="200">
                <div class="title m-b-md">
                </div>
@section( 'content')
<h2 class="text-center mb-5">AGREGAR NUEVO </h2>
<div class="col-md-8">
<form method="POST"action="{{route('tiposzapatos.store')}}">
@csrf
<div class="form-group">
<label form="nombre">Nombres</label>
<input type="text" name="nombre"class="form-control" id="name"placeholder="Nombres"/>
</div>
<div class="form-group">
<label form="apell">Apellidos</label>
<input type="text" name="apell"class="form-control" id="name"placeholder="Apellidos"/>
</div>
<div class="form-group">
<label form="mod">Modelo de Zapatos</label>
<input type="text" name="mod"class="form-control" id="name"placeholder="Modelo de Zapatos"/>
</div>
<div class="form-group">
<label form="cat">Categoria de Zapatos</label>
<input type="text" name="cat"class="form-control" id="name"placeholder="Categoria de Zapatos"/>
</div>
<div class="form-group">
<label form="mar">Marca de Zapatos</label>
<input type="text" name="mar"class="form-control" id="name"placeholder="Marca de Zapatos"/>
</div>
<div class="form-group">
<label form="tall">Talla de Zapatos</label>
<input type="text" name="tall"class="form-control" id="name"placeholder="Talla de Zapatos"/>
</div>
<div class="form-group">
<input type="submit"class="btn btn-primary"value="Agregar cliente"/>
</div>
</form>
</div>
</div>
@endsection