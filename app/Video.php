<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class video extends Model

{
    protected $fillable = ['title', 'description', 'videoUrl'];
    protected $guarded = [];

    public function channel(){
        return $this->belongsTo(Channel::class);
    }
}

