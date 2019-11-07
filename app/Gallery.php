<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillabel = ['name', 'categories'];

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function categories() {
        return $this->belongsToMany('App\Category', 'gallery_category', 'gallery_id', 'category_id');
    }

    public function files() {
        return $this->hasMany('App\File');
    }
}
