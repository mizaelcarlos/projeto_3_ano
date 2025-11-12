<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staff';
    protected $fillable = ['nome'];
    public $timestamps = false;

    public function turmas()
    {
        return $this->belongsToMany(Turma::class,'staff_id');
    }
}
