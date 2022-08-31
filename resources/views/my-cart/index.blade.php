<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCart</title>

    <link rel="stylesheet" href="css/layout/layout.css">


   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="module" src="js/app.js"></script>

    <script>
            
    $(document).ready(function() 
    {

        

        // Increment    

        $( document.querySelectorAll('.incre')).each(function(index)
         {

            $(this).on("click", function()
            {
                var $inputNum=$(this).parent().parent().children(':first-child').children(':first-child');

                $value = $inputNum.val();

                $value++;
        
                $inputNum.val($value);

            });
        });


        // Decrement

        $( document.querySelectorAll('.decre')).each(function(index)
         {

            $(this).on("click", function()
            {
                var $inputNum = $(this).parent().parent().children(':first-child').children(':first-child');

                $value = $inputNum.val();

                if($value == 0)

                {
                    return;
                }

                $value--;
        
                $inputNum.val($value);

            });
        });


      });
    </script>
    

</head>
<body>

    <div class="container">

            <h2 class="cart_grid_title">This is your Cart list</h2>
            <div class="cart-grid">

                @foreach ($mycarts as $mycart)

                <!-- ForElse is a ForEach loop, but with extra handling for empty array. -->

                <div class="cart_items">
                        <img src="/img/weed/{{ $mycart->model->image }}" alt="" class="card__img">
                        <div class="card__content">
                            <h2 class="card__title">{{ $mycart->name }}</h2>
                            <p class="card__price">{{ $mycart->price }} MMK</p>
                            <p class="card__description">Iure, voluptate corrupti.</p>
                    </div>
                    <div class="qty-box">
                        <div class="qty">
                            <input id="number" class="number" type="number" value="{{ $mycart->qty }}" /><span class="weight">Gram</span>
                        </div>
                    
                        <div class="adjust">
                            <button class="incre">+</button>
                            <button class="decre">-</button>
                        </div>
                    
                    </div>
                </div>


                
                @endforeach
    
            </div>
    </div>
</body>
</html>
