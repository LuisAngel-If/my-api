<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restricciones extends Model
{
    //
    protected $table = 'restricciones';

    protected $fillable = ['nombre'];

    public function restriccion()
    {
        return $this->belongsTo(User::class);
    }
}
