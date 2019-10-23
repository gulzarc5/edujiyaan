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
								<li><a href="#" class="active">login</a></li>
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
							<h2> Seller Login</h2>
							<p>Insert here your username name and password</p>
							@if (Session::has('message'))
								<div class="alert alert-success">{{ Session::get('message') }}</div>
							@endif @if (Session::has('error'))
								<div class="alert alert-danger">{{ Session::get('error') }}</div>
							@endif
						</div>
					</div>
					{{ Form::open(array('route' => 'seller.login', 'method' => 'post')) }}
					<div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12">
						<div class="login-form">
							<form>
								<div class="single-login">
									<label>Username or email<span>*</span></label>
									<input type="text" name="email" value="{{old('email')}}"/>
									@if ($message = Session::get('login_error'))
										<span class="invalid-feedback" role="alert">
											<strong style="color:red">{{ $message }}</strong>
										</span>
									@endif
									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong style="color:red">{{ $message }}</strong>
										</span>
									@enderror
								</div>

							
								
								<div class="single-login">
									<label>Passwords <span>*</span></label>
									<input type="password" name="password"/>
									@error('password')
										<span class="invalid-feedback" role="alert">
											<strong style="color:red">{{ $message }}</strong>
										</span>
									@enderror
								</div>
								<div class="single-login single-login-2">
									<button type="submit">login</button>
								</div>
							</form>
							<a href="Signin">Are you a buyer? Login</a>
						</div>
					</div>
					{{ Form::close() }}
				</div>
			</div>
		</div>
		<!-- user-login-area-end -->
		@endsection