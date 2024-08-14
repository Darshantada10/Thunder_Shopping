@extends('Layouts.AdminApp')

@section('content')

@include('Admin.Brand.addbrand')

@if (session('message'))
    <h3 class="alert alert-success">{{session('message')}}</h3>
@endif


<div class="card">
    <h5 class="card-header">
        All Brands
        <a href="#" data-bs-toggle="modal" data-bs-target="#addbrand" class="btn btn-primary float-end">Add Brands</a>
        {{-- <a href="{{url('/admin/category/create')}}" class="btn rounded-pill btn-primary float-end">
            <i class="bx bx-list-plus"></i> Add Brand</a> --}}



    </h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr class="text-nowrap">
            <th>ID</th>
            <th>Name</th>
            <th>Slug</th>
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
    {{-- {{$categories->links()}} --}}


{{-- <div class="modal fade" id="deletemodal" tabindex="-1" aria-hidden="true" aria-labelledby="deletemodallabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deletemodallabel">Category Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are You Sure You Want To Delete This Category???</p>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Yes Delete</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> --}}

  {{-- @push('script')
      
      <script>
        window.addEventListener('')
      </script>
  
  @endpush --}}

    
  @endsection