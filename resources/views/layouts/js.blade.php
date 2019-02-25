<!-- cdn jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<!-- Materialize JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){

		//Navbar
		$('.sidenav').sidenav();

		//Modal
		$('.modal').modal();

		//Parallax
		$('.parallax').parallax();
		
		//Carousel
	    $('.carousel.carousel-slider').carousel({
			fullWidth: true,
			padding: 200,
			indicators: true
		}, setTimeout(autoplay, 4500));

		function autoplay() {
		  $('.carousel').carousel('next');
		  setTimeout(autoplay, 4500);
		}
	});

</script>
<!-- scrollit -->
{{-- <script src="{{ asset('js/scrollit.js') }}"></script> --}}
<!-- cursor -->
<script src="{{ asset('js/cursor.js') }}"></script>
<!-- img load -->
{{-- <script src="{{ asset('js/img-load.js') }}"></script> --}}
<!-- scroll -->
{{-- <script src="{{ asset('js/scroll.js') }}"></script> --}}
<!-- script -->
<script src="{{ asset('js/script.js') }}"></script>