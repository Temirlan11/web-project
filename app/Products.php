<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
//    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price', 'supplier_id', 'quantity', 'size', 'color', 'discount', 'rating',
        'smallPictureURL', 'largePictureURL', 'addedDate', 'inTopPage'
    ];

    public function supplier(){
        return $this->belongsTo(Suppliers::class);
    }

    public function product_category(){
        return $this->belongsToMany(Product_category::class);
    }
    public function baskets(){
        return $this->belongsToMany(Basket::class);
    }
}
