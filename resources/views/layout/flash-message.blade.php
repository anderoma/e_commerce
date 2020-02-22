
@if (session('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
	{{ session('success') }}
</div>
@endif


@if (session('error'))
<div class="alert alert-danger alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
  {{ session('error') }}
</div>
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block" id="alert">>
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($message = Session::get('info'))
<div class="alert alert-info alert-block" id="alert">>
	<button type="button" class="close" data-dismiss="alert">×</button>	
	<strong>{{ $message }}</strong>
</div>
@endif


@if ($errors->any())
<div class="alert alert-danger" id="alert">>
	<button type="button" class="close" data-dismiss="alert">×</button>	
	Please check the form below for errors
</div>
@endif