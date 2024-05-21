<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    protected $fillable = [
        'turma',
    ];

    public function pessoas()
    {
        return $this->hasMany(Pessoa::class);
    }
}
