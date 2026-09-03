<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title', 'slug', 'category', 'cover_image', 'description', 'order',
    ];

    public function images()
{
    return $this->hasMany(ProjectImage::class)->orderBy('order');
}

}