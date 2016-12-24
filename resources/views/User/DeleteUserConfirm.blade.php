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


	<div class="col-xs-12 col-sm-6 widget-container-col ui-sortable" id="widget-container-col-9">
		<div class="widget-box widget-color-red ui-sortable-handle" id="widget-box-9"  >
			<div class="widget-header">
				<h5 class="widget-title">Delete Confirmation</h5>

				<div class="widget-toolbar">
					<a href="#" data-action="collapse">
						<i class="1 ace-icon fa fa-chevron-up bigger-125"></i>
					</a>
				</div>
			</div>

			<div class="widget-body">
			   @foreach($Results_user as $arrival)
				<div class="widget-main">
					<p class="alert alert-info">
					Are you confirm to Delete this user Details?
					</p>	
							<table id="simple-table" class="table  table-bordered table-hover">
								<thead>
									<tr>
										<th colspan="2" class="field_name">User Details</th>
									</tr>
								</thead>
								<tbody>
								 
							                
							        <tr>
										<td class="field_name col-sm-4">User Id</td>
										<td>{{$arrival->PersonId}}</td>
									</tr>
									<tr>
										<td class="field_name">Full Name</td>
										<td>{{$arrival->FirstName}} {{$arrival->LastName}}</td>
									</tr>
									<tr>
										<td class="field_name">Email</td>
										<td>{{$arrival->Email}}</td>
									</tr>
									<tr>
										<td class="field_name">Status</td>
										<td>{{$arrival->Status}}</td>
									</tr>
									      
								</tbody>
							</table>

					 
				 
				</div>

				<div class="widget-toolbox padding-8 clearfix">
					<a href="/ViewAllUserDetail/Normal">
					<button class="btn btn-xs btn-danger pull-left" >
						<i class="ace-icon fa fa-times"></i>
						<span class="bigger-110">I don't accept</span>
					</button>
					</a>
					<a href="/DeleteUserDetails/{{$arrival->PersonId}}">
					<button class="btn btn-xs btn-success pull-right">
						<span class="bigger-110">I accept</span>
						<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
					</button>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>	

<style>
	.field_name{
		font-weight:bold;
	}
</style>

 



@stop