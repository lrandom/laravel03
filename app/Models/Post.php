<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //trait - php
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
        'views',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
