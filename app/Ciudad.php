<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    //
    protected $table = 'ciudads';

    protected $fillable = ['nombre'];

    public function ciudades()
    {
        return $this->belongsTo(Estado::class);
    }
}
