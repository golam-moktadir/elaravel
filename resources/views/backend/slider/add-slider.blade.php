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
	 <a href="#">Add Slider</a>
  </li>
 </ul>
 <div class="row-fluid sortable">
  <div class="box span12">
   <div class="box-header" data-original-title>
	<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Slider</h2>
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
	 <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{route('save-slider')}}">
	  <fieldset>@csrf 
	   <div class="control-group">
		<label class="control-label">Slider Image</label>
		<div class="controls">
		 <input type="file" name="image">
		</div>
		@if($errors->has('image'))
		 <span class="help-inline">{{$errors->first('image')}}</span>
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