<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $table = 'laboratorio';
    protected $fillable = ['nome', 'tipo', 'capacidade', 'equipamentos', 'responsavel'];
    public $timestamps = false;
}
