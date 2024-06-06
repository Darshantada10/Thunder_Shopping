@extends('Layouts.AdminApp')


@section('content')



<div class="card">
    <h5 class="card-header">
        All Brands
        <a href="{{url('/admin/brand/create')}}" class="btn rounded-pill btn-primary float-end">
            <i class="bx bx-list-plus"></i> Add Brand</a>



    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr class="text-nowrap">
            <th>ID</th>
            <th>Name</th>
            <th>Seller</th>
            <th>Location</th>
            <th>Brand Origin</th>
            <th>Rating</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
            <td>Table cell</td>
           
          </tr>
         
        </tbody>
      </table>
    </div>
  </div>
















@endsection