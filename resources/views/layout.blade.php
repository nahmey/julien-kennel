<!doctype html>
<html lang="fr">

	<head>
		<title>Julien-kennel</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<script type="application/javascript" src="{{ asset('js/app.js') }}" defer></script>

		<link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
		<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<!-- 		<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
		<link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
		<link rel="stylesheet" href="{{asset('css/aos.css')}}"> -->
		<link href="{{asset('css/all.min.css')}}" rel="stylesheet" type="text/css" />

		<!-- MAIN CSS -->
		<link rel="stylesheet" href="css/style.css">

		<script type="text/javascript">
            let base_url = "{!! url('/') !!}";
        </script>
	</head>

	<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
		<div  id="app">
			<div class="site-wrap" id="home-section">
				@yield('content')
			</div>
		</div>

		<script>
			/*=====================================
		    Sticky
		    ======================================= */
		    window.onscroll = function () {
		        var header_navbar = document.querySelector(".site-navbar");
		        let mobile_menu_bouton = document.querySelector(".mobile-menu-bouton");
		        var sticky = header_navbar.offsetTop;

		        // var logo = document.querySelector('.navbar-brand img')
		        if (window.pageYOffset > sticky) {
		            header_navbar.classList.add("sticky");
		            mobile_menu_bouton.classList.add('text-dark');
		            // logo.src = 'images/logo.png';

		            // if (window.location.href.indexOf("rando") > -1) {
		            //     logo.src = base_url + '/images/logo.png';
		            // }

		        } else {
		            header_navbar.classList.remove("sticky");
		            mobile_menu_bouton.classList.remove('text-dark');
		            // logo.src = 'images/logo_blanc.png';

		            // if (window.location.href.indexOf("rando") > -1) {
		            //     logo.src = base_url + '/images/logo.png';
		            // }

		        }

		        // show or hide the back-top-top button
		        // var backToTo = document.querySelector(".scroll-top");
		        // if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
		        //     backToTo.style.display = "flex";
		        // } else {
		        //     backToTo.style.display = "none";
		        // }
		    };

		</script>


	    <!-- <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script> -->
<!-- 	    <script src="{{asset('js/jquery-migrate-3.0.0.js')}}"></script>
	    <script src="{{asset('js/popper.min.js')}}"></script>
	    <script src="{{asset('js/bootstrap.min.js')}}"></script>
	    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
	    <script src="{{asset('js/jquery.sticky.js')}}"></script>
	    <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	    <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
	    <script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
	    <script src="{{asset('js/stellar.js')}}"></script>
	    <script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	    <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
	    <script src="{{asset('js/aos.js')}}"></script>
	    <script src="{{asset('js/main.js')}}"></script> -->
	</body>

</html>