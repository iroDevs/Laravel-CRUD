<?php

use Illuminate\Database\Seeder;
use App\Jogos;

class JogosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jogos::create([
            'nome' => 'Zelda',
            'nota' => 10
        ]);

        Jogos::create([
            'nome' => 'Volverine the game',
            'nota' => 8
        ]);
        
    }
}
