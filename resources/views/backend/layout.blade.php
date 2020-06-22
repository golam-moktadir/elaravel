@include('backend.header')
		<div class="container-fluid-full">
			<div class="row-fluid">	
				@include('backend.sidebar')
			    <!-- start: Content -->	
				@yield('content')
			    <!-- end: Content -->
			</div><!--/fluid-row-->
		</div>
	<div class="clearfix"></div>
@include('backend.footer')	

