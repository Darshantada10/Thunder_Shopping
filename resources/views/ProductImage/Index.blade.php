@extends('Layouts.AdminApp')


@section('content')


@if (session('success'))
      <div class="alert alert-success">{{session('success')}}</div>
@endif
@if (session('danger'))
      <div class="alert alert-danger">{{session('danger')}}</div>
@endif
@if (session('primary'))
      <div class="alert alert-primary">{{session('primary')}}</div>
@endif

{{-- {{dd($productimages)}} --}}

<div class="card">
    <h5 class="card-header">
        All Product Images
        <a href="{{url('/admin/product-images/create')}}" class="btn rounded-pill btn-primary float-end">
            <i class="bx bx-list-plus"></i> Add Product Images</a>
    </h5>
    
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr class="text-nowrap">
            <th>ID</th>
            <th>Product Name</th>
            <th>Images</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($productimages as $productid=>$images)
          
          <tr>
            {{-- {{dd($images->product->product_data['name'])}} --}}
            <th scope="row">{{$productid}}</th>
            <td>{{$images->first()->product->product_data['name']}}</td>
            {{-- {{dd($images)}} --}}
            <td>
              {{-- <div class="d-flex flex-wrap"> --}}
                @foreach ($images as $image)
                {{-- <div class="p-2"> --}}
                  <img src="/{{$image->image}}" class="custom-image img-fluid"  alt="no image found" height="100" width="100">
                {{-- </div> --}}
                @endforeach
              {{-- </div> --}}
            </td>
            {{-- <td>{{$product->product_data['name']}}</td>
            <td>{{$product->product_data['original_price']}}</td>
            <td>{{$product->product_data['discounted_price']}}</td>
            <td>{{$product->product_data['seller']}}</td> --}}
            {{-- <td>{{$product->product_data['quantity']}}</td> --}}
            <td>

                <a href="{{url('/admin/product/update',['id'=>$productid])}}" class="btn btn-sm btn-primary text-white">Update</a>
                <form action="{{url('admin/product/delete',['id'=>$productid])}}" method="post">
                  @method('delete')
                  @csrf
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