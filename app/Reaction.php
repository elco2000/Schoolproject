<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $fillable = ['text', 'account_id', 'channel_id'];
    protected $guarded = [];

    public function channel(){
        return $this->belongsTo(Channel::class);
    }
}
