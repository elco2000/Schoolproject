<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    //
    public function reactions() {
        return $this->hasMany(Reaction::class);
    }

    public function videos() {
        return $this->hasMany(Video::class);
    }

}
