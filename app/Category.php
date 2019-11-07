<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function gallery() {
        return $this->hasMany('App\Gallery', 'gallery_category', 'category_id', 'gallery_id');
    }
}
