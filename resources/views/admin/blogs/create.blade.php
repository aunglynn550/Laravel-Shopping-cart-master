@extends('admin.layouts.app')

@section('content')


<div class="container">
        <div class="row justify-content-center h-100">
            <div class="col-md-12 h-100">

            <form class="h-100" action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="input-group mb-3">                   
                    <input name="title" type="text" class="form-control" placeholder="Title.." aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="input-group h-75">                   
                    <textarea name="description" class="form-control" aria-label="With textarea" placeholder="Descriptions Here..."></textarea>
                </div>

                <div class="btn">
                    <input type="submit" class="button" data-type="neutral" value="Create">
                </div>

            </form>
                  

                </div>
            </div>
        </div>

@endsection