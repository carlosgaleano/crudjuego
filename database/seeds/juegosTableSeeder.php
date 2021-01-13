<?php

use Illuminate\Database\Seeder;
use App\Juegos;

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
        'url'=>'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es',
        'descripcion'=>'Juego de BAMBOO RUSH ',
        'url_imagen'=>'https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg',
        'estatus'=>1
        ]);

        juegos::create([
            'id_juego'=>'2',
            'name'=>'REELS OF WEALTH',
            'url'=>'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=795&lang=es',
            'descripcion'=>'Juego de "REELS OF WEALTH" ',
            'url_imagen'=>'https://winchiletragamonedas.com/public/images/games/reels_of_wealth.jpeg',
            'estatus'=>1
            ]);


        juegos::create([
            'id_juego'=>'3',
            'name'=>'DRAGON & PHOENIX',
            'url'=>'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=814&lang=es',
            'descripcion'=>'Juego de "REELS OF WEALTH" ',
            'url_imagen'=>'https://winchiletragamonedas.com/public/images/games/dragon_phoenix.jpeg',
            'estatus'=>1
            ]);


        juegos::create([
            'id_juego'=>'4',
            'name'=>'TAKE THE BANK',
            'url'=>'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=813&lang=es',
            'descripcion'=>'Juego de "TAKE THE BANK" ',
            'url_imagen'=>'https://winchiletragamonedas.com/public/images/games/take_the_bank.jpeg',
            'estatus'=>1
            ]);

        juegos::create([
            'id_juego'=>'5',
            'name'=>'CAISHEN’S ARRIVAL',
            'url'=>'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=812&lang=es',
            'descripcion'=>'Juego de "CAISHEN’S ARRIVAL" ',
            'url_imagen'=>'https://winchiletragamonedas.com/public/images/games/caishens_arrival.jpeg',
            'estatus'=>1
            ]);

        juegos::create([
            'id_juego'=>'6',
            'name'=>'GEMMED!',
            'url'=>'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=811&lang=es',
            'descripcion'=>'Juego de "GEMMED" ',
            'url_imagen'=>'https://winchiletragamonedas.com/public/images/games/gemmed.jpeg',
            'estatus'=>1
            ]);

    }

}
