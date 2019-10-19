@extends('seller.template.seller_master')

@section('content')

<div class="right_col" role="main">
    <div class="row">
    	{{-- <div class="col-md-2"></div> --}}
    	<div class="col-md-12" style="margin-top:50px;">
    	    <div class="x_panel">

    	        <div class="x_title">
    	            <h2>Add New Product</h2>
    	            <div class="clearfix"></div>
    	        </div>
                <div>
                     @if (Session::has('message'))
                        <div class="alert alert-success" >{{ Session::get('message') }}</div>
                     @endif
                     @if (Session::has('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                     @endif

                </div>
    	        <div>
    	            <div class="x_content">
    	               @if(isset($product) && !empty($product))
        	            	{{ Form::open(['method' => 'post','route'=>'seller.update_product']) }}
        	            	<input type="hidden" name="product_id" value="{{encrypt($product->id)}}">
                            <div class="well" style="overflow: auto">
                                <div class="form-row mb-10">
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                      <label for="name">Product name</label>
                                      <input type="text" class="form-control" name="name" value="{{ $product->name }}"  placeholder="Enter Product name" >
                                        @if($errors->has('name'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                      <label for="tag_name">Tag Name</label>
                                      <input type="text" class="form-control" name="tag_name"  placeholder="Enter Tag Name" value="{{ $product->tag_name }}">

                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                      <label for="size_wearing">Size Wearing</label>
                                      <input type="text" class="form-control" name="size_wearing"  placeholder="Enter Size Wearing" value="{{ $product->size_wearing }}">
                                    </div> 
                                                                
                                </div>

                                <div class="form-row mb-3">
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                      <label for="fit_wearing">Fit Wearing</label>
                                      <input type="text" class="form-control" name="fit_wearing"  placeholder="Enter Fit Wearing" value="{{ $product->fit_wearing }}">
                                    </div>
                                </div>

                                <div class="form-row mb-3">
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <label for="category">Select Category</label>
                                        <select class="form-control" name="category" id="category">
                                            <option value="">Select Category</option>
                                            @if(isset($category) && !empty($category))
                                                @foreach($category as $cat)
                                                    @if($product->category  == $cat->id)
                                                        <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                                                    @else
                                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                        @if($errors->has('category'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('category') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <label for="first_category">Select First Category</label>
                                        <select class="form-control" name="first_category" id="first_category">
                                          <option value="">Select First Category</option>
                                          @if(isset($first_category) && !empty($first_category))
                                                @foreach($first_category as $cat)
                                                    @if($product->first_category  == $cat->id)
                                                        <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                                                    @else
                                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                        @if($errors->has('first_category'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('first_category') }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3">
                                        <label for="second_category">Select Second Category</label>
                                        <select class="form-control" name="second_category" id="second_category">
                                            <option value="">Select Second Category</option>
                                            @if(isset($second_category) && !empty($second_category))
                                                @foreach($second_category as $cat)
                                                    @if($product->second_category  == $cat->id)
                                                        <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                                                    @else
                                                        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                        @if($errors->has('second_category'))
                                            <span class="invalid-feedback" role="alert" style="color:red">
                                                <strong>{{ $errors->first('second_category') }}</strong>
                                            </span>
                                        @enderror
                                    </div>                            
                                </div>

                                {{-- <div class="form-row mb-3">
                                    <div class="col-md-4 col-sm-12 col-xs-12 mb-3" >
                                        <label for="brand">Select Brand</label>
                                        <select class="form-control" name="brand" id="brand">
                                            <option value="">Select Brand</option>
                                             @if(isset($brands) && !empty($brands))
                                                @foreach($brands as $brand)
                                                    @if($product->brand_id  == $brand->id)
                                                        <option value="{{ $brand->id }}" selected>{{ $brand->name }}</option>
                                                    @else
                                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>                        
                                </div> --}}
                            </div>

                            <div class="well" style="overflow: auto">
                                <div class="form-row mb-10">
                                    <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                                        <label for="size">Type Product Short Descrition</label>
                                        <textarea class="form-control" name="short_description">{{$product->short_description}}</textarea>
                                    </div>
                                    
                                    <div class="col-md-12 col-sm-12 col-xs-12 mb-3">
                                        <label for="size">Type Product Long Descrition</label>
                                        <textarea class="form-control" rows="6" name="long_description">{{$product->long_description}}</textarea>
                                    </div>

                                </div>
                           </div>

        	            	<div class="form-group">
        	            	 	@if(isset($first_category) && !empty($first_category))
                                    {{ Form::submit('Save', array('class'=>'btn btn-success')) }}
                                @else
                                    {{ Form::submit('Submit', array('class'=>'btn btn-success')) }}
                                @endif
        	                	
        	            	</div>
        	            	{{ Form::close() }}
                        @endif
    	            </div>
    	        </div>
    	    </div>
    	</div>
    	{{-- <div class="col-md-2"></div> --}}
    </div>
</div>


 @endsection

  @section('script')
     <script type="text/javascript">
        var color_html = null;
         var size={};
        $(document).ready(function(){
            $("#category").change(function(){
                var category = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:"GET",
                    url:"{{ url('/admin/first/Category/')}}"+"/"+category+"",
                    success:function(data){
                        // console.log(data);
                        var cat = JSON.parse(data);
                        $("#first_category").html("<option value=''>Please Select First Category</option>");

                        $.each( cat, function( key, value ) {
                            $("#first_category").append("<option value='"+key+"'>"+value+"</option>");
                        });

                    }
                });
            });

            $("#first_category").change(function(){
                var category = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type:"GET",
                    url:"{{ url('/admin/second/Category/')}}"+"/"+category+"",
                    success:function(data){
                        console.log(data);
                        var cat = JSON.parse(data);
                        $("#second_category").html("<option value=''>Please Select Second Category</option>");

                        $.each( cat, function( key, value ) {
                            $("#second_category").append("<option value='"+key+"'>"+value+"</option>");
                        });

                    }
                });
            });
        });

        $("#first_category").change(function(){                        
            var category = $(this).val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type:"GET",
                url:"{{ url('/Seller/Products/Ajax/brand/')}}"+"/"+category+"",
                success:function(data){
                    if (data.length > 0) {                           
                        $("#brand").html("<option value=''>Please Select Brand</option>");
                        $.each( data, function( key, value ) {
                            $("#brand").append("<option value='"+value.id+"'>"+value.name+"</option>");
                        });
                    }else{
                        $("#brand").html("<option value=''>Please Select Brand</option>");
                    }

                }
            });
        });

        
    </script>
 @endsection


        
    