@extends('Layouts.AdminApp')


@section('content')

<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Update Brand</h5>
      </div>
      <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="name">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" value="{{$brand->name}}" placeholder="Not Available" />
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="seller">seller</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="seller" name="seller" value="{{$brand->seller}}" placeholder="Not Available" />
            </div>
          </div>
         
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="origin">origin</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="origin" name="origin" value="{{$brand->origin}}"  placeholder="Not Available"/>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="location">location</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="location" name="location" value="{{$brand->location}}" placeholder="Not Available" />
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="rating">rating</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="rating" name="rating" value="{{$brand->rating}}" placeholder="Not Available" />
            </div>
          </div>
          
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="logo">logo</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="logo" name="logo" />
         
              <img src="{{asset('/brands/logo/'.$brand->logo)}}" alt="Logo Image" height="50px" width="50px">
         
            </div>
          </div>
          
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection