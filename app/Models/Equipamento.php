<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    protected $table = 'equipamento';
    protected $fillable = ['nome', 'modelo', 'numserie', 'descricao'];
    public $timestamps = false;
}
