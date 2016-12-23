@extends('layout.default')
@section('LayoutRoute')
	@foreach($layout_path as $arrival)
		<li class="active">{{ $arrival }}</li>
	@endforeach
@endsection

@section('LayoutTitle')
	{{ $layout_title }}
	<small>
	<i class="ace-icon fa fa-angle-double-right"></i>
		{{ $layout_subtitle }}
	</small>



  
	<a href=""  >
		<button class="btn btn-link pull-right" >
			<i class="ace-icon fa fa-trash-o" style="color:green;"></i>
			<span class="bigger-110" style="color:green;">Edit</span>
		</button>
	</a>

	<a href="/ConfirmDeleteUsers/{{$id}}" >
		<button class="btn btn-link pull-right" >
			<i class="ace-icon fa fa-pencil" style="color:red;"></i>
			<span class="bigger-110" style="color:red;">Delete</span>
		</button>
	</a>



@endsection

@section('content')

@if(isset($data))
	@if($data=="Added")
	<div class="alert alert-success">
		<button class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>
		Sucessfully Saved!
	</div>
	@endif
@endif

<style>
	.field_name{
		font-weight:bold;
	}
</style>


<table id="simple-table" class="table  table-bordered table-hover col-sm-5" style="margin-top:20px;">
	<thead>
		<tr>
			<th colspan="2" class="field_name">User Details</th>
		</tr>
	</thead>
	<tbody>

	    @foreach($Results_userdetails as $arrival)
                
        <tr>
			<td class="field_name col-sm-2">User Id</td>
			<td>{{$arrival->PersonId}}</td>
		</tr>
		<tr>
			<td class="field_name">First Name</td>
			<td>{{$arrival->FirstName}}</td>
		</tr>
		<tr>
			<td class="field_name">Last Name</td>
			<td>{{$arrival->LastName}}</td>
		</tr>
		<tr>
			<td class="field_name">Email Id</td>
			<td>{{$arrival->Email}}</td>
		</tr>
		<tr>
			<td class="field_name">Contact No</td>
			<td>{{$arrival->ContactNo}}</td>
		</tr>
		<tr>
			<td class="field_name" colspan="2"></td>
		</tr>
		<tr>
			<td class="field_name">User Name</td>
			<td>{{$arrival->UserName}}</td>
		</tr>
		<tr>
			<td class="field_name">User Level</td>
			<td>{{$arrival->UserLevel}}</td>
		</tr>

        @endforeach
	</tbody>
</table>
 



@stop