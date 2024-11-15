@extends('Layouts.AdminApp')

@section('content')


@if (session('message'))
    <h3 class="alert alert-success">{{session('message')}}</h3>
@endif
 
    <div class="card">
        
        <div class="card-header">
            Add Products
            <a href="{{url('/admin/products')}}" class="btn rounded-pill btn-primary float-end">
            Back </a>
        </div>

        <div class="card-body">
            
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">

                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab" aria-selected="true">
                        Home
                    </button>
                </li>
               
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="seo-tab" data-bs-toggle="tab" data-bs-target="#seo-tab-pane" type="button" role="tab" aria-controls="seo-tab" aria-selected="false">
                        SEO Tags
                    </button>
                </li>
                
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab" aria-selected="false">
                        Details
                    </button>
                </li>
               
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab" aria-selected="false">
                        Product Image
                    </button>
                </li>
               
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="color-tab" data-bs-toggle="tab" data-bs-target="#color-tab-pane" type="button" role="tab" aria-controls="color-tab" aria-selected="false">
                        Product Color
                    </button>
                </li>


            </ul>


            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    
                    <div class="mb-3">
                        <label for="category">Select Category</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="" >--Select Category--</option>

                            @forelse ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>

                                @empty
                                
                                <option value="">No Category Found</option>
                                
                            @endforelse
                            
                        </select>
                    </div>
                   
                    <div class="mb-3">
                        <label for="category">Select Brand</label>
                        <select name="brand_id" id="brand_id" class="form-control">
                            <option value="" >--Select Brand--</option>

                            @forelse ($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->name}}</option>
                                
                                @empty
                                        
                                <option value="">No Brand Found</option>
                            @endforelse

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="name">Product Name</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="slug">Product Slug</label>
                        <input type="text" name="slug" id="slug" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="small_description">Small Description</label>
                        <textarea name="small_description" id="small_description" class="form-control" rows="2"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                    </div>

                </div>

                <div class="tab-pane fade border p-3" id="seo-tab-pane" role="tabpanel" aria-labelledby="seo-tab" tabindex="0">

                    <div class="mb-3">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" name="meta_title" id="meta_title" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="meta_keyword">Meta Keyword</label>
                        <input type="text" name="meta_keyword" id="meta_keyword" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="meta_description">Meta Description</label>
                        <textarea name="meta_description" id="meta_description" class="form-control" rows="4"></textarea>
                    </div>

                </div>

                <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">

                    <div class="row">

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="original_price">Original Price</label>
                                <input type="text" name="original_price" id="original_price" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="selling_price">Selling Price</label>
                                <input type="text" name="selling_price" id="selling_price" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" id="quantity" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="trending">Trending</label>
                                <input type="checkbox" name="trending" id="trending">
                            </div>
                        </div>
                       
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="status">Status</label>
                                <input type="checkbox" name="status" id="status">
                            </div>
                        </div>
                       
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="featured">Featured</label>
                                <input type="checkbox" name="featured" id="featured">
                            </div>
                        </div>

                    </div>

                </div>
               
                <div class="tab-pane fade border p-3" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                            <div class="mb-3">
                                <label for="image">Product Image</label>
                                <input type="file" multiple name="image[]" id="image" class="form-control">
                            </div>
                </div>
               
                <div class="tab-pane fade border p-3" id="color-tab-pane" role="tabpanel" aria-labelledby="color-tab" tabindex="0">
                            <div class="mb-3">
                                <label for="colors">Product Color</label>
                                <div class="row">
                                    @forelse ($colors as $color)
                                        
                                    <div class="col-md-3">
                                        <div class="p-2 border mb-3">
                                            Color : <input type="checkbox" name="colors[{{$color->id}}]" value="{{$color->id}}" >{{$color->name}}
                                            <br>
                                            Quantity : <input type="number" name="colorquantity[{{$color->id}}]" id="colorquantity" style="width:70px; border:1px solid">

                                        </div>
                                    </div>

                                    @empty
                                        
                                    <div class="col-md-12">
                                        <h1>No Color Found</h1>
                                    </div>
                                    
                                    @endforelse

                                </div>
                            </div>
                </div>

            </div>

            <div>
                <button type="submit" class="btn btn-primary float-end">Add Product</button>
            </div>
        </form>

        </div>



    </div>


@endsection