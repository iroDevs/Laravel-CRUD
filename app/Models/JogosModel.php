<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\IJogosModel;
use HasFactory;
use Illuminate\Database\QueryException; 


class JogosModel extends Model implements IJogosModel
{
    protected string $table = 'jogos'; //nome da tabela do banco de dados
    protected array[string] $fillable = ['nome', 'nota']; //campos que são permitidos para preenchimento

    public function create(array $newGame): bool
    {
        try {
            $this->fill($newGame);
            $this->save();
            return true;
            
        } catch (QueryException $ex) {
            \Log::error($ex->getMessage());
            return false;
        }
    }

    public function metodo2()
    {
        //código para o método 2
    }

    //outros métodos
}
