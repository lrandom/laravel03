<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

//    public function products()
//    {
//        return $this->belongsToMany(Product::class, "type_products",
//            "type_id", "product_id");
//    }

    public function products()
    {
        return $this->morphedByMany(Product::class,
            'typepivotable','type_pivots');
    }

    public function posts()
    {
        return $this->morphedByMany(Post::class, 'typepivotable','type_pivots');
    }
}
