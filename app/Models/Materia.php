<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function nota(){
        return $this->hasMany(Nota::class, 'materia_id');
    }
}
