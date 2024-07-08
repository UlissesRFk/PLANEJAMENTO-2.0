<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feriado extends Model
{
    protected $fillable = [
        'nome',
        'data',
        'nome_mes'
    ];
    use HasFactory;
}
