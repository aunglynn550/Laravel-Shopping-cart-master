<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{

    public function index()
    {

        $my_carts = Cart::content();

        // $my_carts->associate('Product');
        // This will return -> Method Illuminate\Support\Collection::associate does not exist.
        // But it work in the livewire
        
        return view('my-cart/index',['mycarts'=>$my_carts]);

    }




    public function store(Request $request)
    {
    //    $product = Product::findOrFail($request->input('product_id'));
    //    Cart::add(
    //        $product->id,
    //        $product->name,
    //        $request->input('quantity'),
    //        $product->price / 100,
    //    );

    //    return redirect()->route('products.index')->with('message', 'Successfully added');
    return "hello";
    }
}
