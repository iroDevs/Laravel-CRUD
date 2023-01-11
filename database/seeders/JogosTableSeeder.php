<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JogosModel;


class JogosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JogosModel::create([
            'nome' => 'Zelda',
            'nota' => 10
        ]);

        JogosModel::create([
            'nome' => 'Volverine the game',
            'nota' => 8
        ]);   
    }
}
