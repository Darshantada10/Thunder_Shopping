@extends('Layouts.AdminApp')

@section('content')


@if (session('message'))
    <h3 class="alert alert-success">{{session('message')}}</h3>
@endif


<div class="card">
    <h5 class="card-header">
        All Brands
        <a href="{{url('/admin/color/create')}}" class="btn rounded-pill btn-primary float-end">
            <i class="bx bx-list-plus"></i> Add Color</a>



    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr class="text-nowrap">
            <th>ID</th>
            <th>Name</th>
            <th>Code</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($colors as $color)

          <tr>
            
            <th scope="row">{{$color->id}}</th>
            <td>{{$color->name}}</td>
            <td>{{$color->code}}</td>
            <td>{{$color->status == '1' ? 'Hidden':'Visible'}}</td>
            <td>
                <a href="{{url('/admin/color/edit/'.$color->id)}}" class="btn btn-sm btn-primary text-white">Update</a>
                <a href="{{url('/admin/color/delete/'.$color->id)}}" class="btn btn-sm btn-danger text-white">Delete</a>
            </td>
            
          </tr>

            @endforeach
            
        </tbody>
      </table>

     
        
      </div>
    </div>
    {{-- {{$colors->links()}} --}}


    
  @endsection