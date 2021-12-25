@extends('layouts.app')
@push('css')
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    {{-- <link href="https://coreui.io/demo/4.0/vendors/datatables.net-bs4/css/dataTables.bootstrap4.css"> --}}
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://datatables.yajrabox.com/css/datatables.bootstrap.css" rel="stylesheet">

@endpush
@push('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

@endpush
@section('content')
<div class="row">
	<div class="col-12">
		<div class="card">
			<div  class="card-title p-2">
				<h4>{{__('Posts')}}</h4>
			</div>
			<div class="card-body">
				<div class="table-responsive-sm">
					{!! $dataTable->table() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@push('scripts')
{!! $dataTable->scripts() !!}

<script id="details-template" type="text/x-handlebars-template">
<table class="table">
    
    <tr>
        <td>Post Body</td>
        <td>@{{ body}}</td>
    </tr>
</table>
</script>
<script type="text/javascript" src="https://datatables.yajrabox.com/js/handlebars.js"></script>


<script>
	$(function(){

	var template = Handlebars.compile($("#details-template").html());
	var table = window.LaravelDataTables["posts-table"];
	    // Add event listener for opening and closing details
	    $('#posts-table tbody').on('click', 'td.details-control', function () {
	    	// alert('hi');
	        var tr = $(this).closest('tr');
	        var row = table.row( tr );

	        if ( row.child.isShown() ) {
	            // This row is already open - close it
	            row.child.hide();
	            tr.removeClass('shown');
	        }
	        else {
	            // Open this row
	            row.child( template(row.data()) ).show();
	            console.log(row.data());
	            tr.addClass('shown');
	        }
	    });
	});
</script>

@endpush
@stop