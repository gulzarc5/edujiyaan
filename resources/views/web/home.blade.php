		@extends('web.template.master')
		<!-- Head & Header Section -->
		@section('content') 
		<!-- slider-area-start -->
		<div class="slider-area">
			<div class="slider-active owl-carousel">
                <div class="single-slider slider-h1-2 pt-215 pb-100 bg-img" style="background-image:url({{asset('web/img/slider/2.jpg')}});">
                    <div class="container">
                        <div class="slider-content slider-content-2 slider-animated-1">
                            <h1>We can help get your</h1>
                            <h2 style="text-align: left;">Books in Order</h2>
                            <h3>and Accessories</h3>
                            <a href="#">Contact Us Today!</a>
                        </div>
                    </div>
                </div>
				<div class="single-slider pt-125 pb-130 bg-img new-pos1" style="background-image:url({{asset('web/img/slider/1.jpg')}});">
				    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="slider-content slider-animated-1 text-center">
                                    <h1>Huge Sale</h1>
                                    <h2>Projects</h2>
                                    <h3>Now starting at RS.99.00</h3>
                                    <a href="shop.php">Shop now</a>
                                </div>
                            </div>
                        </div>
				    </div>
				</div>
                <div class="single-slider pt-125 pb-130 bg-img new-pos" style="background-image:url({{asset('web/img/slider/3.jpg')}});">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="slider-content slider-animated-1 text-center">
                                    <h1>Huge Sale</h1>
                                    <h2>Documents</h2>
                                    <h3>Magazines</h3>
                                    <a href="shop.php">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
		<!-- slider-area-end -->
		<!-- banner-area-end -->
        <div class="banner-area-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 hidden-xs">
                        <div class="banner-img-2 mt-30">
                            <a href="shop.php"><img src="{{asset('web/img/banner/14.jpg')}}" alt="banner"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="banner-total mt-30">
                            <div class="single-banner-7 xs-mb">
                                <div class="banner-img-2">
                                    <a href="shop.php"><img src="{{asset('web/img/banner/15.jpg')}}" alt="banner"></a>
                                </div>
                            </div>
                            <div class="single-banner-3 col-xs-12">
                                <div class="banner-img-2">
                                    <a href="shop.php"><img src="{{asset('web/img/banner/16.jpg')}}" alt="banner"></a>
                                </div>
                            </div>
                        </div>
                        <div class="banner-total-2">
                            <div class="single-banner-4 hidden-xs">
                                <div class="banner-img-2">
                                    <a href="shop.php"><img src="{{asset('web/img/banner/17.jpg')}}" alt="banner"></a>
                                </div>
                            </div>
                            <div class="single-banner-5">
                                <div class="banner-img-2">
                                    <a href="shop.php"><img src="{{asset('web/img/banner/18.jpg')}}" alt="banner"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product-area-start -->
		<!-- product-area-start -->
		<div class="product-area xs-mb">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title text-center mb-50">
							<h2>Top interesting</h2>
							<p>Browse the collection of our best selling and top interresting products. <br /> ll definitely find what you are looking for..</p>
						</div>
					</div>
					<div class="col-lg-12">
						<!-- tab-menu-start -->
						<div class="tab-menu mb-40 text-center">
							<ul>
								<li class="active"><a href="#Audiobooks" data-toggle="tab">New Arrival	</a></li>
							</ul>
						</div>
						<!-- tab-menu-end -->
					</div>
				</div>
				<!-- tab-area-start -->
				<div class="tab-content">
					<div class="tab-pane active" id="Audiobooks">
                        <div class="tab-active owl-carousel">
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('web/img/product/1.jpg')}}" alt="book" class="primary" />
                                    </a>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a class="semi-name" href="#">Joust Duffle Bag</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$60.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" class="btn btn-primary margin-mobile">View</a>
                                    </div>                              
                                </div>	
                            </div>
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('web/img/product/3.jpg')}}" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span> <br></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Chaz Kangeroo Hoodie</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$52.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>	
                            </div>
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('web/img/product/5.jpg')}}" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span> <br></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Set of Sprite Yoga Straps</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$34.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>	
                            </div>
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('web/img/product/7.jpg')}}" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span> <br></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Strive Shoulder Pack</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$30.00</li>
                                            <li class="old-price">$32.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>	
                            </div>
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('web/img/product/9.jpg')}}" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Wayfarer Messenger Bag</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$35.00</li>
                                            <li class="old-price">40.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>	
                            </div>
                            <!-- single-product-end -->
                            <!-- single-product-start -->
                            <div class="product-wrapper">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{asset('web/img/product/11.jpg')}}" alt="book" class="primary" />
                                    </a>
                                    <div class="quick-view">
                                        <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                                            <i class="fa fa-search-plus"></i>
                                        </a>
                                    </div>
                                    <div class="product-flag">
                                        <ul>
                                            <li><span class="sale">new</span> <br></li>
                                            <li><span class="discount-percentage">-5%</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-details text-center">
                                    <div class="product-rating">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <h4><a href="#">Impulse Duffle</a></h4>
                                    <div class="product-price">
                                        <ul>
                                            <li>$74.00</li>
                                            <li class="old-price">78.00</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-link">
                                    <div class="product-button">
                                        <a href="#" title="Add to cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="add-to-link">
                                        <ul>
                                            <li><a href="product-details.html" title="Details"><i class="fa fa-external-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>	
                            </div>
                            <!-- single-product-end -->
                        </div>
					</div>
				</div>
				<!-- tab-area-end -->
			</div>
		</div>
		<!-- product-area-end -->
        <!-- team-area-start -->
        <div class="team-area" style="padding-bottom: 0px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="team-title text-center mb-50">
                            <h2>Our Products</h2>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12"></div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-3">
                        <div class="single-team">
                            <div class="team-img-area">
                                <div class="team-img">
                                    <a href="shop.php"><img src="{{asset('web/img/icons/1.png')}}" alt="man" /></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h3>Books</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-3">
                        <div class="single-team">
                            <div class="team-img-area">
                                <div class="team-img">
                                    <a href="documents.php"><img src="{{asset('web/img/icons/2.png')}}" alt="man" /></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h3>Documents</h3>
                                <!-- <span>Marketer</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-3">
                        <div class="single-team">
                            <div class="team-img-area">
                                <div class="team-img">
                                    <a href="megazine.php"><img src="{{asset('web/img/icons/3.png')}}" alt="man" /></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h3>Megazines</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 hidden-sm col-xs-3">
                        <div class="single-team mrg-none-xs">
                            <div class="team-img-area">
                                <div class="team-img">
                                    <a href="project.php"><img src="{{asset('web/img/icons/4.png')}}" alt="man" /></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h3>Projects</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- team-area-end -->
		<!-- banner-area-start -->
		<div class="banner-area-5 mtb-95">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="banner-img-2">
							<a href="#"><img style="height: 200px" src="{{asset('web/img/banner/5.jpg')}}" alt="banner" /></a>
							<div class="banner-text">
								<h3>G. Meyer Books & Spiritual Traveler Press</h3>
								<h2>Sale up to 30% off</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner-area-end -->
		<!-- bestseller-area-start -->
		<div class="bestseller-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="bestseller-content">
							<h1>Author best selling</h1>
							<h2>Edujiyaan</h2>
							<p class="categories">categories:<a href="#">Books</a> , <a href="#">Megazines</a></p>
							<p style="text-align: justify-all;">We offer huge collection of books in diverse category of Fiction, Non-fiction, Biographies, History, Religions, Self -Help, Children. We also sell in vast collection of Investments and Management, Computers, Engineering, Medical, College and School text references books proposed by different institutes as syllabus across the country. Besides to this, we also offer a large collection of E-Books at very fair pricing.</p>
							<div class="social-author">
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="banner-img-2">
							<a href="#"><img src="{{asset('web/img/banner/6.jpg')}}" alt="banner" /></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="row" style="padding-top: 21px;">
							<div class="col-md-6 col-xs-6">
                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="#"><img src="{{asset('web/img/book.jpg')}}" alt="book"></a>
                                        <div class="product-flag">
                                            <ul>
                                                <li><span class="sale">new</span></li>
                                                <!-- <li><span class="discount-percentage">-5%</span></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3> <a href="#">Books</a></h3>
                                    </div>
                                </div>                     
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="#"><img src="{{asset('web/img/megazine.jpg')}}" alt="megazine"></a>
                                        <div class="product-flag">
                                            <ul>
                                                <li><span class="sale">new</span></li>
                                                <!-- <li><span class="discount-percentage">-5%</span></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3> <a href="#">Megazines</a></h3>
                                    </div>
                                </div>
                            </div>
						</div>
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="#"><img src="{{asset('web/img/project.jpg')}}" alt="project"></a>
                                        <div class="product-flag">
                                            <ul>
                                                <li><span class="sale">new</span></li>
                                                <!-- <li><span class="discount-percentage">-5%</span></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3> <a href="#">Projects</a></h3>
                                    </div>
                                </div>                     
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <div class="single-bestseller mb-25">
                                    <div class="bestseller-img">
                                        <a href="#"><img src="{{asset('web/img/document.jpg')}}" alt="document"></a>
                                        <div class="product-flag">
                                            <ul>
                                                <li><span class="sale">new</span></li>
                                                <!-- <li><span class="discount-percentage">-5%</span></li> -->
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bestseller-text text-center">
                                        <h3> <a href="#">Documents</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		<!-- bestseller-area-end -->
		<!-- banner-static-area-start -->
		<div class="banner-static-area bg ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="banner-shadow-hover xs-mb">
							<a href="#"><img src="{{asset('web/img/banner/8.jpg')}}" alt="banner" /></a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="banner-shadow-hover">
							<a href="#"><img src="{{asset('web/img/banner/9.jpg')}}" alt="banner" /></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner-static-area-end -->
		<!-- social-group-area-end -->
		@endsection