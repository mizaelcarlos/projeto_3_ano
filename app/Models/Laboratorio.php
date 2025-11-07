<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laboratorio extends Model
{
    protected $table = 'laboratorios';
    protected $fillable = ['nome', 'tipo', 'capacidade', 'equipmentos', 'responsavel'];
    public $timestamps = false;
}
