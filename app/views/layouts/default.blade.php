<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@if(Session::get('flash_message'))
		<div class="flash">
			{{ Session::get('flash_message') }}
		</div>
	@endif
	
	<div class="container">
		@yield('content')
	</div>
</body>
</html>