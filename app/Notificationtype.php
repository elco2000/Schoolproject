<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notificationtype extends Model
{
    protected $fillable = ['name'];
    protected $guarded = [];

    public function notification() {
        return $this->hasMany(Notification::class);
    }
}
