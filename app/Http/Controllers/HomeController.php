<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JogosModel;
use Illuminate\View\View;

class HomeController extends Controller 
{
    public function index(): View
    {
        
         return view('home')->with('jogos', JogosModel::getAll());
    }

    public function criar(): View
    {
        return view('criar');
    }

    public function adcionaJogo(Request $jogoNovo): bool
    {   
        try {
            $dados = $jogoNovo->only(['nomeJogo', 'notaJogo']);  
            JogosModel::create([
                'nome' => $dados["nomeJogo"],
                'nota' => (int)$dados["notaJogo"]
            ]); 

            return true;
        } catch (\Throwable $th) {
            error_log($th->getMessage());
            return false;
        }
    }

    public function deletaJogo(int $id): bool
    {   
        try {
            JogosModel::deleteById($id);
            return true;
        } catch (\Throwable $th) {
            error_log($th->getMessage());
            return false;
        }
        
    }


}
