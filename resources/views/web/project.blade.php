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
							<li><a href="{{route('web.new_book_list')}}"><i class="fas fa-book"></i>&nbsp;&nbsp;New Books<span>(29)</span></a></li>											
							<li><a href="{{route('web.project_list')}}"><i class="fa fa-line-chart"></i>&nbsp;&nbsp;Projects<span>(14)</span></a></li>
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
								
								@if(count($specialization) > 0)
									@foreach($specialization as $key => $value)
										<div class="single-most-product bd mb-18">
									
											<div class="most-product-content">
												
												<h4><a href="{{route('web.project_list_category',['category_id'=>encrypt($value->id)])}}">{{ $value->name }}</a></h4>
											</div>
										</div>
									@endforeach
								@endif
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
				<div class="row">
					<div class="col-md-6">
						<div class="section-title-5 mb-10">
							<h2>Project&nbsp; (42)</h2>
						</div>
					</div>
					<div class="col-md-6">
						<div class="header-search">
							<a href="#"><i class="fa fa-search"></i></a>
							<input type="text" placeholder="Search project here..." onkeyup="getBook()" name="project_search_box" id="project_search_box">
						</div>
					</div>	
				</div>
				<hr>
				<!-- tab-area-start -->
				<div class="tab-content book-list">
					<div class="tab-pane active" id="th">
						<div class="row">
							<div class="filterDiv" id="pagination_data">
								<!-- single-product-start -->
								@include('web.pagination.project_search')
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

@section('script')
	<script>
		function getBook() {
			var project_search_value= $("#project_search_box").val();
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			$.ajax({
				type:"POST",
				url:"{{ route('ajax_project_list') }}",
				data:{
					"_token": "{{ csrf_token() }}",
					project_search_value:project_search_value
				},
				beforeSend: function() {
					// setting a timeout
					$("#pagination_data").html('<i class="fa fa-spinner fa-spin loader-spin"></i>');
				},
				success:function(data){
					$("#pagination_data").html(data);
				}
			});
		}

		$(document).ready(function () {
			$(document).on('click','.pagination a',function(event){
				event.preventDefault();
				var page = $(this).attr('href').split('page=')[1];
				fetchData(page);
			});
		});

		function fetchData(page) {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});

			$.ajax({
				type:"GET",
				url:"{{asset('project/Ajax/Project/List?page=')}}"+page,
				success:function(data){
					console.log(data)
					$("#pagination_data").html(data);
				}
			});

		}
	</script>
@endsection	