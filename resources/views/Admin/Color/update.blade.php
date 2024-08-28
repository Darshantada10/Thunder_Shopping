@extends('Layouts.AdminApp')


@section('content')

<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Edit Color</h5>
        <a href="{{url('/admin/colors')}}" class="btn btn-primary float-end">Back</a>
      </div>
      <div class="card-body">
        <form action="{{url('/admin/color/update/'.$color->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="name">Color Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" value="{{$color->name}}" />
              @error('name')
                  <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
        
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="code">Color Code</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="code" name="code" value="{{$color->code}}" />
              @error('code')
                  <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
        
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="status">Status</label>
            <div class="col-sm-10">
              <input type="checkbox" id="status" name="status" {{$color->status == '1' ? 'checked' : ''}} />
            </div>
          </div>
          
          <div class="row justify-content-end">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection