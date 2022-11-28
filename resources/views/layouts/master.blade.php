<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=UTF-8>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="{{ asset('./css/cdn_css/cdn_slick_min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('./css/cdn_css/cdn_slick_theme_min.css') }}" rel="stylesheet" type="text/css" />
	<title>Ubiz</title>
</head>
<body>
	@section('sidebar')
		// Sidebar
	@show

	<div class="container">
		@yield('content')
	</div>

    @section('footer')
		// Sidebar
	@show
</body>
<script>
	<script type="text/javascript" src="./js/js_cdn/cdn_slick_min.js"></script>
</script>
</html>