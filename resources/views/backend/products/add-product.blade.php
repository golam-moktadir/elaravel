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
			<a href="#">Add Product</a>
		</li>
	</ul>
	<div class="row-fluid sortable">
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>
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
				<form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{route('save-product')}}">
				  <fieldset>@csrf
					<div class="control-group">
					  <label class="control-label" for="typeahead">Product Name</label>
					  <div class="controls">
						<input type="text" name="product_name" value="{{ old('product_name') }}">
						@if($errors->has('product_name'))
							<span class="help-inline">{{$errors->first('product_name')}}</span>
						@endif
					  </div>
					</div>  
					<div class="control-group">
						<label class="control-label" for="selectError">Select Category</label>
						<div class="controls">
						  <select id="" data-rel="chosen" name="category_name">
						  		<option value="">--Product Category--</option>
						  	@foreach($categories as $category)
						  		<option value="{{$category->id}}">{{$category->category_name}}</option>
						  	@endforeach
						  </select>
						  @if($errors->has('category_name'))
							<span class="help-inline">{{$errors->first('category_name')}}</span>
					      @endif
						</div>
					  </div>  
					<div class="control-group">
						<label class="control-label" for="selectError">Select Brand</label>
						<div class="controls">
						  <select id="selectError" data-rel="chosen" name="brand_name">
						  		<option value="">--Product Brand--</option>
						  	@foreach($brands as $brand)
						  		<option value="{{$brand->id}}">{{$brand->manufacture_name}}</option>
						  	@endforeach
						  </select>
						  @if($errors->has('brand_name'))
							<span class="help-inline">{{$errors->first('brand_name')}}</span>
					      @endif
						</div>
					</div>      
					<div class="control-group hidden-phone">
					  <label class="control-label" for="textarea2">Short Description</label>
					  <div class="controls">
						<textarea class="cleditor" name="short_description" id="textarea2" rows="3"></textarea>
					  </div>
					  @if($errors->has('short_description'))
							<span class="help-inline">{{$errors->first('short_description')}}</span>
					  @endif
					</div>
					<div class="control-group hidden-phone">
					  <label class="control-label" for="textarea2">Long Description</label>
					  <div class="controls">
						<textarea class="cleditor" name="long_description" id="textarea2" rows="3"></textarea>
					  </div>
					  @if($errors->has('long_description'))
							<span class="help-inline">{{$errors->first('long_description')}}</span>
					  @endif
					</div>
					<div class="control-group">
					  <label class="control-label" for="typeahead">Product Price</label>
					  <div class="controls">
						<input type="text" name="price" value="{{ old('price') }}">
						@if($errors->has('price'))
							<span class="help-inline">{{$errors->first('price')}}</span>
						@endif
					  </div>
					</div>
					<div class="control-group">
						<label class="control-label">Product Image</label>
						<div class="controls">
						  <input type="file" name="image">
						</div>
						@if($errors->has('image'))
							<span class="help-inline">{{$errors->first('image')}}</span>
						@endif
					</div>
					<div class="control-group">
					  <label class="control-label" for="typeahead">Product Size</label>
					  <div class="controls">
						<input type="text" name="size" value="{{ old('size') }}">
						@if($errors->has('size'))
							<span class="help-inline">{{$errors->first('size')}}</span>
						@endif
					  </div>
					</div>
					<div class="control-group">
					  <label class="control-label" for="typeahead">Product Color</label>
					  <div class="controls">
						<input type="text" name="color" value="{{ old('color') }}">
						@if($errors->has('color'))
							<span class="help-inline">{{$errors->first('color')}}</span>
						@endif
					  </div>
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