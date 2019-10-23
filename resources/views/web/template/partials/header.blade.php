<!doctype html>
<html class="no-js" lang="en">
    
	<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Edujiyaan | Online Store For Book Mazagine Documents</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{('web/img/favicon.png')}}">
		
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{asset('web/css/bootstrap.min.css')}}">
		<!-- animate css -->
        <link rel="stylesheet" href="{{asset('web/css/animate.css')}}">
		<!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('web/css/meanmenu.min.css')}}">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('web/css/owl.carousel.css')}}">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="{{asset('web/css/font-awesome.min.css')}}">
		<!-- flexslider.css-->
        <link rel="stylesheet" href="{{asset('web/css/flexslider.css')}}">
		<!-- chosen.min.css-->
        <link rel="stylesheet" href="{{asset('web/css/chosen.min.css')}}">
		<!-- style css -->
		<link rel="stylesheet" href="{{asset('web/css/style.css')}}">
		<!-- responsive css -->
        <link rel="stylesheet" href="{{asset('web/css/responsive.css')}}">
        <!-- custom css -->
		<link rel="stylesheet" href="{{asset('web/css/custom.css')}}">
		<!-- modernizr css -->
        <script src="{{asset('web/js/vendor/modernizr-2.8.3.min.js')}}"></script>
    </head>
    <body>
		<!-- header-area-start -->
        <header>
			<!-- header-top-area-start -->
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="language-area">
								<ul>
									<li><a>Welcome to Edujiyaan !!</li>									
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
							<div class="account-area language-area text-right">
								<ul>
									<li><a href="membership.php">Membership</a></li>
									@auth('buyer')
										<li><a href="#">{{ Auth::guard('buyer')->user()->name }}</a></li>
										<li><a href="" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
										<form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									@else
										<li><a href="{{route('web.user_login')}}">Sign in</a></li>
										<li><a href="{{route('web.signup')}}">Sign Up</a></li>
										<li><a href="{{route('seller_login')}}">Seller Sign in</a></li>
									@endauth
									
									<li><a>My Account<i class="fa fa-angle-down"></i></a>
										<div class="header-sub">
											<ul>
												<li><a href="{{route('web.view_cart')}}">Cart</a></li>
												<li><a href="{{route('web.user.user-detail')}}">User Detail</a></li>
												<li><a href="{{route('web.user.change-password')}}">Change Password</a></li>
												<li><a href="{{route('web.user.orders')}}">My Orders</a></li>
												<li><a href="{{route('web.shipping-address.shipping-address')}}">My Shipping Address</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-top-area-end -->
			<!-- header-mid-area-start -->
			<div class="header-mid-area ptb-10">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
							<div class="header-img pt-25">
								<img src="{{asset('web/img/icons/shop.png')}}">
								<a href="#"></i>sell on edujiyaan</a>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
							<div class="logo-area text-center logo-xs-mrg">
								<a href="index.html"><img src="{{asset('web/img/logo/logo.png')}}" alt="logo" /></a>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="my-cart pt-25">
								<ul>
									<li><a href="{{route('web.view_cart')}}"><i class="fa fa-shopping-cart"></i>My Cart</a>
										<span>2</span>
										<div class="mini-cart-sub">
											<div class="cart-product">
												<div class="single-cart">
													<div class="cart-img">
														<a href="#"><img src="{{asset('web/img/product/1.jpg')}}" alt="book" /></a>
													</div>
													<div class="cart-info">
														<h5><a href="#">Joust Duffle Bag</a></h5>
														<p>1 x £60.00</p>
													</div>
													<div class="cart-icon">
													    <a href="#"><i class="fa fa-remove"></i></a>
													</div>
												</div>
												<div class="single-cart">
													<div class="cart-img">
														<a href="#"><img src="{{asset('web/img/product/3.jpg')}}" alt="book" /></a>
													</div>
													<div class="cart-info">
														<h5><a href="#">Chaz Kangeroo Hoodie</a></h5>
														<p>1 x £52.00</p>
													</div>
													<div class="cart-icon">
                                                        <a href="#"><i class="fa fa-remove"></i></a>
                                                    </div>
												</div>
											</div>
											<div class="cart-totals">
												<h5>Total <span>£12.00</span></h5>
											</div>
											<div class="cart-bottom">
												<a class="view-cart" href="{{route('web.view_cart')}}">view cart</a>
												<a href="checkout.html">Check out</a>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header-mid-area-end -->
			<!-- main-menu-area-start -->
			<div class="main-menu-area hidden-sm hidden-xs sticky-header-1" id="header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 flex-center">
							<div class="menu-area">
								<nav>
									<ul style="display: flex;justify-content: center;">
										<li class="active"><a href="{{route('web.index')}}">Home</a></li>
										<li><a href="{{route('web.new_book_list')}}">Books</a></li>
										<li><a href="{{route('web.old-books')}}">Old Books</a></li>
										<li><a href="{{route('web.project')}}">Projects</a></li>
										<li><a href="{{route('web.magazines')}}">Magazines</a></li>
										<li><a href="#">Quiz</a></li>
										<li><a href="#">Tips and Tricks</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- main-menu-area-end -->
			<!-- mobile-menu-area-start -->
			<div class="mobile-menu-area hidden-md hidden-lg">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="mobile-menu">
								<nav id="mobile-menu-active">
									<ul id="nav">
										<li class="active"><a href="{{route('web.index')}}">Home</a></li>
										<li><a href="{{route('web.new_book_list')}}">Books</a></li>
										<li><a href="{{route('web.old-books')}}">Old Books</a></li>
										<li><a href="{{route('web.project')}}">Projects</a></li>
										<li><a href="#">Magazines</a></li>
										<li><a href="#">Quiz</a></li>
										<li><a href="#">Tips and Tricks</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-menu-area-end -->
		</header>