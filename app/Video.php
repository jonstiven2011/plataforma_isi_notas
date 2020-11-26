<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'nameclase', 
        'curso_id',
        'video'
    ];

    public function clase() {
    	return $this->belongsTo('App\Clase');
    }

    public function course() {
    	return $this->belongsTo('App\Curso');
    }
}
