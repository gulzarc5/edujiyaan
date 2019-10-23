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
								<li><a href="#" class="active">My Orders</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- entry-header-area-start -->
		<div class="entry-header-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title-5 mb-30" style="text-align: center;">
							<h2>My Orders</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- entry-header-area-end -->
		<!-- checkout-area-start -->
		<div class="checkout-area select-add orders mb-70">
			<div class="container">
				<div class="row">						
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<div class="checkbox-form mb-25">
							<div class="product-info-area">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs pb-10" role="tablist">
									<li class="ntab active"><a href="#Books" data-toggle="tab" aria-expanded="true">Books</a></li>
									<li class="ntab "><a href="#Project" data-toggle="tab" aria-expanded="false">Projects</a></li>
									<li class="ntab "><a href="#Magazine" data-toggle="tab" aria-expanded="false">Magazines</a></li>
								</ul>
								<div class="tab-content">
	                                <div class="tab-pane active" id="Books">
	                                    <div class="row valu" style="margin-bottom: 20px ">
		                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	                                      		<img src="{{asset('web/img/product/10.jpg')}}">
		                                    </div>
	                                      	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
	                                      		<div class="order-content">
	                                      			<h4>Savvy Shoulder Tote</h4>
	                                      			<div class="price-final mb-10">
														<span>₹ 34.00</span>
													</div>
													<div class="status">
														<h6 class="del">Delivered</h6>
														<h6 class="pen">Pending</h6>
														<h6 class="can">Canceled</h6>
													</div>
	                                      			<div class="flex" style="justify-content: space-between;width: 100%">
	                                      				<p>Order ID : <span>0154FG7864HD</span></p>
	                                      				<p>Order On : <span>0154FG7864HD</span></p>
	                                      			</div>
	                                      		</div>
	                                      	</div>
	                                    </div>
	                                    <div class="row valu" style="margin-bottom: 20px ">
		                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	                                      		<img src="{{asset('web/img/product/20.jpg')}}">
		                                    </div>
	                                      	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
	                                      		<div class="order-content">
	                                      			<h4>The Girl Without a Name</h4>
	                                      			<div class="price-final mb-10">
														<span>₹ 104.00</span>
													</div>
													<div class="status">
														<h6 class="del">Delivered</h6>
														<h6 class="pen">Pending</h6>
														<h6 class="can">Canceled</h6>
													</div>
	                                      			<div class="flex" style="justify-content: space-between;width: 100%">
	                                      				<p>Order ID : <span>4154FG7457HD</span></p>
	                                      				<p>Order On : <span>0154FG7864HD</span></p>
	                                      			</div>
	                                      		</div>
	                                      	</div>
	                                    </div>
	                                </div>
	                                <div class="tab-pane" id="Project">
	                                    <div class="row valu" style="margin-bottom: 20px ">
		                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	                                      		<img src="{{asset('web/img/product/10.jpg')}}">
		                                    </div>
	                                      	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
	                                      		<div class="order-content">
	                                      			<h4>Savvy Shoulder Tote</h4>
	                                      			<div class="price-final mb-10">
														<span>₹ 34.00</span>
													</div>
													<div class="status">
														<h6 class="del">Delivered</h6>
														<h6 class="pen">Pending</h6>
														<h6 class="can">Canceled</h6>
													</div>
	                                      			<div class="flex" style="justify-content: space-between;width: 100%">
	                                      				<p>Order ID : <span>0154FG7864HD</span></p>
	                                      				<p>Order On : <span>0154FG7864HD</span></p>
	                                      			</div>
	                                      		</div>
	                                      	</div>
	                                    </div>
	                                    <div class="row valu" style="margin-bottom: 20px ">
		                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	                                      		<img src="{{asset('web/img/product/20.jpg')}}">
		                                    </div>
	                                      	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
	                                      		<div class="order-content">
	                                      			<h4>The Girl Without a Name</h4>
	                                      			<div class="price-final mb-10">
														<span>₹ 104.00</span>
													</div>
													<div class="status">
														<h6 class="del">Delivered</h6>
														<h6 class="pen">Pending</h6>
														<h6 class="can">Canceled</h6>
													</div>
	                                      			<div class="flex" style="justify-content: space-between;width: 100%">
	                                      				<p>Order ID : <span>4154FG7457HD</span></p>
	                                      				<p>Order On : <span>0154FG7864HD</span></p>
	                                      			</div>
	                                      		</div>
	                                      	</div>
	                                    </div>
	                                </div>
	                                <div class="tab-pane" id="Magazine">
	                                    <div class="row valu" style="margin-bottom: 20px ">
		                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	                                      		<img src="{{asset('web/img/product/14.jpg')}}">
		                                    </div>
	                                      	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
	                                      		<div class="order-content">
	                                      			<h4>Savvy Shoulder Tote</h4>
	                                      			<div class="price-final mb-10">
														<span>₹ 34.00</span>
													</div>
													<div class="status">
														<h6 class="del">Delivered</h6>
														<h6 class="pen">Pending</h6>
														<h6 class="can">Canceled</h6>
													</div>
	                                      			<div class="flex" style="justify-content: space-between;width: 100%">
	                                      				<p>Order ID : <span>0154FG7864HD</span></p>
	                                      				<p>Order On : <span>0154FG7864HD</span></p>
	                                      			</div>
	                                      		</div>
	                                      	</div>
	                                    </div>
	                                    <div class="row valu" style="margin-bottom: 20px ">
		                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
	                                      		<img src="{{asset('web/img/product/29.jpg')}}">
		                                    </div>
	                                      	<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
	                                      		<div class="order-content">
	                                      			<h4>The Girl Without a Name</h4>
	                                      			<div class="price-final mb-10">
														<span>₹ 104.00</span>
													</div>
													<div class="status">
														<h6 class="del">Delivered</h6>
														<h6 class="pen">Pending</h6>
														<h6 class="can">Canceled</h6>
													</div>
	                                      			<div class="flex" style="justify-content: space-between;width: 100%">
	                                      				<p>Order ID : <span>4154FG7457HD</span></p>
	                                      				<p>Order On : <span>0154FG7864HD</span></p>
	                                      			</div>
	                                      		</div>
	                                      	</div>
	                                    </div>
	                                </div>
	                            </div>	
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
				</div>
			</div>
		</div>
		<!-- checkout-area-end -->
		@endsection