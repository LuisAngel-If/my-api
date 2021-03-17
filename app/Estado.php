<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    //
    protected $table = 'estados';

    protected $fillable = ['nombre', 'ciudad_id'];

    public function estados()
    {
        return $this->belongsTo(User::class);
    }
}
