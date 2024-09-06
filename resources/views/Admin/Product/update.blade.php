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
            
            <form action="{{url('/admin/product-update/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

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
                                <option value="{{$category->id}}" {{$category->id == $product->category_id ? 'selected' : ''}}>{{$category->name}}</option>

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
                                <option value="{{$brand->id}}" {{$brand->id == $product->brand_id ? 'selected' : ''}}>{{$brand->name}}</option>
                                
                                @empty
                                        
                                <option value="">No Brand Found</option>
                            @endforelse

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="name">Product Name</label>
                        <input type="text" name="name" id="name" value="{{$product->name}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="slug">Product Slug</label>
                        <input type="text" name="slug" id="slug" value="{{$product->slug}}" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="small_description">Small Description</label>
                        <textarea name="small_description" id="small_description" class="form-control" rows="2">{{$product->small_description}}
                        </textarea>
                    </div>

                    <div class="mb-3">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="4">{{$product->description}}</textarea>
                    </div>

                </div>

                <div class="tab-pane fade border p-3" id="seo-tab-pane" role="tabpanel" aria-labelledby="seo-tab" tabindex="0">

                    <div class="mb-3">
                        <label for="meta_title">Meta Title</label>
                        <input type="text" name="meta_title" id="meta_title" value="{{$product->meta_title}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="meta_keyword">Meta Keyword</label>
                        <input type="text" name="meta_keyword" id="meta_keyword" value="{{$product->meta_keyword}}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="meta_description">Meta Description</label>
                        <textarea name="meta_description" id="meta_description" class="form-control" rows="4">{{$product->meta_description}}</textarea>
                    </div>

                </div>

                <div class="tab-pane fade border p-3" id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">

                    <div class="row">

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="original_price">Original Price</label>
                                <input type="text" name="original_price" id="original_price" value="{{$product->original_price}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="selling_price">Selling Price</label>
                                <input type="text" name="selling_price" id="selling_price" value="{{$product->selling_price}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="quantity">Quantity</label>
                                <input type="number" name="quantity" id="quantity" value="{{$product->quantity}}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="trending">Trending</label>
                                <input type="checkbox" name="trending" id="trending" {{$product->trending == '1' ? 'checked':''}}>
                            </div>
                        </div>
                       
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="status">Status</label>
                                <input type="checkbox" name="status" id="status" {{$product->status == '1' ? 'checked':''}}>
                            </div>
                        </div>
                       
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="featured">Featured</label>
                                <input type="checkbox" name="featured" id="featured" {{$product->featured == '1' ? 'checked':''}}>
                            </div>
                        </div>

                    </div>

                </div>
               
                <div class="tab-pane fade border p-3" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                            <div class="mb-3">
                                <label for="image">Product Image</label>
                                <input type="file" multiple name="image[]" id="image" class="form-control">
                            </div>
                            
                            <div>
                                @if ($product->productimage)
                                    <div class="row">
                                        @foreach ($product->productimage as $image)
                                                <div class="col-md-2">
                                                    <img src="{{asset($image->image)}}" class="me-4 border" style="width:100px;height:100px" alt="image">
                                                    <a href="{{url('admin/product-image/'.$image->id.'/delete')}}" class="d-block btn btn-sm btn-danger">Remove</a>
                                                </div>
                                        @endforeach
                                    </div>
                                @else
                                <h5>No Images Found</h5>
                                @endif


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

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Color Name</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($product->productcolors as $color)
                                                <tr class="prod-color-tr">
                                                    <td>{{$color->color->name}}</td>
                                                    <td>
                                                        <div class="input-group mb-3" style="width:150px;">
                                                            <input type="text" value="{{$color->quantity}}" class="productcolorquantity form-control form-control-sm">
                                                            <button type="button" value="{{$color->id}}" class="btn btn-sm btn-primary updateproductcolor">Update</button>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" value="{{$color->id}}" class="btn btn-sm btn-danger deleteproductcolor" >Delete</button>
                                                    </td>
                                                </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>


                </div>

            </div>

            <div>
                <button type="submit" class="btn btn-primary float-end">Update Product</button>
            </div>
        </form>

        </div>



    </div>


    @push('script')
        

    <script>
        $(document).ready(function(){
            
            $.ajaxSetup({
                headers : {
                    'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click','.updateproductcolor',function(){
                var product_id = "{{$product->id}}";
                var product_color_id = $(this).val();
                var quantity = $(this).closest('.prod-color-tr').find('.productcolorquantity').val();
                // console.log(product_color_id);
                // console.log(product_id);
                // console.log(quantity);
                
                if(quantity <= 0)
                {
                    alert('Quantity is Required');
                    return false;
                }

                $.ajax({
                    type: "POST",
                    url: "/admin/product-color/"+product_color_id,
                    data: {'product_id' : product_id,'product_color_id':product_color_id,'quantity':quantity},
                    success:function(response)
                    {
                        alert(response.message)
                    }
                });
            });
           
            $(document).on('click','.deleteproductcolor',function(){
                var product_color_id = $(this).val();
                var deletethis = $(this);

                $.ajax({
                    type:'get',
                    url:'/admin/product-color/'+product_color_id+'/delete',
                    success: function(response)
                    {
                        deletethis.closest('.prod-color-tr').remove();
                        alert(response.message);
                    }
                });

            });


        });
    </script>


    @endpush



@endsection