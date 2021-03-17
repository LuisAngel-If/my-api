<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discapacidades extends Model
{
    //
    protected $table = 'discapacidades';

    protected $fillable = ['nombre'];

    public function discapadidad()
    {
        return $this->belongsTo(User::class);
    }
}
