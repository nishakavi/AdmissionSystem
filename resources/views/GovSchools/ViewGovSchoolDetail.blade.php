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



  
	<a href="/ShowAllGovDetails"  >
		<button class="btn btn-link pull-right" >
			<i class="ace-icon fa fa-trash-o" style="color:green;"></i>
			<span class="bigger-110" style="color:green;">Edit</span>
		</button>
	</a>

	<a href="/ConfirmDeleteGovSchools/{{$id}}" >
		<button class="btn btn-link pull-right" >
			<i class="ace-icon fa fa-pencil" style="color:red;"></i>
			<span class="bigger-110" style="color:red;">Delete</span>
		</button>
	</a>



@endsection

@section('content')

<style>
	.field_name{
		font-weight:bold;
	}
</style>


<table id="simple-table" class="table  table-bordered table-hover col-sm-5" style="margin-top:20px;">
	<thead>
		<tr>
			<th colspan="2" class="field_name">School Details</th>
		</tr>
	</thead>
	<tbody>

	    @foreach($Results_school as $arrival)
                
        <tr>
			<td class="field_name col-sm-2">School Id</td>
			<td>{{$arrival->SchoolId}}</td>
		</tr>
		<tr>
			<td class="field_name">School Name</td>
			<td>{{$arrival->SchoolName}}</td>
		</tr>
		<tr>
			<td class="field_name">Address</td>
			<td>{{$arrival->Address}}</td>
		</tr>
		<tr>
			<td class="field_name">City</td>
			<td>{{$arrival->City}}</td>
		</tr>
		        <tr>
			<td class="field_name">Postal Code</td>
			<td>{{$arrival->PostalCode}}</td>
		</tr>
		<tr>
			<td class="field_name">National Status</td>
			<td>{{$arrival->NationalStatus}}</td>
		</tr>
		<tr>
			<td class="field_name">Govenment Grade</td>
			<td>{{$arrival->SchoolGovGrade}}</td>
		</tr>

        @endforeach
		<tr>
			<td class="field_name">Medium</td>
			<td>
			@foreach($Result_Medium as $values)
				@if($values->medium=="1") 
				Tamil |
				@endif

				@if($values->medium=="2") 
				English |
				@endif

				@if($values->medium=="3") 
				Singala |
				@endif
				
			@endforeach
			</td>
		</tr>
	</tbody>
</table>

<table id="simple-table" class="table  table-bordered table-hover col-sm-5">
	<thead>
		<tr>
			<th colspan="2" class="field_name">School Contact Details</th>
		</tr>
	</thead>
	<tbody>

	<?php  $id=0; ?>
	    @foreach($Result_Contact as $arrival)
                <?php $id+=1; ?>
        <tr>
			<td class="field_name col-sm-2"><?php  echo $id.'. '; ?>Owner Desination</td>
			<td>{{$arrival->ownerdesination}}</td>
		</tr>
		<tr>
			<td class="field_name" style="text-align:right;">Owner Name</td>
			<td>{{$arrival->Ownername}}</td>
		</tr>
		<tr>
			<td class="field_name" style="text-align:right;">Contact No</td>
			<td>{{$arrival->ContactNo}}</td>
		</tr>
		<tr>
			<td class="field_name" style="text-align:right;">Mobile Type</td>
			<td>
			@if($arrival->PhoneType=="1") 
			Land Line
			@endif
			@if($arrival->PhoneType=="2") 
			Mobile
			@endif
			</td>
		</tr>

        @endforeach
	</tbody>
</table>

<table id="simple-table" class="table  table-bordered table-hover col-sm-5">
	<thead>
		<tr>
			<th colspan="2" class="field_name">Students Allocation Details</th>
		</tr>
	</thead>
	<tbody>

	<?php  $id=0; ?>
	    @foreach($Result_Grade as $arrival)
                <?php $id+=1; ?>
        <tr>
			<td class="field_name col-sm-2"><?php  echo $id.'. '; ?>Grade {{$arrival->Grade}} Allocation</td>
			<td>{{$arrival->AllocatedMaxStudents}}</td>
		</tr>

        @endforeach
	</tbody>
</table>



@stop