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
								<li><a href="#" class="active">register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- breadcrumbs-area-end -->
		<!-- user-login-area-start -->
		<div class="user-login-area mb-70">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="login-title text-center mb-30">
							<h2>Sign Up</h2>
							<p>Insert your name and other details</p>
						</div>
					</div>
					{{ Form::open(['method' => 'post','route'=>'admin.insert_new_project']) }}
						<div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
							<div class="billing-fields">
								<form>
									<div class="single-register">
										<label>First Name<span>*</span></label>
										<input type="text" name="name" value="{{old('name')}}"/>
										@if($errors->has('name'))
											<span class="invalid-feedback" role="alert" style="color:red">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
										@enderror
									</div>
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="single-register">
												<label>Email Address<span>*</span></label>
											<input type="text" name="email" value="{{old('email')}}"/>
											</div>
											@if($errors->has('email'))
												<span class="invalid-feedback" role="alert" style="color:red">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
											@enderror
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="single-register">
												<label>Mobile<span>*</span></label>
											<input type="number" name="mobile" value="{{old('mobile')}}"/>
											</div>
											@if($errors->has('mobile'))
												<span class="invalid-feedback" role="alert" style="color:red">
													<strong>{{ $errors->first('mobile') }}</strong>
												</span>
											@enderror
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="single-register">
												<label>Gender<span>*</span></label>
												<select class="chosen-select" tabindex="1" style="width:100%;" data-placeholder="Default Sorting">
													<option value="Select">Select a Gender</option>
													<option value="Andhra">Male</option>
													<option value="Pradesh">Female</option>
												</select>
											</div>
										</div>
									</div>
									<div class="single-register">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<label>Type<span>*</span></label>
												<select class="chosen-select" tabindex="1" style="width:100%;" data-placeholder="Default Sorting" name="user_role">
													<option selected disabled>Select Type</option>
													<option value="1" {{ old('user_role') == '1' ? 'selected' : '' }}>Buyer</option>
													<option value="2" {{ old('user_role') == '2' ? 'selected' : '' }}>Seller</option>
												</select>
												@if($errors->has('mobile'))
													<span class="invalid-feedback" role="alert" style="color:red">
														<strong>{{ $errors->first('mobile') }}</strong>
													</span>
												@enderror
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 check">
												<label>What You Want to Sell*</label>
												<p class="option"><input type="checkbox" name="">Book</p>
												<p class="option"><input type="checkbox" name="">Projects</p>
												<p class="option"><input type="checkbox" name="">Documents </p>
												<p class="option"><input type="checkbox" name="">Magazines</p>
											</div>
										</div>
									</div>
									<div class="single-register">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<label>Account password<span>*</span></label>
												<input type="text" placeholder="Password"/>
											</div>
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<label>Confirm password<span>*</span></label>
												<input type="text" placeholder="Password"/>
											</div>
										</div>
									</div>
									<div class="single-register">
										<button type="submit">Register</button>
									</div>
								</form>	
								<a href="Signin">Already Signed up? Login</a>
							</div>
						</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
		<!-- user-login-area-end -->
		@endsection