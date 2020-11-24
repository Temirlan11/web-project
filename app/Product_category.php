<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_category extends Model
{
//    use HasFactory;

    protected $fillable = [
        'name', 'description', 'pictureURL'
    ];

    public function products(){
        return $this->belongsToMany(Products::class);
    }
}
