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
    <button class="btn btn-block btn-primary text-xl-center"><h1>Add Product </h1> </button>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('new-category') }}" method="POST" >
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text"  class="form-control" id="name" name="category_name" value="">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Category Description</label>
                <textarea id="editor" name="category_description" id="description" class="form-control" rows="5"></textarea>


            </div>
            <div class="mb-3">
                <label class="form-label">Publication Status</label>
                <div>


                <label for=""> <input type="radio" checked name="publication_status" value="1">Pubiched</label>
                <label for=""> <input type="radio" name="publication_status" value="0">Upubiched</label>
                </div>
            </div>
            <input type="submit"name="btn" value="Save category info" class="btn btn-block btn-primary" >
        </br>
        </form>
    </div>
</div>

@endsection

