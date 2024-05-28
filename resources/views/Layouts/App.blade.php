<!DOCTYPE html>
<html lang="en">
	
<head>
		<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="Codescandy" name="author">
		<title>Homepage v1 - eCommerce HTML Template - FreshCart</title>

		<link href="{{ asset('FrontEnd/Assets/libs/slick-carousel/slick/slick.css')}}" rel="stylesheet" />
		<link href="{{ asset('FrontEnd/Assets/libs/slick-carousel/slick/slick-theme.css')}}" rel="stylesheet" />
		<link href="{{ asset('FrontEnd/Assets/libs/tiny-slider/dist/tiny-slider.css')}}" rel="stylesheet" />

		<!-- Favicon icon-->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('FrontEnd/Assets/images/favicon/favicon.ico')}}">


<!-- Libs CSS -->
<link href="{{asset('FrontEnd/Assets/libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet">
<link href="{{asset('FrontEnd/Assets/libs/feather-webfont/dist/feather-icons.css')}}" rel="stylesheet">
<link href="{{asset('FrontEnd/Assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet">


<!-- Theme CSS -->
{{-- <link rel="stylesheet" href="FrontEnd/Assets/css/theme.min.css"> --}}
{{-- <link rel="stylesheet" href="/FrontEnd/Assets/css/theme.min.css"> --}}
<link rel="stylesheet" href="{{ asset('FrontEnd/Assets/css/theme.min.css') }}">

	</head>

	<body>

<div class="border-bottom">
	<div class="bg-light py-1">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-12 text-center text-md-start"><span>Super Value Deals - Save more with coupons</span></div>
				<div class="col-6 text-end d-none d-md-block">
					<div class="dropdown selectBox">
						<a class="dropdown-toggle selectValue text-reset" href="javascript:void(0)" data-bs-toggle="dropdown" aria-expanded="false">
							<span class="me-2">
								<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#selectedlang)">
										<path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169" />
										<path d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z" fill="white" />
										<path
											d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z"
											fill="#C8102E"
										/>
										<path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z" fill="white" />
										<path d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z" fill="#C8102E" />
									</g>
									<defs>
										<clipPath id="selectedlang">
											<rect width="16" height="12" fill="white" transform="translate(0 0.5)" />
										</clipPath>
									</defs>
								</svg>
							</span>
							English
						</a>

						<ul class="dropdown-menu">
							<li>
								<a class="dropdown-item" href="javascript:void(0)">
									<span class="me-2">
										<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#selectedlang)">
												<path d="M0 0.5H16V12.5H0V0.5Z" fill="#012169" />
												<path d="M1.875 0.5L7.975 5.025L14.05 0.5H16V2.05L10 6.525L16 10.975V12.5H14L8 8.025L2.025 12.5H0V11L5.975 6.55L0 2.1V0.5H1.875Z" fill="white" />
												<path
													d="M10.6 7.525L16 11.5V12.5L9.225 7.525H10.6ZM6 8.025L6.15 8.9L1.35 12.5H0L6 8.025ZM16 0.5V0.575L9.775 5.275L9.825 4.175L14.75 0.5H16ZM0 0.5L5.975 4.9H4.475L0 1.55V0.5Z"
													fill="#C8102E"
												/>
												<path d="M6.025 0.5V12.5H10.025V0.5H6.025ZM0 4.5V8.5H16V4.5H0Z" fill="white" />
												<path d="M0 5.325V7.725H16V5.325H0ZM6.825 0.5V12.5H9.225V0.5H6.825Z" fill="#C8102E" />
											</g>
											<defs>
												<clipPath id="selectedlang">
													<rect width="16" height="12" fill="white" transform="translate(0 0.5)" />
												</clipPath>
											</defs>
										</svg>
									</span>
									English
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="javascript:void(0)">
									<span class="me-2">
										<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_5543_19751)">
												<path d="M0 8.5H16V12.5H0V8.5Z" fill="#FFCE00" />
												<path d="M0 0.5H16V4.5H0V0.5Z" fill="black" />
												<path d="M0 4.5H16V8.5H0V4.5Z" fill="#DD0000" />
											</g>
											<defs>
												<clipPath id="clip0_5543_19751">
													<rect width="16" height="12" fill="white" transform="translate(0 0.5)" />
												</clipPath>
											</defs>
										</svg>
									</span>
									Deutsch
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="py-5">
		<div class="container">
			<div class="row w-100 align-items-center gx-lg-2 gx-0">
				<div class="col-xxl-2 col-lg-3 col-md-6 col-5">
					<a class="navbar-brand d-none d-lg-block" href="index.html">
						<img src="{{asset('FrontEnd/Assets/images/logo/freshcart-logo.svg')}}" alt="eCommerce HTML Template" />
					</a>
					<div class="d-flex justify-content-between w-100 d-lg-none">
						<a class="navbar-brand" href="index.html">
							<img src="{{asset('FrontEnd/Assets/images/logo/freshcart-logo.svg')}}" alt="eCommerce HTML Template" />
						</a>
					</div>
				</div>
				<div class="col-xxl-5 col-lg-5 d-none d-lg-block">
					<form action="#">
						<div class="input-group">
							<input class="form-control rounded" type="search" placeholder="Search for products" />
							<span class="input-group-append">
								<button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
									<svg
										xmlns="http://www.w3.org/2000/svg"
										width="16"
										height="16"
										viewBox="0 0 24 24"
										fill="none"
										stroke="currentColor"
										stroke-width="2"
										stroke-linecap="round"
										stroke-linejoin="round"
										class="feather feather-search"
									>
										<circle cx="11" cy="11" r="8"></circle>
										<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
									</svg>
								</button>
							</span>
						</div>
					</form>
				</div>
				<div class="col-md-2 col-xxl-3 d-none d-lg-block">
					<!-- Button trigger modal -->
					<button type="button" class="btn btn-outline-gray-400 text-muted" data-bs-toggle="modal" data-bs-target="#locationModal">
						<i class="feather-icon icon-map-pin me-2"></i>
						Location
					</button>
				</div>
				<div class="col-lg-2 col-xxl-2 text-end col-md-6 col-7">
					<div class="list-inline">
						<div class="list-inline-item me-5">
							<a href="pages/shop-wishlist.html" class="text-muted position-relative">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									width="20"
									height="20"
									viewBox="0 0 24 24"
									fill="none"
									stroke="currentColor"
									stroke-width="2"
									stroke-linecap="round"
									stroke-linejoin="round"
									class="feather feather-heart"
								>
									<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
								</svg>
								<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
									5
									<span class="visually-hidden">unread messages</span>
								</span>
							</a>
						</div>
						<div class="list-inline-item me-5">
							<a href="#!" class="text-muted" data-bs-toggle="modal" data-bs-target="#userModal">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									width="20"
									height="20"
									viewBox="0 0 24 24"
									fill="none"
									stroke="currentColor"
									stroke-width="2"
									stroke-linecap="round"
									stroke-linejoin="round"
									class="feather feather-user"
								>
									<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
									<circle cx="12" cy="7" r="4"></circle>
								</svg>
							</a>
						</div>
						<div class="list-inline-item me-5 me-lg-0">
							<a class="text-muted position-relative" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" href="#offcanvasExample" role="button" aria-controls="offcanvasRight">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									width="20"
									height="20"
									viewBox="0 0 24 24"
									fill="none"
									stroke="currentColor"
									stroke-width="2"
									stroke-linecap="round"
									stroke-linejoin="round"
									class="feather feather-shopping-bag"
								>
									<path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
									<line x1="3" y1="6" x2="21" y2="6"></line>
									<path d="M16 10a4 4 0 0 1-8 0"></path>
								</svg>
								<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
									1
									<span class="visually-hidden">unread messages</span>
								</span>
							</a>
						</div>
						<div class="list-inline-item d-inline-block d-lg-none">
							<!-- Button -->
							<button class="navbar-toggler collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar-default" aria-controls="navbar-default" aria-label="Toggle navigation">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-text-indent-left text-primary" viewBox="0 0 16 16">
									<path
										d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"
									/>
								</svg>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 pb-lg-4" aria-label="Offcanvas navbar large">
		<div class="container">
			<div class="offcanvas offcanvas-start" tabindex="-1" id="navbar-default" aria-labelledby="navbar-defaultLabel">
				<div class="offcanvas-header pb-1">
					<a href="index.html"><img src="{{asset('FrontEnd/Assets/images/logo/freshcart-logo.svg')}}" alt="eCommerce HTML Template" /></a>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<div class="d-block d-lg-none mb-4">
						<form action="#">
							<div class="input-group">
								<input class="form-control rounded" type="search" placeholder="Search for products" />
								<span class="input-group-append">
									<button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
										<svg
											xmlns="http://www.w3.org/2000/svg"
											width="16"
											height="16"
											viewBox="0 0 24 24"
											fill="none"
											stroke="currentColor"
											stroke-width="2"
											stroke-linecap="round"
											stroke-linejoin="round"
											class="feather feather-search"
										>
											<circle cx="11" cy="11" r="8"></circle>
											<line x1="21" y1="21" x2="16.65" y2="16.65"></line>
										</svg>
									</button>
								</span>
							</div>
						</form>
						<div class="mt-2">
							<button type="button" class="btn btn-outline-gray-400 text-muted w-100" data-bs-toggle="modal" data-bs-target="#locationModal">
								<i class="feather-icon icon-map-pin me-2"></i>
								Pick Location
							</button>
						</div>
					</div>
					
					<div>
						<ul class="navbar-nav align-items-center">
							
							<li class="nav-item w-100 w-lg-auto">
								<a class="nav-link" href="{{url('/home')}}">Home</a>
								{{-- <a class="nav-link" href="/home">Home</a> --}}
								{{-- <a class="nav-link" href="home">Home</a> --}}
							</li>
							<li class="nav-item w-100 w-lg-auto">
								<a class="nav-link" href="{{url('/login')}}">Login</a>
							</li>
							<li class="nav-item w-100 w-lg-auto">
								<a class="nav-link" href="{{url('/register')}}">Register</a>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</nav>
</div>

   
@yield('content')


 <footer class="footer">
    <div class="container">
      <div class="row g-4 py-4">
        <div class="col-12 col-md-12 col-lg-4">
          <h6 class="mb-4">Categories</h6>
          <div class="row">
            <div class="col-6">
              <!-- list -->
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Vegetables & Fruits</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link"> Breakfast & instant food</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link"> Bakery & Biscuits</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Atta, rice & dal</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Sauces & spreads</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Organic & gourmet</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link"> Baby care</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Cleaning essentials</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Personal care</a></li>
              </ul>
            </div>
            <div class="col-6">
                <!-- list -->
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Dairy, bread & eggs</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link"> Cold drinks & juices</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link"> Tea, coffee & drinks</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Masala, oil & more</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Chicken, meat & fish</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Paan corner</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link"> Pharma & wellness</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Home & office</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Pet care</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-12 col-lg-8">
          <div class="row g-4">
            <div class="col-6 col-sm-6 col-md-3">
              <h6 class="mb-4">Get to know us</h6>
                <!-- list -->
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Company</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">About</a></li>
                <li class="nav-item mb-2"><a href="#1" class="nav-link">Blog</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Help Center</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Our Value</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <h6 class="mb-4">For Consumers</h6>
              <ul class="nav flex-column">
                    <!-- list -->
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Payments</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Shipping</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Product Returns</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">FAQ</a></li>
                <li class="nav-item mb-2"><a href="pages/shop-checkout.html" class="nav-link">Shop Checkout</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <h6 class="mb-4">Become a Shopper</h6>
              <ul class="nav flex-column">
                  <!-- list -->
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Shopper Opportunities</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Become a Shopper</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Earnings</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Ideas & Guides</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">New Retailers</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <h6 class="mb-4">Freshcart programs</h6>
              <ul class="nav flex-column">
                  <!-- list -->
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart programs</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Gift Cards</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Promos & Coupons</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Freshcart Ads</a></li>
                <li class="nav-item mb-2"><a href="#!" class="nav-link">Careers</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="border-top py-4">
        <div class="row align-items-center">
          <div class="col-lg-5 text-lg-start text-center mb-2 mb-lg-0">
            <ul class="list-inline mb-0">
              <li class="list-inline-item text-dark">Payment Partners</li>
              <li class="list-inline-item">
                <a href="#!"><img src="{{asset('FrontEnd/Assets/images/payment/amazonpay.svg')}}" alt=""></a>
              </li>
              <li class="list-inline-item">
                <a href="#!"><img src="{{asset('FrontEnd/Assets/images/payment/american-express.svg')}}" alt=""></a>
              </li>
              <li class="list-inline-item">
                <a href="#!"><img src="{{asset('FrontEnd/Assets/images/payment/mastercard.svg')}}" alt=""></a>
              </li>
              <li class="list-inline-item">
                <a href="#!"><img src="{{asset('FrontEnd/Assets/images/payment/paypal.svg')}}" alt=""></a>
              </li>
              <li class="list-inline-item">
                <a href="#!"><img src="{{asset('FrontEnd/Assets/images/payment/visa.svg')}}" alt=""></a>
              </li>
            </ul>
          </div>
          <div class="col-lg-7 mt-4 mt-md-0">
            <ul class="list-inline mb-0 text-lg-end text-center">
              <li class="list-inline-item mb-2 mb-md-0 text-dark">Get deliveries with FreshCart</li>
              <li class="list-inline-item ms-4">
                <a href="#!"> <img src="{{asset('FrontEnd/Assets/images/appbutton/appstore-btn.svg')}}" alt=""
                    style="width: 140px;"></a></li>
              <li class="list-inline-item">
                <a href="#!"> <img src="{{asset('FrontEnd/Assets/images/appbutton/googleplay-btn.svg')}}" alt=""
                    style="width: 140px;"></a></li>
            </ul>
          </div>
        </div>
  
      </div>
      <div class="border-top py-4">
        <div class="row align-items-center">
          <div class="col-md-6"><span class="small text-muted">© 2022 <span id="copyright"> -
            <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
        </span>FreshCart eCommerce HTML Template.  All rights reserved. Powered by <a href="https://codescandy.com/">Codescandy</a>.</span></div>
          <div class="col-md-6">
            <ul class="list-inline text-md-end mb-0 small mt-3 mt-md-0">
              <li class="list-inline-item text-muted">Follow us on</li>
              <li class="list-inline-item me-1">
                <a href="#!" class="btn btn-xs btn-social btn-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-facebook" viewBox="0 0 16 16">
                    <path
                      d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                  </svg></a></li>
              <li class="list-inline-item me-1">
                <a href="#!" class="btn btn-xs btn-social btn-icon"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-twitter" viewBox="0 0 16 16">
                    <path
                      d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                  </svg></a></li>
              <li class="list-inline-item">
                <a href="#!" class="btn btn-xs btn-social btn-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-instagram" viewBox="0 0 16 16">
                    <path
                      d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                  </svg></a></li>
            </ul>
          </div>
        </div>
  
      </div>
    </div>
  </footer>
  
          <!-- Javascript-->
  
          <!-- Libs JS -->
  <!-- <script src="./Assets/libs/jquery/dist/jquery.min.js"></script> -->
  <script src="{{asset('FrontEnd/Assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('FrontEnd/Assets/libs/simplebar/dist/simplebar.min.js')}}"></script>
  
  <!-- Theme JS -->
  <script src="{{asset('FrontEnd/Assets/js/theme.min.js')}}"></script>
  
          <script src="{{asset('FrontEnd/Assets/js/vendors/jquery.min.js')}}"></script>
          <script src="{{asset('FrontEnd/Assets/js/vendors/countdown.js')}}"></script>
          <script src="{{asset('FrontEnd/Assets/libs/slick-carousel/slick/slick.min.js')}}"></script>
          <script src="{{asset('FrontEnd/Assets/js/vendors/slick-slider.js')}}"></script>
          <script src="{{asset('FrontEnd/Assets/libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
          <script src="{{asset('FrontEnd/Assets/js/vendors/tns-slider.js')}}"></script>
          <script src="{{asset('FrontEnd/Assets/js/vendors/zoom.js')}}"></script>
      </body>
  
  <!-- Mirrored from freshcart.codescandy.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2024 10:19:25 GMT -->
  </html>
  