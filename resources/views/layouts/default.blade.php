
<html>
<!-- Head -->
<head>
	@include('layouts.head')
</head>
<!-- End head -->

<!-- Body -->
<body>
	<div id="app">
		@include('layouts.cursor')
		@include('layouts.nav')
		@yield('contents')
		
		@include('layouts.footer')
	</div>
	@include('layouts.js')
</body>
<!-- End body -->
</html>