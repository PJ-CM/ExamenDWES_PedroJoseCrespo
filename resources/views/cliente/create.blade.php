@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h4>Cliente nuevo</h4>
  <form action="{{ route('clientes_store') }}" method="post">
    @csrf
    NIF:<br>
    <input type="text" name="nif" value="123456789A"><br><br>
    Nombre:<br>
    <input type="text" name="nombre" value="Miren"><br><br>
    Apellido:<br>
    <input type="text" name="apellido" value="Mendibil"><br><br>
    Telefono:<br>
    <input type="text" name="telefono" value="777777777"><br><br>
    <button type="submit" name="submit">Enviar</button>
  </form>
  <br>

@endsection
