


    

<div class="container">
    <div class="product-grid">
    

    @forelse ($products as $product)

    <!-- ForElse is a ForEach loop, but with extra handling for empty array. -->
    
    <div class="card stacked">
          <img src="/img/weed/{{ $product->image }}" alt="" class="card__img">
          <div class="card__content">
            <h2 class="card__title">{{ $product->name }}</h2>
            <p class="card__price">{{ $product->price }} MMK</p>
            <p class="card__description">Iure, voluptate corrupti.</p>
            @if ($cart->where('id', $product->id)->count())

            <div class="wrapper">
                 <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                     <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                      <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                </svg>

                <span>In cart</span>
            </div>


                    
                @else
                    <form wire:submit.prevent="addToCart({{ $product->id }})" action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <div class="qty">
                        <input wire:model="quantity.{{ $product->id }}" class="qty-box" type="number"/><span class="weight">Gram</span>
                        </div>
                        

            <div class="btn">
                        <button class="add-to-cart" type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add to Cart
                        </button>
            </div>
                     
                    </form>
                @endif
          </div>
        </div>


       
    @empty
     
    @endforelse


  

    </div>
</div>
