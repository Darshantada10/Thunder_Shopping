@extends('Layouts.AdminApp')


@section('content')

{{-- {{dd($brands)}} --}}

@if (session('success'))
      <div class="alert alert-success">{{session('success')}}</div>
@endif
@if (session('danger'))
      <div class="alert alert-danger">{{session('danger')}}</div>
@endif
@if (session('primary'))
      <div class="alert alert-primary">{{session('primary')}}</div>
@endif


<div class="card">
    <h5 class="card-header">
        All Products
        <a href="{{url('/admin/product/create')}}" class="btn rounded-pill btn-primary float-end">
            <i class="bx bx-list-plus"></i> Add Product</a>


    {{-- @dd($products) --}}
    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr class="text-nowrap">
            <th>ID</th>
            <th>Brand Name</th>
            <th>Product Name</th>
            <th>Original Price</th>
            <th>Discounted Price</th>
            <th>Seller</th>
            <th>Quantity</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
          <tr>
            {{-- {{dd($product->brand->location)}} --}}
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->brand->name}}</td>
            {{-- {{dd($product->product_data)}} --}}
            <td>{{$product->product_data['name']}}</td>
            <td>{{$product->product_data['original_price']}}</td>
            <td>{{$product->product_data['discounted_price']}}</td>
            <td>{{$product->product_data['seller']}}</td>
            <td>{{$product->product_data['quantity']}}</td>
            <td>

                <a href="{{url('/admin/product/update',['id'=>$product->id])}}" class="btn btn-sm btn-primary text-white">Update</a>
                <form action="{{url('admin/product/delete',['id'=>$product->id])}}" method="post">
                  @method('delete')
                  @csrf
                  {{-- <a href="/admin/product/delete/{{$product->id}}" class="btn btn-sm btn-danger text-white">Delete</a> --}}
                  <button type="submit" class="btn btn-sm btn-danger text-white">Delete</button>
                </form>
            
              </td>
            
          </tr>

            @endforeach
            
        </tbody>
      </table>
    </div>
  </div>

@endsection