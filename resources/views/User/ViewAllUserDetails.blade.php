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
@endsection


@section('content')

@if(isset($data))
	@if($data=="Deleted")
	<div class="alert alert-danger">
		<button class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>
		Sucessfully Deleted!
	</div>
	@endif
@endif


<table id="simple-table" class="table table-striped table-bordered table-hover dataTable no-footer">
	<thead>
		<tr>
			<th style="width:50px;">#</th>
			<th>Person Name</th>
			<th>Email</th>
			<th>Contact No</th>
			<th>Status</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php $count_val=0; ?>
	    @foreach($Results_userdetails as $arrival) 
	    <?php  $count_val+=1; ?>
        <tr>
			<td><?php echo $count_val.'.'; ?></td>
			<td>{{$arrival->FirstName }} {{$arrival->LastName }}</td>
			<td>{{$arrival->Email}}</td>
			<td>{{$arrival->ContactNo}}</td>
			<td>{{$arrival->Status}}</td>
			<td>
				<div class="hidden-sm hidden-xs action-buttons">
					<a class="blue" href="/ViewUserDetail/{{$arrival->PersonId}}/Normal" style="padding-right:15px;">
						<i class="ace-icon fa fa-search-plus bigger-180"></i>
					</a>

					<a class="green" href=" " style="padding-right:15px;">
						<i class="ace-icon fa fa-pencil bigger-180"></i>
					</a>

					<a class="red" href="/ConfirmDeleteUsers/{{$arrival->PersonId}}" style="padding-right:15px;">
						<i class="ace-icon fa fa-trash-o bigger-180"></i>
					</a>
				</div>												
			</td>
		</tr>
        @endforeach
		
	</tbody>
</table>


 

@stop