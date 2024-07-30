@extends('Layouts.AdminApp')


@section('content')

<div class="col-xxl">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <h5 class="mb-0">Add Product</h5>
      </div>
      <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">

            @csrf
            
            {{-- {{dd($brands)}} --}}

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="brand_id">brand_id</label>
            <div class="col-sm-10">
                <select name="brand_id" id="brand_id">
                    @foreach ($brands as $brand)
                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                        
                    @endforeach
                </select>
              {{-- <input type="text" class="form-control" id="name" name="name" /> --}}
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="name">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" />
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="original_price">original price</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="original_price" name="original_price" />
            </div>
          </div>
         
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="discounted_price">discounted_price</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="discounted_price" name="discounted_price" />
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="seller">seller</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="seller" name="seller" />
            </div>
          </div>
         
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="quantity">quantity</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="quantity" name="quantity" />
            </div>
          </div>
          
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="manufacturer">manufacturer</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="manufacturer" name="manufacturer" />
            </div>
          </div>
         
          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="rating">rating</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="rating" name="rating" />
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="description">description</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="description" name="description" />
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="short_description">short_description</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="short_description" name="short_description" />
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="country">country</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="country" name="country" />
            </div>
          </div>

          {{-- <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="logo">Logo</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="logo" name="logo" />
            </div>
          </div> --}}
          
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