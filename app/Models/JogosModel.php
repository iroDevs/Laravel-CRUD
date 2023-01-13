<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Interfaces\IJogosModel;
use Illuminate\Database\QueryException; 


class JogosModel extends Model 
{
    protected $table = 'jogos';
    protected $fillable = ['nome', 'nota'];

  
    public static function getAll() : array
    {
        return JogosModel::all()->toArray();
    }

    public static function deleteById(int $id): bool
    {
       return JogosModel::findOrFail($id)->delete();
    }

}
