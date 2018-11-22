<?php

namespace App;
use App\Cliente;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name', 'direccion', ];

	public function clientes()
	{
		return $this->belongsToMany(Cliente::class())->withPivot('fecha', 'numhabitaciones');
	}
}
