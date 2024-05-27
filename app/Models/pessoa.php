<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = ['nome', 'email', 'senha', 'tipo', 'materias_id'];

    protected $hidden = ['senha'];

    public function materia()
    {
        return $this->belongsTo(Materia::class, 'materias_id');
    }
}
