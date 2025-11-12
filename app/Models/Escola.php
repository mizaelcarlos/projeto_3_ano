<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    protected $table = 'escola';
    protected $fillable = ['nome', 'cnpj', 'endereco', 'telefone'];
    public $timestamps = false;
}
