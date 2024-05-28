
@extends('Layouts.App')

@section('content')
    
<section class="my-lg-14 my-8">

    <div class="container">

        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 col-lg-4 order-lg-1 order-2">

                <img src="{{asset('FrontEnd/Assets/images/svg-graphics/signup-g.svg')}}" alt="" class="img-fluid" />
            </div>

            <div class="col-12 col-md-6 offset-lg-1 col-lg-4 order-lg-2 order-1">
                <div class="mb-lg-9 mb-5">
                    <h1 class="mb-1 h2 fw-bold">Get Start Shopping</h1>
                    <p>Welcome to ThunderCart! Enter your email to get started.</p>
                </div>

                <form class="needs-validation" action="/register" method="post">

                    @csrf

                    <div class="row g-3">

                        <div class="col-12">
                            <label for="name" class="form-label visually-hidden">Full Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name"
                                required />
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                     
                        <div class="col-12">
                            <label for="email" class="form-label visually-hidden">Email address</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                                required />
                            <div class="invalid-feedback">Please enter email.</div>
                        </div>

                        <div class="col-12">
                            <div class="password-field position-relative">
                                <label for="password" class="form-label visually-hidden">Password</label>
                                <div class="password-field position-relative">
                                    <input type="password" name="password" class="form-control fakePassword" id="password"
                                        placeholder="*****" required />
                                    <span><i class="bi bi-eye-slash passwordToggler"></i></span>
                                    <div class="invalid-feedback">Please enter password.</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 d-grid"><button type="submit" class="btn btn-primary">Register</button>
                        </div>


                    
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection


