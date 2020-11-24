<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
//    use HasFactory;

    protected $fillable = [
        'user_id', 'basket_added_date'
    ];

    public function products(){
        return $this->belongsToMany(Products::class);
    }
}
