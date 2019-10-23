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
								<li><a href="#" class="active">checkout</a></li>
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
							<h2>User Detail</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- entry-header-area-end -->
		<!-- checkout-area-start -->
		<div class="checkout-area user-detail mb-70">
			<div class="container">
				<div class="row">						
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<div class="checkbox-form mb-25">
							<div class="row">
								<h5>User Details</h5>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>Name <span class="required">*</span></label>										
										<input type="text" name="name" value="Who cares" disabled>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>Email <span class="required">*</span></label>										
										<input type="email" name="email" value="whyare@asking.com" disabled>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>PAN Number <span class="required">*</span></label>										
										<input type="text" value="AG01GH45" disabled>
									</div>
								</div>
								<div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 2px;">
									<div class="country-select">
										<label>Gender <span class="required">*</span></label>
										<select disabled>
										  <option value="male" selected>Male</option>
										  <option value="female">Female</option>
										</select> 										
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>Date Of Birth</label>
										<input type="text" value="100/120/45" disabled>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>Phone</label>
										<input type="text" value="don't even" disabled>
									</div>
								</div>
								<h5>User Address</h5>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="checkout-form-list">
										<label>Address <span class="required">*</span></label>
										<input type="text" value="Call Police, Fake Street, Nowhere" disabled>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>Postcode / Zip <span class="required">*</span></label>									
										<input type="text" value="78456" disabled>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="checkout-form-list">
										<label>Town / City <span class="required">*</span></label>
										<input type="text" value="Dummy Town">
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									<div class="checkout-form-list">
										<label>State / County <span class="required">*</span></label>									
										<input type="text" value="Bogus State">
									</div>
								</div>																	
							</div>													
						</div>
						<div class="checkbox-form" style="display: flex;justify-content: center;">
							<a href="{{route('web.user.add-user-addrs')}}"><button class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Edit User Detail</button></a>
						</div>	
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
				</div>
			</div>
		</div>
		<!-- checkout-area-end -->
		@endsection