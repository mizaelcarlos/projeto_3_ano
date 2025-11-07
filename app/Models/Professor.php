<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professor';
    protected $fillable = ['nome','email','telefone','disciplina','turno','turma_id'];
    public $timestamps = false;

    public function turmas()
    {
        return $this->belongsToMany(Turma::class,'turma_id');
    }
}
