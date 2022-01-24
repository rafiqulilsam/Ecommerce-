@extends('admin.master')
@section('title')
add-category
@endsection

@section('body')

<div class="row mt-3">
    <div class="col-md-3"></div>

    <div class="col-md-8  btn-dark">

    <button class="btn btn-block text-success text-xl-center"><h3>  {{ Session::get('message') }}</h3> </button>
    <button class="btn btn-block btn-primary text-xl-center"><h6>Add Product </h6> </button>
</br>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {!! Form::open(['route' => 'new-product','method' =>"post","class"=>"from-control", "enctype"=>"multipart/form-data"]) !!}

         <div class="mb-3">

            <label for="name" class="form-label col-md-4">Category Name</label>

            <select class="col-md-7" name="category_id" id="category_id">
                <option value=""> -- Select Category Name</option>
                @foreach ( $category as $category )
                <option value="{{$category->id}}"> {{$category->category_name}}</option>
                @endforeach

            </select>
            </div>



        <div class="mb-3">

            <label for="name" class="form-label col-md-4"> Brand Name  </label>
                <select class="col-md-7" name="brand_id" id="brand_id">
                    <option value=""> -- Select Category Name</option>
                    @foreach ( $brand as $brand )
                <option value="{{$brand->id}}"> {{$brand->brand_name}}</option>
                @endforeach
                </select>
        </div>

        <div class="mb-3">
            <label for="" class="form-label col-md-4">Product Name</label>
           <input type="text" class="col-md-7" name="product_name" />

        </div>

        <div class="mb-3">
            <label for="" class="form-label col-md-4">Product Price</label>
          <input type="number" class="col-md-7" name="product_price"/>

        </div>
        <div class="mb-3">
        <label for="" class="form-label col-md-4">Product Quantity</label>
            <input type="number"  class="col-md-7" name="product_quantity" />

        </div>

        <div class="mb-3">
            <label for="description" class="form-label col-md-4">Short Description</label>
            <textarea name="short_description" id="" class="form-control " rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label col-md-4">long Description</label>
            <textarea id="editor" name="long_description" id="" class="form-control " rows="5"></textarea>
        </div>


        <div class="mb-3">
            <label for="description" class="form-label col-md-4">Product Image</label>
            <label for=""> <input type="file" name="product_image" accept="image/*"/></label>

        </div>


        <div class="mb-3">
            <label class="form-label col-md-3">Publication Status</label>
            <div>


            <label for=""> <input type="radio"  checked name="publication_status" value="1">Pubiched</label>
            <label for=""> <input type="radio"   name="publication_status" value="0">Upubiched</label>
            </div>
        </div>
        <input type="submit"name="btn" value="Save Product info" class="btn btn-block btn-primary" >
    </br>
         {!! Form::close() !!}
    </div>
</div>

@endsection

