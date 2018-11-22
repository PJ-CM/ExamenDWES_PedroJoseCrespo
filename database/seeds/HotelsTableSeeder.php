<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=0; $i<5;$i++){
	        DB::table('hotels')->insert([
	            'nombre' => str_random(10),
	            'direccion' => 'Calle ' . str_random(20),
	            'categoria' => random_int(1, 5),
	            'completo' => random_int(0, 1),
	            'antiguedad' => date(now()),
	        ]);
	    }
	}
}
