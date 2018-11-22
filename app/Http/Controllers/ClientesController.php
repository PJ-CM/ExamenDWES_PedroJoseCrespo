<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    public function index()
    {
    	$clientes = Cliente::all();

    	return view('cliente.index')->with([
    		'clientes' => $clientes,
    	]);
    }

    public function create()
    {
    	$clientes = Cliente::all();

    	return view('cliente.create');
    }

    public function store(Request $request)
    {
    	$cliente = Cliente::create([
    		'nif' => $request->nif,
    		'nombre' => $request->nombre,
    		'apellido' => $request->apellido,
    		'telefono' => $request->telefono,
    	]);

    	//$flight = App\Flight::create(['name' => 'Flight 10']);

    	/*
$flight = new Flight;

            $flight->name = $request->name;

            $flight->save();
    	*/

    	//return view('cliente.create');
    	return redirect()->route('clientes_index');
    }

    public function reservas($id = null)
    {
    	if(isset($id)) {
    		$reservas = Cliente::where('id', $id)->get();
    	} else {
    		$reservas = Cliente::all();
    	}

    	return view('reserva.list')->with([
    		'reservas' => $reservas,
    	]);
    }
}
