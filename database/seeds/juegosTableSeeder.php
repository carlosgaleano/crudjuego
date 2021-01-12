<?php

use Illuminate\Database\Seeder;
use App\juegos;

class JuegosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       // factory(App\juegos::class,10)->create([]=>'',
       juegos::create([
        'id_juego'=>'1',
        'name'=>'BAMBOO RUSH',
        'url'=>'url:https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es',
        'descripcion'=>'Juego de BAMBOO RUSH ',
        'url_imagen'=>'url_image:https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg',
        'estatus'=>1
        ]);

        juegos::create([
            'id_juego'=>'2',
            'name'=>'REELS OF WEALTH',
            'url'=>'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=795&lang=es',
            'descripcion'=>'Juego de "REELS OF WEALTH" ',
            'url_imagen'=>'url_image:https://winchiletragamonedas.com/public/images/games/reels_of_wealth.jpeg',
            'estatus'=>1
            ]);


    }

}
