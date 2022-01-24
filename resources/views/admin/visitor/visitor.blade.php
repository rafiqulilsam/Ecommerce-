@extends('admin.master')
@section('title')
add-category
@endsection

@section('body')


<div class="row mt-3">
    <div class="col-md-3"></div>

    <div class="col-md-8 btn-dark">


    <button class="btn btn-block text-success text-xl-center"> </button>
    <button class="btn btn-block btn-primary text-xl-center"><h1> Visitor Manage </h1> </button>

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
            <thead>
                <tr class="bg-success">
                <th class="th-sm">NO</th>
                <th class="th-sm">IP</th>
                <th class="th-sm">Date & Time</th>
              </tr>
            </thead>
            <tbody>
                @foreach($visitorData as $visitorData)
              <tr>
                <td class="th-sm">{{$visitorData->id}}</td>
                <td class="th-sm">{{$visitorData->ip_address}}</td>
                <td class="th-sm">{{$visitorData->visit_time}}</td>
              </tr>
              
                @endforeach

            </tbody>

          </table>





    </div>

</div>



@endsection

