<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model

{
    protected $fillable = ['name', 'text'];
    protected $guarded = [];
}
