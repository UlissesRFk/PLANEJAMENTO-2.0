<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'tipo',
        'turma_id'
    ];

    public function turma()
    {
        return $this->belongsTo(Turma::class);
    }
}
