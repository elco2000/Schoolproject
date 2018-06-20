<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed channel_id
 */
class video extends Model

{
    protected $fillable = ['title', 'description', 'videoUrl', 'channel_id'];
    protected $guarded = [];

    public function channel(){
        return $this->belongsTo(Channel::class);

    }


}

