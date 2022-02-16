<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    protected $table = 'notas';

    public function user(){
        return $this->belongsTo(User::class, 'id');
    }

    public function materia(){
        return $this->belongsTo(Materia::class, 'id');
    }
}
