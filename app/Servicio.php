<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    //
    protected $table = 'servicios';

    protected $fillable = ['nombre', 'descripcion'];

    public function servicios()
    {
        return $this->belongsTo(User::class);
    }
}
