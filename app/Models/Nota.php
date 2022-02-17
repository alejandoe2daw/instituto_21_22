<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;
    protected $table = 'notas';
    protected $fillable=[
        'user_id',
        'materia_id',
        'evaluacion',
        'nota'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id');
    }

    public function materia(){
        return $this->belongsTo(Materia::class, 'id');
    }
    public function conseguirMaterias($materia_id){
        return $this::where('materia_Id','=',$materia_id)->paginate(10);
        //return self::where(['materia_id',$materia_id]);
    }
}
