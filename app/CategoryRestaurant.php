<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryRestaurant extends Model
{
    protected $fillable =
        [
            'restaurant_id','category_id',
        ];
}
