<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    protected $table = 'secretaria';
    protected $fillable = ['descricao', 'secretaria_id'];
    public $timestamps = false;
}