@extends('layout.estilo')

@section('titulo','Formulario libro');

@section('Contenido')

<div class="card">
  <div class="card-body">
        <form action="">
         @csrf
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label" >Titulo</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Titulo" value="{{$libro->titulo}}" >
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Autor</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Autor" value="{{$libro->autor}}">
            </div>
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label" >Editorial</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="editorial" value="{{$libro->editorial}}" >
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Año</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Año" value="{{$libro->anioPublicacion}}">
            </div>
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label" >Cantidad Total</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="cantidadT" value="{{$libro->cantidadTotal}}" >
            </div>
            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Cantidad Disponible</label>
              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" value="{{$libro->cantidadDisponible}}">
            </div>
        
            <button type="button" class="btn btn-primary">Aceptar</button>
        
        </form>
  </div>
</div>
  


    


@endsection