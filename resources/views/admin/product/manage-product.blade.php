@extends('admin.master')
@section('title')
add-category
@endsection

@section('body')

</br>
<div class="row col-md-12">

    <div class="col-md-3"></div>

    <div class="col-md-9 p-3 btn-dark">

        </br>
        <button class="btn btn-block text-success text-xl-center"><h6>  {{ Session::get('message') }}</h6> </button>
        <button class="btn btn-block btn-primary text-xl-center"><h5>Manage Product</h5> </button>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <table class="table table-bordered">
                <tr class="bg-success">
                    <th>S N</th>
                    <th>Cat N</th>
                    <th>Br N</th>
                    <th>Pr N</th>
                    <th>Pr P</th>
                    <th>Pr Q</th>
                    <th>Short D</th>
                    <th>Long D</th>
                    <th>Pr I</th>
                    <th>Pu Status</th>
                    <th>Action</th>
                </tr>
                @foreach ($product as $key=>$product )

                <tr class="p-6">
                    <td class=" ml-3 pl-3">{{ $key+1}}</td>
                    <td>{{$product->category_name}}</td>
                    <td>{{$product->brand_name}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->product_quantity}}</td>
                    <td>{{$product->short_description}}</td>
                    <td>{{$product->long_description}}</td>

                    <td><img src="{{ 'product-image/'.$product->product_image}}"  alt="" width="70px"></td>
                    <td>{{$product->publication_status == 1 ? 'Published' : ''}}</td>

                    <td>
                        @if ($product->publication_status ==1)
                        <a href="{{ route('unpublished-product',['id'=>$product->id])}}" class="btn btn-xs btn-info">
                            <i class="fas fa-arrow-up"></i>
                        </a>
                        @else
                        <a href="{{ route('published-product',['id'=>$product->id])}}" class="btn btn-xs btn-warning">
                            <i class="fas fa-arrow-down"></i>
                        </a>
                        @endif

                        <a href="{{ route('edit-product',['id'=>$product->id])}}" class="btn btn-xs btn-success">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('delete-product',['id'=>$product->id])}}" class="btn btn-xs btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach

            </table>

                


    </div>

</div>



@endsection

