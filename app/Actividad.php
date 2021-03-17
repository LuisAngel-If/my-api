<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //
    protected $table = 'actividads';

    protected $fillable = ['nombre', 'descripcion', 'discapacidad_id'];

    public function actividads()
    {
        return $this->belongsTo(User::class);
    }
}
