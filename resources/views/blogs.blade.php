@extends('layouts.blogs.app')


@section('content')

<div class="container">
    <div class="product-grid">
    <form action="{{ route('create.token') }}" method="get">
        <input type="text" name="token_name">
        <input type="submit" value="create token">
    </form>

    <a href="{{ route('logout') }}">Logout</a>
    <a href="{{ route('login') }}">Login</a>
    

    @foreach ($blogs as $blog)

    <!-- ForElse is a ForEach loop, but with extra handling for empty array. -->
    
    <div class="card">
          
          <div class="card__content">
            <div class="image">
            <img src="/img/football/{{ $blog->image }}" alt="" class="card__img">
            </div>
          

          <div class="card__description">
            <div class="description__content">
                <h2 class="title">{{ $blog->title }}</h2>
                <p>{{ $blog->created_at }}</p>
               <label for="#">Author:</label> <span>{{ $blog->author }}</span>
                <p class="description">{{ $blog->description }}</p>
            </div>
         
          </div>
      
    
               
          </div>
        </div>
    @endforeach

       
    </div>
</div>


@endsection