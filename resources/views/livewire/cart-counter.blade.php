<div class="cart-counter" role="alert">

<div class="counter-content">
    <a href="{{ route('cart.index') }}">
        <i class="fa fa-shopping-cart"></i>
    
        <span class="number">{{ $cart_count }}</span>
    </a>


</div>

<form wire:submit.prevent="delete()">
    <button class="clear-cart" type="submit">Clear Cart</button>
</form>
    
</div>
