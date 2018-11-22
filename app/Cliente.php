<?php

namespace App;
use App\Hotel;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nif', 'nombre', 'apellido', 'telefono', ];

	public function hoteles()
	{
		return $this->belongsToMany(Hotel::class())->withPivot('fecha', 'numhabitaciones');
	}
}
