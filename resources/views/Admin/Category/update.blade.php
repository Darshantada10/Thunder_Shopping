@extends('Layouts.AdminApp')


@section('content')

<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Edit Category</h5>
        <a href="{{url('/admin/category')}}" class="btn btn-primary float-end">Back</a>
      </div>
      <div class="card-body">
        <form action="{{url('/admin/category/'.$data->slug.'/edit/'.$data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="name">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name"  value="{{$data->name}}" />
              @error('name')
                  <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>
        
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="slug">Slug</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="slug" name="slug" value="{{$data->slug}}" />
              @error('slug')
                  <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="description">Description</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" id="description" name="description" rows="3">{{$data->name}}</textarea>
              @error('description')
                  <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="image">Image</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="image" name="image" accept="image/*" />
              <img src="{{asset('/uploads/category/'.$data->image)}}" alt="Category Image" height="40px" width="40px">
              @error('image')
                  <small class="text-danger">{{$message}}</small>
              @enderror
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="status">Status</label>
            <div class="col-sm-10">
              <input type="checkbox" id="status" name="status" {{$data->status == '1' ? 'checked' : ''}} />
            </div>
          </div>
          
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="other_details">Other Details</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="other_details" name="other_details" value="{{$data->other_details}}" />
              {{-- @error('other_details')
                  <small class="text-danger">{{$message}}</small>
              @enderror --}}
            </div>
          </div>
          
         <div class="col-md-12 mt-3 mb-3">
            <h4>SEO Tags</h4>
         </div>

         <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="meta_title">Meta Title</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="meta_title" name="meta_title" value="{{$data->meta_title}}" />
              {{-- @error('meta_title')
                  <small class="text-danger">{{$message}}</small>
              @enderror --}}
            </div>
          </div>
         
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="meta_keyword">Meta Keyword</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="meta_keyword" name="meta_keyword" value="{{$data->meta_keyword}}" />
              {{-- @error('meta_keyword')
                  <small class="text-danger">{{$message}}</small>
              @enderror --}}
            </div>
          </div>
          
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="meta_description">Meta Description</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" id="meta_description" name="meta_description">{{$data->meta_description}}</textarea>
              {{-- @error('meta_description')
                  <small class="text-danger">{{$message}}</small>
              @enderror --}}
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