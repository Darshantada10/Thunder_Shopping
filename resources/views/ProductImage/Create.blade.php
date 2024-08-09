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
            

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="product_id">Product id</label>
            <div class="col-sm-10">
                <select name="product_id" id="product_id">
                    @foreach ($products as $product)
                    <option value="{{$product->id}}">{{$product->product_data['name']}}</option>
                    @endforeach
                </select>
            </div>
          </div>

          <div class="row mb-3">
            <label class="col-sm-2 col-form-label" for="image">images</label>
            <div class="col-sm-10">
              <input type="file" multiple class="form-control" id="image[]" name="image[]" accept="image/*" />
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