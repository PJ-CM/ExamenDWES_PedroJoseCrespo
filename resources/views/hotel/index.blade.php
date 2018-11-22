@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Hoteles de 1ª</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Categoria</th>
      <th>Completo</th>
      <th>Antiguedad</th>
    </tr>
    @foreach($hoteles as $hotel)
    <tr @if($hotel->completo == 1) style="color: red;" @endif>
      <td><a href="" title="Ver detalle de hotel">{{ $hotel->id }}</td>
      <td>{{ $hotel->nombre }}</td>
      <td>{{ $hotel->direccion }}</td>
      <td>{{ $hotel->categoria }}</td>
      <td>{{ $hotel->completo }}</td>
      <td>{{ $hotel->antiguedad }}</td>
    </tr>
    @endforeach

  </table>

@endsection
