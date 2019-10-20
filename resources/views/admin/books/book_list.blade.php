@extends('admin.template.admin_master')

@section('content')

<div class="right_col" role="main">
    <div class="row">
    	<div class="col-md-12 col-xs-12 col-sm-12" style="margin-top:50px;">
    	    <div class="x_panel">

    	        <div class="x_title">
    	            <h2>Buyers List</h2>
    	            <div class="clearfix"></div>
    	        </div>
    	        <div>
    	            <div class="x_content">
                        <table id="size_list" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                          <thead>
                            <tr>
                              <th>Sl</th>
                              <th>Book ID</th>
                              <th>Name</th>
                              <th>Author</th>
                              <th>Publisher</th>
                              <th>Condition</th>
                              <th>Type</th>
                              <th>M.R.P.</th>
                              <th>Price</th>
                              <th>Status</th>
                              <th>action</th>
                            </tr>
                          </thead>
                          <tbody>                       
                          </tbody>
                        </table>
    	            </div>
    	        </div>
    	    </div>
    	</div>
    </div>
	</div>


 @endsection

@section('script')
     
     <script type="text/javascript">
         $(function () {
    
            var table = $('#size_list').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.ajax_book_list') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'id', name: 'id',searchable: true},
                    {data: 'book_name', name: 'book_name' ,searchable: true},
                    {data: 'author_name', name: 'author_name' ,searchable: true},              
                    {data: 'publisher_name', name: 'publisher_name' ,searchable: true},    
                    {data: 'publisher_name', name: 'publisher_name' ,searchable: true},                    
                    {data: 'book_type', name: 'book_type' ,searchable: true},                 
                    {data: 'mrp', name: 'mrp' ,searchable: true},                 
                    {data: 'price', name: 'price' ,searchable: true},                 
                    {data: 'status_tab', name: 'status_tab',orderable: false, searchable: false},          
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
            
        });
     </script>
    
 @endsection