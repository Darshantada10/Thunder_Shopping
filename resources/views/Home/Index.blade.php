@extends('Layouts.App')

@section('content')
    @if (session('danger'))
        <div class="alert alert-danger" role="alert">
            {{ session('danger') }}
        </div>
    @endif

    @if (session('warning'))
        <div class="alert alert-warning" role="alert">
            {{ session('warning') }}
        </div>
    @endif

    <section class="my-lg-14 my-8">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-6">

                    <h3 class="mb-0">Popular Products</h3>

                </div>
            </div>

            <div class="row g-4 row-cols-lg-5 row-cols-2 row-cols-md-3">

                @foreach ($products as $product)
                    
                <div class="col">
                    <div class="card card-product">
                        <div class="card-body">

                            <div class="text-center position-relative ">
                                <div class=" position-absolute top-0 start-0">

                                    @if ($product->original_price != $product->selling_price)
                                    
                                    <span class="badge bg-danger">Sale</span>
                                    @else
                                        
                                    <span class="badge bg-success">New</span>
                                    @endif

                                </div>
                                <a href="{{url('/products/'.$product->slug.'/'.$product->id)}}"> 
                                    {{-- {{dd($product->productimage[0]->image)}} --}}
                                    <img src="{{$product->productimage[0]->image}}"
                                    {{-- <img src="/FrontEnd/Assets/images/products/product-img-1.jpg" --}}
                                        alt="Grocery Ecommerce Template" class="mb-3 img-fluid"></a>


                            </div>
                            <div class="text-small mb-1"><a href="{{url('/products/'.$product->slug.'/'.$product->id)}}"
                                    class="text-decoration-none text-muted"><small>{{$product->category->name}}</small></a></div>
                            <h2 class="fs-6"><a href="{{url('/products/'.$product->slug.'/'.$product->id)}}"
                                    class="text-inherit text-decoration-none">{{$product->name}}</a></h2>
                            <div>

                                {{-- <small class="text-warning"> <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </small> <span class="text-muted small">4.5(149)</span> --}}
                            </div>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>

                                    @if ($product->selling_price === $product->original_price)
                                        
                                    <span class="text-dark">${{$product->selling_price}}</span> 
                                    @else
                                    
                                    <span class="text-dark">${{$product->selling_price}}</span> 
                                    <span class="text-decoration-line-through text-muted">${{$product->original_price}}</span>
                                    @endif
                                
                                </div>
                                <div>
                                    <a href="{{url('/products/'.$product->slug.'/'.$product->id)}}" class="btn btn-primary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg> Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                @endforeach

            </div>
        </div>
    </section>
@endsection
