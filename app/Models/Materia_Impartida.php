<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia_Impartida extends Model {
    use HasFactory;
    protected $table = 'materia__impartidas';

    protected $fillable = [
        'id',
        'docente',
        'grupo',
        'materia'
    ];
}
