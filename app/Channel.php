<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    //
    public function reactions() {
        return $this->hasMany(Reaction::class);
    }
}
