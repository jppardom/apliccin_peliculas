<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pelicula;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelicula1 = new Pelicula();
        $pelicula1->nombre = "Pelicula numero 1";
        $pelicula1->descripcion = "descripcion pelicula 1";
        $pelicula1->categoria = "categoria pelicula 1";
        $pelicula1->save();

        $pelicula2 = new Pelicula();
        $pelicula2->nombre = "Pelicula numero 2";
        $pelicula2->descripcion = "descripcion pelicula 2";
        $pelicula2->categoria = "categoria pelicula 2";
        $pelicula2->save();

        $pelicula3 = new Pelicula();
        $pelicula3->nombre = "Pelicula numero 3";
        $pelicula3->descripcion = "descripcion pelicula 3";
        $pelicula3->categoria = "categoria pelicula 3";
        $pelicula3->save();
    }
}
