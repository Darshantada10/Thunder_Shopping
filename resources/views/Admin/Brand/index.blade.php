@extends('Layouts.AdminApp')

@section('content')

@include('Admin.Brand.addbrand')

{{-- @if (session('message')) --}}
    <h3 id="success" class="alert alert-success"></h3>
{{-- @endif --}}


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
        <tbody id="all-brands">
          {{-- @foreach ($categories as $category) --}}

          {{-- <tr>
            
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
            
          </tr> --}}

            {{-- @endforeach --}}
            
        </tbody>
      </table>

     
        
      </div>
    </div>
    {{-- {{$categories->links()}} --}}

    @push('script')
        <script>
            async function displayallbrands()
        {
            var data = await fetch('http://localhost:8000/admin/all-brands');
                
            var brands = await data.json();
            
            // var brandid = document.getElementById('all-brands');

            var brandtable = "";
            // console.log(brands.brands);
            
            brands.brands.forEach(brand=> {
                // console.log(brand.id);
                brandtable += 
                
            `

            <tr>
            
              <th scope="row">${brand.id}</th>
              <td>${brand.name}</td>
              <td>${brand.slug}</td>
              <td>${brand.status == '1' ? 'Hidden':'Visible'}</td>
              <td>
              <a href="#" data-bs-toggle="modal" data-bs-target="#updatebrand" class="btn btn-sm btn-success">Update</a>
              <a href="#" data-bs-toggle="modal" data-bs-target="#deletebrand" class="btn btn-sm btn-danger">Delete</a>
              </td>
            
            </tr>
            
            `
            
          });
          document.getElementById('all-brands').innerHTML = brandtable;
          // console.log(brands);
          
        }
        
                      
        displayallbrands();
      
      </script>
    @endpush

    {{-- //  <a href="{{url('/admin/category/'.$category->slug.'/edit/'.$category->id)}}" class="btn btn-sm btn-primary text-white">Update</a>
    //  <a href="{{url('/admin/category/'.$category->id.'/delete/')}}" class="btn btn-sm btn-danger text-white">Delete</a> --}}
  {{-- @push('script')
      
      <script>
        function modal()
        {
          console.log("inside function");
          
          $('#addbrand').modal('hide');
        
        }
        window.addEventListener('close-modal',event => {
          
          $('#addbrand').modal('hide');
        });
      </script>
  
  @endpush --}}

    
  @endsection