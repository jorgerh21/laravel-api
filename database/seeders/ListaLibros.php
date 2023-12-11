<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libros;

class ListaLibros extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
		$faker = \Faker\Factory::create();
		for($i=0; $i < 50; $i++){
			Libros::create([
				'nombre'=> $faker->sentence,
				'autor'=> $faker->name,
				'fecha_publicacion'=> $faker->date,
			]);
		}
    }
}
