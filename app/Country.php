<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
//    use HasFactory;

    protected $fillable = [
        'name', 'code'
    ];

    public function suppliers(){
        return $this->hasMany(Suppliers::class);
    }
}
