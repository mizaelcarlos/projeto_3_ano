<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Porteiro extends Model
{
    protected $table = 'porteiro';
    protected $fillable = ['nome', 'turno', 'horario_entrada', 'horario_saida'];
    public $timestamps = false;
}
