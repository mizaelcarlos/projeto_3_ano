<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = 'sala';
    protected $fillable = ['numero_de_sala','numero_maximoAlunos'];
    public $timestamps = false;
}
