<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cordenador extends Model
{
    protected $table = 'cordenador';
    protected $fillable = ['nome', 'seguimento'];
    public $timestamps = false;
}
