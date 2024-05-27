<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $fillable = ['materia'];

    public function pessoas()
    {
        return $this->hasMany(Pessoa::class, 'materias_id');
    }
}

