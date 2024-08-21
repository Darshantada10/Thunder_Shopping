@extends('Layouts.AdminApp')

@section('content')


@if (session('message'))
    <h3 class="alert alert-success">{{session('message')}}</h3>
@endif


<div class="card">
    <h5 class="card-header">
        All Products
        <a href="{{url('/admin/product/create')}}" class="btn rounded-pill btn-primary float-end">
            <i class="bx bx-list-plus"></i> Add Product</a>



    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr class="text-nowrap">
            <th>ID</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          {{-- @foreach ($categories as $category)

          <tr>
            
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->status == '1' ? 'Hidden':'Visible'}}</td>
            <td>
              <img src="/uploads/category/{{$category->image}}" alt="Category Image" height="50px" width="50px">

            </td>
            <td>
                <a href="{{url('/admin/category/'.$category->slug.'/edit/'.$category->id)}}" class="btn btn-sm btn-primary text-white">Update</a>
                <a href="{{url('/admin/category/'.$category->id.'/delete/')}}" class="btn btn-sm btn-danger text-white">Delete</a>
            </td>
            
          </tr>

            @endforeach --}}
            
        </tbody>
      </table>

      </div>
    </div>
    {{$products->links()}}

    
  @endsection