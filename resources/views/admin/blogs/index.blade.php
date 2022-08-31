@extends('admin.layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="card" class="card">
                    <div id="blog-list-header" class="card-header [ d-flex justify-content-between fw-800 ]">
                       <span class="fs-25">Blogs List</span> 
                       <div class="btn">
                            <a class="button" data-type="primary" href="{{ route('blogs.create') }}">Create New Blog</a>
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
                                    Title
                                    </div>
                                </th>
                                <th>  
                                    <div class="d-flex justify-content-center">
                                    Description
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
          @foreach($blogs as $blog)

          <tr>
            <td class="d-flex justify-content-center">
                <div class="blog-img">
                    <img src="/img/football/{{ $blog->image }}" alt="">
                </div>
                
            </td>
            <td> 
                <div class="d-flex justify-content-center">
                {{ $blog->title }} 
                </div>
            </td>
            <td>
                <div class="d-flex justify-content-center">
                {{ $blog->description }}
                </div>
              
            </td>
            <td>
            <div class="d-flex justify-content-center">
                {{ $blog->created_at }}
            </div>
            </td>
            <td>
            <div class="d-flex justify-content-center">
                {{ $blog->updated_at }}
            </div>
            </td>
            <td> 
                <div class="button">
                          <a href="{{ route('blogs.edit',$blog->id) }}">Edit blog</a>
                </div>
            </td>
          </tr>
                 

                  @endforeach
                
              
          </div>
      </div>

</div>

        
@endsection

