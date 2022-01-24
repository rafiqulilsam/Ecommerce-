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
    <button class="btn btn-block btn-primary text-xl-center"><h1>Edit Brand </h1> </button>

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
            {!! Form::open(['route' => 'update-brand','method' =>"post","class"=>"from-control"]) !!}

            <div class="mb-3">
                <label for="name" class="form-label">Brand Name</label>
                <input type="text" class="form-control" id="name" name="brand_name" value="{{$brand->brand_name}}"/>
                <input type="hidden" class="form-control"  name="id" value="{{$brand->id}}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Brand Description</label>
                <textarea  name="brand_description" id="description" class="form-control" rows="5">{{$brand->brand_description}}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Publication Status</label>
                <div>


                <label for=""> <input type="radio"  name="publication_status" {{$brand->publication_status==1 ? 'checked' : ''}} value="1"/>Pubiched</label>
                <label for=""> <input type="radio" name="publication_status" {{$brand->publication_status== 0 ? 'checked' : '' value="0"/>Unpublished</label>
                </div>
            </div>
            <input type="submit"name="btn" value="Update Brand info" class="btn btn-block btn-primary" >
        </br>
        {!! Form::close() !!}
    </div>
</div>

@endsection

