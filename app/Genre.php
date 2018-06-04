<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['name'];
    protected $guarded = [];

    public function channel(){
        return $this->belongsTo(Category::class);
    }
}
