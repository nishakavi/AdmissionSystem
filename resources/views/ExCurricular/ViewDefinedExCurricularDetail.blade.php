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
	@if($data=="Added")
	<div class="alert alert-success">
		<button class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>
		Sucessfully Saved!
	</div>
	@endif
	@if($data=="Deleted")
	<div class="alert alert-danger">
		<button class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>
		Sucessfully Deleted!
	</div>
	@endif
@endif
	<script src="/assets/js/bootbox.js"></script>
<style>
	.field_name{
		font-weight:bold;
	}
</style>


<table id="simple-table" class="table  table-bordered table-hover col-sm-5" style="margin-top:20px;">
	<thead>
		<tr>
			<th class="field_name">Extra Curricular Details</th>
			<th class="field_name">Maximum Points</th>
			<th class="field_name">Action</th>
		</tr>
	</thead>
	<tbody>


		<?php $count_val=0; ?>
	    @foreach($Results_excurricular as $arrival)   
	    <?php  $count_val+=1; ?>  
        <tr>
			<td class="field_name col-sm-2"><?php echo $count_val.'. '; ?>{{$arrival->Description}}</td>
			<td>{{$arrival->MaximumPoints}}</td>
			<td>
				<div class="hidden-sm hidden-xs action-buttons">
					<a class="green" href="" style="padding-right:15px;">
						<i class="ace-icon fa fa-pencil bigger-180"></i>
					</a>
 
					<a class="red" class="btn btn-info" id="bootbox-confirm-<?php echo $count_val; ?>"  style="padding-right:15px;">
						<i class="ace-icon fa fa-trash-o bigger-180"></i>
					</a>
				</div>												
			</td>
		</tr>

		<script>
		$("#bootbox-confirm-<?php echo $count_val; ?>").on(ace.click_event, function() {
					bootbox.confirm("Do you confirm to delete this Extra Curricular Activity?", function(result) {
						if(result) {
							window.location.href = "/DeleteExCurricular/{{$arrival->CurricularId}}";
						}
					});
				});
		</script
		

        @endforeach
	</tbody>
</table>

 
 


@stop