<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Onesemester extends Model
{
    protected $fillable = [
        'semestre', 
        'nota_1', 
        'nota_2', 
        'nota_3', 
        'nota_4', 
        'nota_5', 
        'nota_6', 
        'nota_7', 
        'nota_8', 
        'nota_9', 
        'nota_10', 
        'nota_11', 
        'nota_12', 
        'nota_13', 
        'nota_14', 
        'nota_15', 
        'nota_16', 
        'nota_definitiva', 
        'formador', 
        'user_id', 
        'estudiante',
        'curso_id', 
    ];

    public function user() {
    	return $this->hasMany('App\User',);
    }
    public function formador() {
    	return $this->hasMany('App\User');
    }
    public function curso() {
    	return $this->hasMany('App\Curso');
    }
}
