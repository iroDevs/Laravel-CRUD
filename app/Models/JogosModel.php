<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\IJogosModel;
use Illuminate\Database\QueryException; 


class JogosModel extends Model 
{
    protected $table = 'jogos'; //nome da tabela do banco de dados
    protected $fillable = ['nome', 'nota']; //campos que são permitidos para preenchimento

  
    public function getAll()
    {
        //código para o método 2
    }

    //outros métodos
}
