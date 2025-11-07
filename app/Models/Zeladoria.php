<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zeladoria extends Model
{
    protected $table = 'zeladoria';
    protected $fillable = ['nome', 'setor', 'tarefa', 'turno'];
    public $timestamps = false;
}
