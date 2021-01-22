@extends('bootstrap')
@section('master')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Telefono</th>
      <th scope="col">Coordinacion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>

    @foreach ($centros as $centro)
    <tr>
      <th scope="row">{{ $centro->id }}</th>
      <td>{{ $centro->Nombre }}</td>
      <td>{{ $centro->Telefono }}</td>
      <td>

     
      @foreach($Coordinacionx as $Coordinacion)
          @if($Coordinacion->id == $centro->CoordinacionID)
            {{$Coordinacion->Nombre}}
          @endif
        @endforeach
      
      
      </td>
      <td><form action="{{ route('centroTrabajo.eliminar', $centro->id) }}" class="d-inline" method="POST">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
          </form>
          <a href="{{route('centroTrabajo.editar', $centro->id)}}" class="btn btn-info btn-sm">Editar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
