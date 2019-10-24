		@extends('web.template.master')
		<!-- Head & Header Section -->
		@section('content') 
				<!-- breadcrumbs-area-start -->
		<div class="breadcrumbs-area breadcrumbs-area-mobile mb-10">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="breadcrumbs-menu">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#" class="active">shop</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- shop-main-area-start -->
		<div class="shop-main-area project-page mb-70">
			<div class="container">
				<div class="row">
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
							
							<div class="left-title mb-20">
								<h4>Categories</h4>
							</div>
							<div class="random-area mb-30">
								<div class="product-active-2 owl-carousel">
									<div class="product-total-2">
										
										<div class="single-most-product bd mb-18">
											
											<div class="most-product-content">
												
												<h4><a href="#">ACADEMIC</a></h4>
											</div>
										</div>
										<div class="single-most-product bd mb-18">
											
											<div class="most-product-content">
												
												<h4><a href="#">NON-ACADEMIC</a></h4>
											</div>
										</div>
										<div class="single-most-product bd mb-18">
											
											<div class="most-product-content">
												
												<h4><a href="#">NOVELS</a></h4>
											</div>
										</div>
										<div class="single-most-product bd mb-18">
											
											<div class="most-product-content">
												
												<h4><a href="#">FAIRY TALE</a></h4>
											</div>
										</div>
										<div class="single-most-product bd mb-18">
											
											<div class="most-product-content">
												
												<h4><a href="#">POEMS</a></h4>
											</div>
										</div>
									</div>										
								</div>
							</div>
							<div class="banner-area mb-30">
								<div class="banner-img-2">
									<a href="#"><img src="{{asset('web/img/banner/31.jpg')}}" alt="banner" /></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
						<div class="category-image mb-30">
							<a href="#"><img src="{{asset('web/img/banner/32.jpg')}}" alt="banner" /></a>
						</div>
						<div class="section-title-5 mb-30">
							<h2>Quiz&nbsp; (42)</h2>
						</div><hr>
						<!-- tab-area-start -->
						<div class="tab-content book-list">
							<div class="tab-pane active" id="th">
							    <div class="row">
							        <div class="filterDiv">
							            <!-- single-product-start -->
                                        <div class="product-wrapper mb-40 " style="">
                                        	<h4><a href="{{route('web.project-detail')}}">Science Quiz</a></h4>
                                        	<div class="col-md-12">
	                                            <div class="product-details">                                                
	                                                <h4><a href="{{route('web.project-detail')}}">Catagory : CHIN124</a></h4>
	                                                <h4><a href="{{route('web.project-detail')}}">Total pages : 123</a></h4>
	                                            </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="product-button">
                                                    <a href="{{route('web.project-detail')}}" title="Add to cart" class="btn btn-primary margin-mobile">View</a>
                                                </div>                                            	
                                            </div>	
                                            <div class="clearfix"></div>
                                        </div>
                                        <!-- single-product-end -->
							        </div>
							    </div>
							</div>
						</div>
						<!-- tab-area-end -->
					</div>
				</div>
			</div>
		</div>
		<!-- shop-main-area-end -->
		<!-- footer-area-start -->
		@endsection