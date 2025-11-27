<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $table = 'monitor';

    protected $fillable = [
        'nome',
        'numero',
        'turno',
    ];

    public $timestamps = true;
}

