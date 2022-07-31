<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class ProductsTable extends Component
{
    
    protected $listeners = ['cart_updated' => 'render'];
    public $products;
    public array $quantity = [];

    public function mount()
    {
        $this->products = Product::all();
        foreach ($this->products as $product) {
            $this->quantity[$product->id] = 1;
        }
    }

    public function render()
    {
        $cart = Cart::content();

        return view('livewire.products-table',
            compact('cart'));
    }

    public function addToCart($product_id)
    {
        $product = Product::findOrFail($product_id);
        $cartItem= Cart::add(
            $product->id,
            $product->name,
            $this->quantity[$product_id],
            $product->price,
           
        );

        Cart::associate($cartItem->rowId,'App\Models\Product');
        // If 'Product' or 'App\Models\Product::class' is used instead of 'App\Models\Product'
        // that will return -> The supplied model Product does not exist.
     
        $this->emit('cart_updated');
    }

   



}
