<?php

namespace App\Http\Controllers;

use App\Basket;
use App\Product_category;
use App\Products;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $user_id = session()->get('user_id');
        $current_user = User::find($user_id);
        $products = Products::all();
        $product_categories = Product_category::all();
        return view('index', compact(['product_categories', 'products', 'current_user']));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function addToBasket($id){
        $user_id = session()->get('user_id');
        $basket = Basket::where('user_id', $user_id)->firstOrFail();
        $product = Products::find($id);
//        dd($basket);
        $basket->products()->attach($product->id);
//        $product->baskets()->attach($product->id);
//        dd($basket);
        return view('basket', compact('basket'));
    }

    public function destroyProduct($id)
    {
        $products = Products::find($id);
        $products->delete();
        dd($products);
    }

    public function show($id)
    {
        return view('productDetail', ['productID'=>$id]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
