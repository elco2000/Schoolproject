<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Channel extends Model
{

    protected $fillable = ['name', 'logoUrl', 'channelUrl', 'identertainer'];
    protected $guarded = [];

    public function reactions() {
        return $this->hasMany(Reaction::class);
    }

    public function videos() {
        return $this->hasMany(Video::class, 'channel_id');
    }

    public function owners(){
        return $this->belongsTo(User::class, 'user_id');
    }



}
