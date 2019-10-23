		@extends('web.template.master')
		<!-- Head & Header Section -->
		@section('content') 
		<!-- breadcrumbs-area-start -->
		<div class="breadcrumbs-area mb-10">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#" class="active">Project Detail</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- product-main-area-start -->
		<div class="product-main-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
						<!-- product-main-area-start -->
						<div class="product-main-area">
							<div class="row">
								<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
									<div class="flexslider">
										<img src="{{asset('web/img/icons/4.png')}}">
									</div>
								</div>
								<div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
									<div class="product-info-main">
										<div class="page-title">
											<h1>Chinmoyee Project 2</h1>
											<h5>Specialisation : Retail</h5>
										</div>
										<div class="product-info-stock-sku">
                                            <span>Project ID : </span>
                                            <div class="product-attribute">
                                                 <span>CHIN124</span>
                                            </div>
                                        </div>
										<div class="product-info-stock-sku">
											<span>Total Pages : </span>
											<div class="product-attribute">
												<span>123</span>
											</div>
										</div>
										<div class="product-reviews-summary">
											<div class="reviews-actions">
												<a><strong>Package Includes :</strong></a>
												<a> Preview/Documentation/PPT/</a>
											</div>
										</div>
										<div class="product-info-price">
											<div class="price-final">
												<span>₹ 2000.00</span>
											</div>
										</div>
										<div class="product-add-form">
											<form action="#">
												<a href="#">Add to cart</a>
											</form>
										</div>
									</div>
								</div>
							</div>	
						</div>
						<!-- product-main-area-end -->
						<!-- product-info-area-start -->
						<div class="product-info-area">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="active"><a href="#Details" data-toggle="tab">DESCRIPTION</a></li>
							</ul>
							<div class="tab-content">
                                <div class="tab-pane active" id="Details">
                                    <div class="valu">
                                      <p><strong>Chinmoyee Project 2 :</strong> The sporty Joust Duffle Bag can't be beat - not in the gym, not on the luggage carousel, not anywhere. Big enough to haul a basketball or soccer ball and some sneakers with plenty of room to spare, it's ideal for athletes with places to go.</p>
                                      <ul>
                                        <li><i class="fa fa-circle"></i>Dual top handles.</li>
                                        <li><i class="fa fa-circle"></i>Adjustable shoulder strap.</li>
                                        <li><i class="fa fa-circle"></i>Full-length zipper.</li>
                                        <li><i class="fa fa-circle"></i>L 29" x W 13" x H 11".</li>
                                      </ul>
                                    </div>
                                </div>
                            </div>	
						</div>
						<!-- product-info-area-end -->
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 mobile-side">
						<div class="shop-left">
							<div class="section-title-5 mb-30">
								<h2>Shopping Options</h2>
							</div>
							<div class="left-menu mb-30">
								<ul>
									<li><a href="shop.php"><i class="fas fa-book"></i>&nbsp;&nbsp;Books<span>(29)</span></a></li>									
									<li><a href="project.php"><i class="fa fa-line-chart"></i>&nbsp;&nbsp;Projects<span>(14)</span></a></li>
									<li><a href="megazine.php"><i class="far fa-newspaper"></i>Magazines<span>(2)</span></a></li>
									<li><a href="ebook.php"><i class="far fa-file"></i>&nbsp;&nbsp;Documents<span>(14))</span></a></li>
								</ul>
							</div>
							<div class="banner-area mb-30">
								<div class="banner-img-2">
									<a href="#"><img src="{{asset('web/img/banner/31.jpg')}}" alt="banner" /></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- product-main-area-end -->
		<!-- footer-area-start -->
		@endsection