<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name', 'description', 'country_id', 'phone', 'address', 'logoURL', 'email_address', 'password'
    ];

    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function products(){
        return $this->hasMany(Products::class);
    }
}
