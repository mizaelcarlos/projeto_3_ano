<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boleto extends Model
{
    //
    protected $table = 'boleto';
    protected $fillable = ['aluno_matricula', 'data_vencimento', 'valor'];
    public $timestamps = false;

    public function alunos()
    {
        return $this->belongsTo(Aluno::class, 'aluno_matricula', 'matricula');
    }

}
