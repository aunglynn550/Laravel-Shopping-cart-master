@extends('admin.layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header [ d-flex justify-content-between fw-800 ]">
                       <span class="fs-25">Products List</span> 
                       <div class="btn">
                            <a class="button" data-type="primary" href="{{ route('admin.products.create') }}">Create Product</a>
                       </div>
                       
                
                    </div>
                       
                   
                        
            

                    <div class="card-body">

                        @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        <table class="table [ user-approve-table ]">
                            <tr>
                                <th></th>
                                <th>  
                                    <div class="d-flex justify-content-center">
                                    Name
                                    </div>
                                </th>
                                <th>  
                                    <div class="d-flex justify-content-center">
                                    Prices
                                    </div>
                                </th>
                                <th>  
                                    <div class="d-flex justify-content-center">
                                   Created_at
                                    </div>
                                </th>
                                <th>  
                                    <div class="d-flex justify-content-center">
                                    Updated_at
                                    </div>
                                </th>
                                <th>  
                                    <div class="d-flex justify-content-center">
                
                                    </div>
                                </th>
                            </tr>
          @foreach($products as $product)

          <tr>
            <td class="d-flex justify-content-center">
                <div class="product-img">
                    <img src="/img/weed/{{ $product->image }}" alt="">
                </div>
                
            </td>
            <td> 
                <div class="d-flex justify-content-center">
                {{ $product->name }} 
                </div>
            </td>
            <td>
                <div class="d-flex justify-content-center">
                {{ $product->price }}
                </div>
              
            </td>
            <td>
            <div class="d-flex justify-content-center">
                {{ $product->created_at }}
            </div>
            </td>
            <td>
            <div class="d-flex justify-content-center">
                {{ $product->updated_at }}
            </div>
            </td>
            <td> 
                <div class="button">
                          <a href="{{ route('admin.edit-product',['id'=>$product->id]) }}">Edit Product</a>
                </div>
            </td>
          </tr>
                 

                  @endforeach
                
              
          </div>
      </div>

</div>

        
@endsection

