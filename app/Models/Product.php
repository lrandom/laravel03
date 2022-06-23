<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /*    public function types()
        {
            return $this->belongsToMany(Type::class, "type_products",
                "product_id", "type_id");
        }*/

    public function types()
    {
        return $this->morphToMany(Type::class, 'typepivotable');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
