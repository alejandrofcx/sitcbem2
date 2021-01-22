@extends('bootstrap')
@section('master')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Telefono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($coordinaciones as $coordinacion)
    <tr>
      <th scope="row">{{ $coordinacion->id }}</th>
      <td>{{ $coordinacion->Nombre }}</td>
      <td>{{ $coordinacion->Telefono }}</td>
      <td><form action="{{ route('coordinacion.eliminar', $coordinacion->id) }}" class="d-inline" method="POST">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
          </form>
          <a href="{{route('coordinacion.editar', $coordinacion->id)}}" class="btn btn-info btn-sm">Editar</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
