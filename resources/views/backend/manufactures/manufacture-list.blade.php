@extends('backend.layout')
@section('content')
<div id="content" class="span10">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="#">Home</a>
			<i class="icon-angle-right"></i> 
		</li>
		<li>
			<i class="icon-edit"></i>
			<a href="#">All Manufactures</a>
		</li>
	</ul>
	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon user"></i><span class="break"></span>All Manufactures</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <thead>
					  <tr>
						  <th>Sl.</th>
						  <th>Manufacture Name</th>
						  <th>Role</th>
						  <th>Status</th>
						  <th>Actions</th>
					  </tr>
				  </thead>   
				  <tbody>
				  	@php ($i = 1)
				  	@foreach($manufactures as $manufacture)
					<tr>
						<td>{{$i++}}</td>
						<td class="center">{{$manufacture->manufacture_name}}</td>
						<td class="center">Member</td>
						<td class="center">
							@if($manufacture->publication_status == 1)
								<span class="label label-success">Active</span>
							@else
								<span class="label label-danger">Inactive</span>
							@endif
						</td>
						<td class="center">
							<a class="btn btn-success" href="#">
								<i class="halflings-icon white zoom-in"></i>  
							</a>
							<a class="btn btn-info" href="#">
								<i class="halflings-icon white edit"></i>  
							</a>
							<a class="btn btn-danger" href="#">
								<i class="halflings-icon white trash"></i> 
							</a>
						</td>
					</tr>
					@endforeach
				  </tbody>
			  </table>            
			</div>
		</div><!--/span-->
			
	</div>
</div>
@endsection