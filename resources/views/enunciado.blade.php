@extends('layouts.app')

@section('title', 'UD5. ORM Eloquent')

@section('content')

  <h3>Pedro José Crespo</h3>
  Has conseguido poner en marcha la aplicación web!! <br><br>Anota aquí mismo cómo has resuelto el ejercicio 2 del examen.
  <p>
  	Para poder conectarse a la base de datos "agencia" y acceder a los datos de la misma, se debe editar el bloque referido a la conexión a la base de datos en el archivo de variables de entorno ".env" que se debe encontrar en la raíz del proyecto.
  </p>
  <p>
  	El bloque de variables con los valores modificados es este:
  	<br>DB_CONNECTION=mysql
  	<br>DB_HOST=127.0.0.1
  	<br>DB_PORT=3306
  	<br>DB_DATABASE=agencia
  	<br>DB_USERNAME=root
  	<br>DB_PASSWORD=root
  </p>
  @php
  $num=date(now());
  echo 'Esto es NUM: [' . $num . ']';
  @endphp
@endsection
