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

    public function criar()
    {
        return view('criar');
    }

}
