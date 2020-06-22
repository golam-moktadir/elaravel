@extends('backend.layout')
@section('content')
<div id="content" class="span10">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index.html">Home</a>
			<i class="icon-angle-right"></i> 
		</li>
		<li>
			<i class="icon-edit"></i>
			<a href="#">Add Manufacture</a>
		</li>
	</ul>
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Manufacture</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				@if(Session::has('message'))
					<p class="alert alert-success">{{Session::get('message')}}</p>
				@endif
				<form class="form-horizontal" method="post" action="{{route('save-manufacture')}}">
				  <fieldset>@csrf
					<div class="control-group">
					  <label class="control-label" for="typeahead">Manufacture Name</label>
					  <div class="controls">
						<input type="text" name="manufacture_name" value="{{ old('manufacture_name') }}">
						@if($errors->has('manufacture_name'))
							<span class="help-inline">{{$errors->first('manufacture_name')}}</span>
						@endif
					  </div>
					</div>         
					<div class="control-group hidden-phone">
					  <label class="control-label" for="textarea2">Manufacture Description</label>
					  <div class="controls">
						<textarea class="cleditor" name="manufacture_description" id="textarea2" rows="3"></textarea>
					  </div>
					  @if($errors->has('manufacture_description'))
							<span class="help-inline">{{$errors->first('manufacture_description')}}</span>
					  @endif
					</div>
					<div class="control-group">
						<label class="control-label">Publication Status</label>
						<div class="controls">
						  <label class="checkbox inline">
							<input type="checkbox" name="publication_status" id="inlineCheckbox1" value="1">
						  </label>
						  @if($errors->has('publication_status'))
							<span class="help-inline">{{$errors->first('publication_status')}}</span>
					  	  @endif
						</div>
					</div>
					<div class="form-actions">
					  <button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				  </fieldset>
				</form>   

			</div>
		</div><!--/span-->
	</div>
</div>
@endsection