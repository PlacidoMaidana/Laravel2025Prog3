@extends('layout.estilo')

@section('titulo','El titulo de la pagina secundaria')
    
@section('Contenido')
    
   
   <button type="button" class="btn btn-primary">Primary</button>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Titulo</th>
      <th scope="col">Autor</th>
      <th scope="col">Editorial</th>
      <th scope="col">Año Public</th>
      <th scope="col">Cantidad Total</th>
      <th scope="col">Cantidad Disponible</th>
      <th scope="col">Acciones</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach($libros as $libro)
            <tr>
                <td>{{ $libro->id }}</td>
                <td>{{ $libro->titulo }}</td>
                <td>{{ $libro->autor}}</td>
                <td>{{ $libro->editorial }}</td>
                <td>{{ $libro->anioPublicacion }}</td>
                <td>{{ $libro->cantidadTotal }}</td>
                <td>{{ $libro->cantidadDisponible }}</td>
                <td>
                    
                    <a href="{{url('ver_libro/').'/'. $libro->id }}" class="btn btn-success" role="button">
                     ver
                    </a>


                </td>
            </tr>
    @endforeach

 
  </tbody>
</table>


@endsection