<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>@yield('title') | RepetBox</title>
	<meta charset="UTF-8">
	<meta name="description" content="RepetBox">
	<meta name="keywords" content="music, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<!-- Favicon -->
	<link href="https://media-private.canva.com/ZmLZ0/MAD6XgZmLZ0/1/tl.png?response-expires=Fri%2C%2024%20Apr%202020%2017%3A13%3A34%20GMT&X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Date=20200424T144647Z&X-Amz-SignedHeaders=host&X-Amz-Expires=8806&X-Amz-Credential=AKIAJWF6QO3UH4PAAJ6Q%2F20200424%2Fus-east-1%2Fs3%2Faws4_request&X-Amz-Signature=506c2f9aeacdbdf3328682c3caf8c4fb249faec54f1ff7624e420a9efaa7d398" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="/main_theme/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/main_theme/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="/main_theme/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="/main_theme/css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="/main_theme/css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section clearfix">
		<a href="/" class="site-logo">
			<img width="300" src="{{ asset('assets/logos/repetbox2.png') }}" alt="">
		</a>
		<div class="header-right">
            {{--
			<a href="#" class="hr-btn">Help</a>
			<span>|</span>
            --}}
            @guest
			<div class="user-panel">
				<a href="/login" class="login">Connexion</a>
				<a href="/register" class="register">Inscription</a>
			</div>
            @endguest
		</div>
		<ul class="main-menu">
            @auth
            <li>
                <a href="#">Studio</a>
                <ul class="sub-menu">
                    <li><a href="#">Créer un enregistrement</a></li>
        			<li><a href="#">Rechercher des musiciens</a></li>
                    <li><a href="#">Utiliser Studio'Box</a></li>
                </ul>
            </li>
            <li><a href="#">Contactez-nous</a></li>
            @endauth
            @php $locale = session()->get('locale'); @endphp
            <li>
                @switch($locale)
                    @case('en')
                <a href="#">Langue (English)</a>
                    @break
                    @default
                <a href="#">Langue (Français)</a>
                @endswitch
				<ul class="sub-menu">
					<li><a href="lang/en"><img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ae/Flag_of_the_United_Kingdom.svg/1200px-Flag_of_the_United_Kingdom.svg.png" width="30px" height="20x">English</a></li>
					<li><a href="lang/fr"><img src="https://cdn.webshopapp.com/shops/94414/files/52383156/flag-of-france.jpg" width="30px" height="20x">Français</a></li>
				</ul>
			</li>
            @auth
            <li>
                <a href="#"><i class="fa fa-user-circle"></i> &nbsp; {{Auth::user()->name}}</a>
                <ul class="sub-menu">
					<li><a href="/home">Mon profil</a></li>
                    <li><a href="#">Enregistrements</a></li>
                    <li><a href="#">Répétitions</a></li>
                    <li><a href="#">Messagerie</a></li>
                    <li><a href="#">Studio'Plan</a></li>
                    <li><a href="#">Importer</a></li>
					<li><a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> &nbsp;Déconnexion</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                         </form>
                    </li>
				</ul>
            </li>
            @endauth

		</ul>
	</header>
	<!-- Header section end -->

    @yield('content')

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7 order-lg-2">
					<div class="row">
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>About us</h2>
								<ul>
									<li><a href="">Our Story</a></li>
									<li><a href="">Sol Music Blog</a></li>
									<li><a href="">History</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>Products</h2>
								<ul>
									<li><a href="">Music</a></li>
									<li><a href="">Subscription</a></li>
									<li><a href="">Custom Music</a></li>
									<li><a href="">Footage</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-widget">
								<h2>Playlists</h2>
								<ul>
									<li><a href="">Newsletter</a></li>
									<li><a href="">Careers</a></li>
									<li><a href="">Press</a></li>
									<li><a href="">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-5 order-lg-1">
					<img width="300" src="{{ asset('assets/logos/repetbox2.png') }}" alt="">
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					<div class="social-links">
						<a href=""><i class="fa fa-instagram"></i></a>
						<a href=""><i class="fa fa-pinterest"></i></a>
						<a href=""><i class="fa fa-facebook"></i></a>
						<a href=""><i class="fa fa-twitter"></i></a>
						<a href=""><i class="fa fa-youtube"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer section end -->

	<!--====== Javascripts & Jquery ======-->
	<script src="/main_theme/js/jquery-3.2.1.min.js"></script>
	<script src="/main_theme/js/bootstrap.min.js"></script>
	<script src="/main_theme/js/jquery.slicknav.min.js"></script>
	<script src="/main_theme/js/owl.carousel.min.js"></script>
	<script src="/main_theme/js/mixitup.min.js"></script>
	<script src="/main_theme/js/main.js"></script>

	</body>
</html>
