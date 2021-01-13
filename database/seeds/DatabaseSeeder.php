<?php

use App\juegos;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(JuegosTableSeeder::class);
        // $this->call(UserSeeder::class);
    }
}
