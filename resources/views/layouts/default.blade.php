<!DOCTYPE html>
<html>
<!-- Head -->
<head>
	@include('layouts.head')
</head>
<!-- End head -->

<!-- Body -->
<body>
	@include('layouts.cursor')
	@include('layouts.nav')
	@yield('contents')
	@include('layouts.js')
	@include('layouts.footer')
</body>
<!-- End body -->
</html>