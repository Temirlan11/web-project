<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
//    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'user_id'
    ];

    public function products(){
        return $this->belongsToMany(Products::class);
    }
}
