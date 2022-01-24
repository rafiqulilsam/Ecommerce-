@extends('admin.master')
@section('title')
add-category
@endsection

@section('body')

<div class="row mt-3">
    <div class="col-md-3"></div>

    <div class="col-md-8 btn-dark">
    </br>

    <button class="btn btn-block text-success text-xl-center"><h3>  {{ Session::get('message') }}</h3> </button>
    <button class="btn btn-block btn-primary text-xl-center"><h1>Edit Product </h1> </button>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- <form action="{{route('update-brand')}}" method="POST" > --}}
            {{-- @csrf --}}
            {!! Form::open(['route' => 'update-product','method' =>"post","class"=>"from-control"]) !!}

            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="name" name="category_id" value="{{$product->category_id}}">
                <input type="hidden" class="form-control"  name="id" value="{{$product->id}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Brand Name</label>
                <input type="text" class="form-control" id="name" name="brand_id" value="{{$product->brand_id}}">
                <input type="hidden" class="form-control"  name="id" value="{{$product->id}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="product_name" value="{{$product->product_name}}">
                <input type="hidden" class="form-control"  name="id" value="{{$product->id}}">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Product Price</label>
                <input type="text" class="form-control" id="name" name="product_price" value="{{$product->product_price}}">
                <input type="hidden" class="form-control"  name="id" value="{{$product->id}}">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Product Quantity</label>
                <input type="text" class="form-control" id="name" name="product_quantity" value="{{$product->product_quantity}}">
                <input type="hidden" class="form-control"  name="id" value="{{$product->id}}">
            </div>


            <div class="mb-3">
                <label for="description" class="form-label">Short Description</label>
                <textarea  name="short_description" id="description" class="form-control" rows="5">{{$product->short_description}}</textarea>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">long Description</label>
                <textarea  name="long_description" id="description" class="form-control" rows="5">{{$product->long_description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label col-md-4">Product Image</label>
                <label for=""> <input type="file" id="name" name="product_image" value="{{$product->product_quantity}}" accept="image/*"/></label>

            </div>

            <div class="mb-3">
                <label class="form-label">Publication Status</label>
                <div>


                <label for=""> <input type="radio"  name="publication_status" {{$product->publication_status==1 ? 'checked' : ''}} value="1"/>Pubiched</label>
                <label for=""> <input type="radio" name="publication_status" {{$product->publication_status== 0 ? 'checked' : '' value="0"/>Unpublished</label>
                </div>
            </div>
            <input type="submit"name="btn" value="Update product info" class="btn btn-block btn-primary" >
        </br>
        {!! Form::close() !!}
    </div>
</div>

@endsection

