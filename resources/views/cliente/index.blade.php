@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Clientes</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>NIF</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Telefono</th>
    </tr>
    @foreach($clientes as $cliente)
    <tr>
      <td><a href="" title="Ver detalle de cliente">{{ $cliente->id }}</td>
      <td>{{ $cliente->nif }}</td>
      <td>{{ $cliente->nombre }}</td>
      <td>{{ $cliente->apellido }}</td>
      <td>{{ $cliente->telefono }}</td>
    </tr>
    @endforeach


  </table>

@endsection
