@extends('admin.master')
@section('title')
add-category
@endsection

@section('body')


<div class="row mt-3">
    <div class="col-md-3"></div>

    <div class="col-md-8 btn-dark">


    <button class="btn btn-block text-success text-xl-center"><h6>  {{ Session::get('message') }}</h6> </button>
    <button class="btn btn-block btn-primary text-xl-center"><h1>Manage Category</h1> </button>

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
                    <th>SL No</th>
                    <th>Category Name</th>
                    <th>Category Description</th>
                    <th>Publication Statu</th>
                    <th>Action</th>
                </tr>
                @foreach ($category as $key=>$category )

                <tr>
                    <td>{{ $key+1}}</td>
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->category_description}}</td>
                    <td>{{$category->publication_status == 1 ? 'Published' : ''}}</td>

                    <td>
                        @if ($category->publication_status ==1)
                        <a href="{{ route('unpublished-category',['id'=>$category->id])}}" class="btn btn-xs btn-info">
                            <i class="fas fa-arrow-up"></i>
                        </a>
                        @else
                        <a href="{{ route('published-category',['id'=>$category->id])}}" class="btn btn-xs btn-warning">
                            <i class="fas fa-arrow-down"></i>
                        </a>
                        @endif

                        <a href="{{ route('edit-category',['id'=>$category->id])}}" class="btn btn-xs btn-success">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{ route('delete-category',['id'=>$category->id])}}" class="btn btn-xs btn-danger">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach

            </table>

</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>


    </div>

</div>



@endsection

