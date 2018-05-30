<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    //
    public function channel(){
        return $this->belongsTo(Channel::class);
    }
}
