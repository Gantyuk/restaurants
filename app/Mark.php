<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $fillable=[
        'mark','user_id','restaurant_id'
    ];
    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
