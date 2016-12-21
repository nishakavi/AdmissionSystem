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

@if(isset($id))
	@if($id=="Deleted")
	<div class="alert alert-success">
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
			<th>School Name</th>
			<th>School City</th>
			<th>National Grade</th>
			<th>School Grade</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php $count_val=0; ?>
	    @foreach($Results_school as $arrival) 
	    <?php  $count_val+=1; ?>
        <tr>
			<td><?php echo $count_val.'.'; ?></td>
			<td>{{$arrival->SchoolName}}</td>
			<td>{{$arrival->City}}</td>
			<td>{{$arrival->NationalStatus}}</td>
			<td>{{$arrival->SchoolGovGrade}}</td>
			<td>
				<div class="hidden-sm hidden-xs action-buttons">
					<a class="blue" href="/ViewGovSchoolDetail/{{$arrival->SchoolId}}" style="padding-right:15px;">
						<i class="ace-icon fa fa-search-plus bigger-180"></i>
					</a>

					<a class="green" href="/s/{{$arrival->SchoolId}}" style="padding-right:15px;">
						<i class="ace-icon fa fa-pencil bigger-180"></i>
					</a>

					<a class="red" href="/ConfirmDeleteGovSchools/{{$arrival->SchoolId}}" style="padding-right:15px;">
						<i class="ace-icon fa fa-trash-o bigger-180"></i>
					</a>
				</div>												
			</td>
		</tr>
        @endforeach
		
	</tbody>
</table>

@stop