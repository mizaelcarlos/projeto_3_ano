<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    //
    protected $table = 'disciplina';
    protected $fillable = ['nome', 'carga_horaria', 'curso_id'];
    public $timestamps = false;

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'curso_id');
    }
}
