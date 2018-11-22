<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=0; $i<10;$i++){
	        DB::table('clientes')->insert([
	            'nif' => random_int(14987400, 34101789),
	            'nombre' => str_random(10),
	            'apellido' => str_random(20),
	            'telefono' => random_int(943000000, 943999999),
	        ]);
	    }
    }
}
