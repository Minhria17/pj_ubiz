<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset=UTF-8>
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
</html>