<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelsController extends Controller
{
    public function index()
    {
    	$hoteles = Hotel::where('categoria', 1)->get();

    	return view('hotel.index')->with([
    		'hoteles' => $hoteles,
    	]);
    }
}
