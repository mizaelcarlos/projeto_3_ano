<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diretoria extends Model
{
    protected $table = 'diretoria'
    protected $fillable = ['id','nome','gestao','data_inicio','data_fim'];
    public $timestamps = false;
}
