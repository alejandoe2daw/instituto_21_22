<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    //protected $table = 'cursos';
    protected $fillable =[
        'shortname',
        'fullname',
        'summary',
        'showgrades',
        'shortdate'
    ];

    public function user(){
        return $this->belongsToMany(User::class, 'curso_user', 'user_id', 'curso_id');
    }
}
