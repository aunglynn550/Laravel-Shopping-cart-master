<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="favicon.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dynamic grid layout</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bungee&family=Bungee+Shade&family=Heebo:wght@100..900&display=swap"
    rel="stylesheet">

    <!-- Style -->
  <link rel="stylesheet" href="css/layout/layout.css">
 
    <!-- Scripts -->
    <script type="module" src="{{ asset('js/app.js') }}" defer></script>


    <script type="module" src="{{ asset('js/rotate/app.js') }}" defer></script>
</head>

<body>
  <div class="scroll-tracker"></div>
  <div class="navbar" id="parallax"></div>
  <header></header>
  <main>
    <div class="container">
      <!-- <h1 class="main-title">Our Products</h1> -->
      <!-- <p class="min-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores corporis ipsa tempora,
        blanditiis nam
        perferendis deleniti iure error velit alias omnis facere, illum numquam molestiae eveniet nisi in molestias
        laborum rerum! Omnis assumenda sunt excepturi facere. At rem maiores accusamus.</p> -->
      <div class="product-grid">
        <div class="card stacked featured">
          <img src="/img/weed/weed1.jpg" alt="a grey baseball hat with a small palm tree on the front" class="card__img">
          <div class="card__content">
            <h2 class="card__title">Lorem, ipsum dolor.</h2>
            <p class="card__price">$325</p>
            <p class="card__description">Lorem, ipsum dolor.</p>
          </div>
        </div>

        <div class="card stacked">
          <img src="/img/weed/weed2.jpg" alt="" class="card__img">
          <div class="card__content">
            <h2 class="card__title">Ullam, cum ut.</h2>
            <p class="card__price">$315</p>
            <p class="card__description">Iure, voluptate corrupti.</p>
            @if ($cart->where('id', $product->id)->count())
                    In cart
                @else
                    <form wire:submit.prevent="addToCart({{ $product->id }})" action="{{ route('cart.store') }}" method="POST">
                        @csrf
                        <input wire:model="quantity.{{ $product->id }}" type="number"/><span>Gram</span>

            
                        <button type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Add to Cart
                        </button>
                    </form>
                @endif
          </div>
        </div>
        <div class="card stacked">
          <img src="/img/weed/weed3.jpg" alt="" class="card__img">
          <div class="card__content">
            <h2 class="card__title">Libero, ab dolorem?</h2>
            <p class="card__price">$225</p>
            <p class="card__description">Eveniet, necessitatibus id.</p>
          </div>
        </div>
        <div class="card stacked">
          <img src="/img/weed/weed4.jpg" alt="" class="card__img">
          <div class="card__content">
            <h2 class="card__title">Minima, earum ipsam.</h2>
            <p class="card__price">$500</p>
            <p class="card__description">Illo, dolorem magnam?</p>
          </div>
        </div>
        <div class="card stacked">
          <img src="/img/weed/weed5.jpg" alt="" class="card__img">
          <div class="card__content">
            <h2 class="card__title">Odio, nam consequatur.</h2>
            <p class="card__price">$255</p>
            <p class="card__description">Quos, facere alias.</p>
          </div>
        </div>
        <div class="card stacked">
          <img src="/img/weed/weed6.jpg" alt="" class="card__img">
          <div class="card__content">
            <h2 class="card__title">Quidem, aut numquam!</h2>
            <p class="card__price">$345</p>
            <p class="card__description">Aliquid, enim ea.</p>
          </div>
        </div>
        <div class="card stacked">
          <img src="/img/weed/weed7.jpg" alt="" class="card__img">
          <div class="card__content">
            <h2 class="card__title">Accusantium, placeat dolores?</h2>
            <p class="card__price">$105</p>
            <p class="card__description">Corporis, commodi facilis!</p>
          </div>
        </div>

      </div>

    </div>

    
  </main>

  <footer>
  Lorem Ipsum is simply dummy text of the printing
   and typesetting industry. Lorem Ipsum has been the
  industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
  </footer>
</body>

</html>