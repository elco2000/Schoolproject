<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description'];
    protected $guarded = [];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'CategoriesGenres', 'category_id', 'genre_id');
    }

    public function channels()
    {
        return $this->belongsToMany(Channel::class, 'CategoriesChannels', 'category_id', 'channel_id');
    }
}
