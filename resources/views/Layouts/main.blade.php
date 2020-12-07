<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Title Tag  -->
		<title>Bosh sahifa</title>

		<!-- Favicon -->
		<link rel="icon" type="image" href="{{ asset('front/img/favicon.ico')}}">

		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

		<!-- Bizwheel Plugins CSS -->
		<link rel="stylesheet" href="{{ asset('front/css/animate.min.css')}}">
		<link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{ asset('front/css/cubeportfolio.min.css')}}">
		<link rel="stylesheet" href="{{ asset('front/css/font-awesome.css')}}">
		<link rel="stylesheet" href="{{ asset('front/css/jquery.fancybox.min.css')}}">
		<link rel="stylesheet" href="{{ asset('front/css/magnific-popup.min.css')}}">
		<link rel="stylesheet" href="{{ asset('front/css/owl-carousel.min.css')}}">
		<link rel="stylesheet" href="{{ asset('front/css/slicknav.min.css')}}">

		<!-- Bizwheel Stylesheet -->
		<link rel="stylesheet" href="{{ asset('front/css/reset.css')}}">
		<link rel="stylesheet" href="{{ asset('front/style.css')}}">
		<link rel="stylesheet" href="{{ asset('front/css/responsive.css')}}">
        @yield('stylesheets')
		<!-- Bizwheel Colors -->
		<!--<link rel="stylesheet" href="{{ asset('front/css/skins/skin-1.css')}}">
		<!--<link rel="stylesheet" href="{{ asset('front/css/skins/skin-2.css')}}">-->
		<!--<link rel="stylesheet" href="{{ asset('front/css/skins/skin-3.css')}}">-->
		<!--<link rel="stylesheet" href="{{ asset('front/css/skins/skin-4.css')}}">-->

		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>
	<body id="bg">

		<!-- Boxed Layout -->
		<div id="page" class="site boxed-layout">

		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->

		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Top Contact -->
							<div class="top-contact">
								<div class="single-contact"><i class="fa fa-phone"></i>Tel: (+99871) 256-37-38</div>
								<div class="single-contact"><i class="fa fa-envelope-open"></i>Email: info@pharmi.uz</div>
								<div class="single-contact"><i class="fa fa-clock-o"></i>{{ __('manzil') }}</div>
							</div>
							<!-- End Top Contact -->
						</div>
						<div class="col-lg-4 col-12">
							<div class="topbar-right">
								<!-- Social Icons -->
								<ul class="social-icons">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								</ul>
                <ul class="social-icons">
                    <li class="nav-item" >
                        <a  href="{{ route(Route::currentRouteName(), ['uz', ''] )}}"> <img src="{{ asset('imgflag/uz.png')}}" width="20" alt=""> </a>
                    </li>
                    <li class="nav-item">
                        <a  href="{{ route(Route::currentRouteName(), ['ru', ''] )}}"><img src="{{ asset('imgflag/ru.png')}}" width="20" alt=""> </a>
                    </li>
                    <li class="nav-item">
                        <a  href="{{ route(Route::currentRouteName(), ['en', ''] )}}"><img src="{{ asset('imgflag/en.png')}}" width="20" alt=""> </a>
                    </li>
                </ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Topbar -->
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo">
												<a href="{{ route('olma', app()->getLocale()) }}">
													<img src="{{ asset('front/img/logo_uz.png')}}" alt="#">
												</a>
											</div>
										</div>
										<div class="mobile-nav"></div>
									</div>
									<div class="col-lg-10 col-md-9 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">
													<div class="nav-inner">
														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<ul id="nav" class="nav main-menu menu navbar-nav">
																<li><a href="/"><img  src="{{ asset('front/img/house-24.png')}}" alt="#"></a></li>
																<li class="icon-active"><a href="#">{{ __('institut') }}</a>
																	<ul class="sub-menu">
																		<li ><a href="about.html">About Us</a></li>
																		<li><a href="404.html">404</a></li>
																	</ul>
																</li>
																<li class="icon-active"><a href="#">{{ __('faoliyat') }}</a>
																	<ul class="sub-menu">
																		<li><a href="blog.html">Blog Grid</a></li>
																		<li><a href="blog-single.html">Blog Single</a></li>
																	</ul>
																</li>


																<li class="icon-active"><a href="#">{{ __('abuturentlar') }}</a>
																	<ul class="sub-menu">
																		<li ><a href="about.html">About Us</a></li>
																		<li><a href="404.html">404</a></li>
																	</ul>
																</li>

																<li class="icon-active"><a href="#">{{ __('talabalar') }}</a>
																	<ul class="sub-menu">
																		<li ><a href="about.html">About Us</a></li>
																		<li><a href="404.html">404</a></li>
																	</ul>
																</li>
																<li class="icon-active"><a href="/blog">{{ __('new') }}</a>
																	<ul class="sub-menu">
																		<li><a href="/blog">{{ __('ins_yangiliklari') }}</a></li>
																		<li><a href="/blog">{{ __('xori_yangiliklari') }}</a></li>
																		<li><a href="/blog">{{ __('barcha_elonlar') }}</a></li>
																		<li><a href="/blog">{{ __('tadbirlar') }}</a></li>
																		<li><a href="/blog">{{ __('ilm_seminarlar') }}</a></li>
																	</ul>
																</li>

																<li class="icon-active"><a href="#">{{ __('hujjatlar') }}</a>
																	<ul class="sub-menu">
																		<li ><a href="about.html">About Us</a></li>
																		<li><a href="404.html">404</a></li>
																	</ul>
																</li>
																<li><a href="/contact">{{ __('contact') }}</a></li>
															</ul>
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											<!--/ End Main Menu -->
											<!-- Right Bar -->
											<div class="right-bar">
												<!-- Search Bar -->
												<ul class="right-nav">
													<li class="top-search"><a href="#0"><i class="fa fa-search"></i></a></li>
													<li class="bar"><a class="fa fa-bars"></a></li>
												</ul>
												<!--/ End Search Bar -->
												<!-- Search Form -->
												<div class="search-top">
													<form action="#" class="search-form" method="get">
														<input type="text" name="s" value="" placeholder="Search here"/>
														<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
													</form>
												</div>
												<!--/ End Search Form -->
											</div>
											<!--/ End Right Bar -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Header -->
			<!-- Sidebar Popup -->
			<div class="sidebar-popup">
				<div class="cross">
					<a class="btn"><i class="fa fa-close"></i></a>
				</div>
				<div class="single-content">

					<h4>{{ __('reklama1') }}</h4>
					<p>{{ __('footer') }}</p>
					<!-- Social Icons -->
					<ul class="social">
					<h4>{{ __('ong1') }}</h4>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
					</ul>
				</div>
				<div class="single-content">
					<h4>{{ __('ong2') }}</h4>
					<ul class="links">

						<li><a href="/">{{ __('home_menu') }}</a></li>
						<li><a href="/contact">{{ __('contact') }}</a></li>
					</ul>
				</div>
			</div>
			<!--/ Sidebar Popup -->
		</header>
		<!--/ End Header -->

        @yield('content')

		<!-- Footer -->
		<footer class="footer" style="background-image:url('img/map.png')">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Footer About -->
							<div class="single-widget footer-about widget">
								<div class="logo">
									<div class="img-logo">
										<a class="logo" href="/">
										<img src="{{ asset('front/img/logo_uz.png')}}" alt="#">
										</a>
									</div>
								</div>
								<div class="footer-widget-about-description">
									<p>© 2021 {{ __('reklama1') }}. {{ __('footer') }}</p>
								</div>
								<div class="social">
									<!-- Social Icons -->
									<ul class="social-icons">
										<li><a class="facebook" href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
										<li><a class="twitter" href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
										<li><a class="linkedin" href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
										<li><a class="pinterest" href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
										<li><a class="instagram" href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div>

							</div>
							<!--/ End Footer About -->
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Footer Links -->
							<div class="single-widget f-link widget">
								<h3 class="widget-title">ToshFarmI</h3>
								<ul>
									<li><a href="#">{{ __('institut') }}</a></li>
									<li><a href="#">{{ __('faoliyat') }}</a></li>
									<li><a href="#">{{ __('abuturentlar') }}</a></li>
									<li><a href="#">{{ __('talabalar') }}</a></li>
									<li><a href="#">{{ __('new') }}</a></li>
									<li><a href="#">{{ __('hujjatlar') }}</a></li>

								</ul>
							</div>
							<!--/ End Footer Links -->
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Footer News -->
							<div class="single-widget footer-news widget">
								<h3 class="widget-title">Blog Page</h3>
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 15, 2020</time></p>
										<h4 class="title"><a href="blog-sngle.html">We Provide you Best &amp; Creative Consulting Service</a></h4>
									</div>
								</div>
								<!--/ End Single News -->
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 10, 2020</time></p>
										<h4 class="title"><a href="blog-sngle.html">We Provide you Best &amp; Creative Consulting Service</a></h4>
									</div>
								</div>
								<!--/ End Single News -->
							</div>
							<!--/ End Footer News -->
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Footer Contact -->
							<div class="single-widget footer_contact widget">
								<h3 class="widget-title">{{ __('reklama3') }}</h3>
								<p>{{ __('footer') }}</p>
								<ul class="address-widget-list">
									<li class="footer-mobile-number"><i class="fa fa-phone"></i>(+998 71) 256-45-04</li>
									<li class="footer-mobile-number"><i class="fa fa-envelope"></i>info@pharmi.uz</li>
									<li class="footer-mobile-number"><i class="fa fa-map-marker"></i>{{ __('manzil') }}</li>
								</ul>
							</div>
							<!--/ End Footer Contact -->
						</div>
					</div>

				</div>
			</div>
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="copyright-content">
								<!-- Copyright Text -->
								<p>© 2021 {{ __('reklama1') }} <a href="#"> pharmi.uz</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>

		<!-- Jquery JS -->
		<script src="{{ asset('front/js/jquery.min.js') }}"></script>
		<script src="{{ asset('front/js/jquery-migrate-3.0.0.js') }}"></script>
		<!-- Popper JS -->
		<script src="{{ asset('front/js/popper.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
		<!-- Modernizr JS -->
		<script src="{{ asset('front/js/modernizr.min.js') }}"></script>
		<!-- ScrollUp JS -->
		<script src="{{ asset('front/js/scrollup.js') }}"></script>
		<!-- FacnyBox JS -->
		<script src="{{ asset('front/js/jquery-fancybox.min.js') }}"></script>
		<!-- Cube Portfolio JS -->
		<script src="{{ asset('front/js/cubeportfolio.min.js') }}"></script>
		<!-- Slick Nav JS -->
		<script src="{{ asset('front/js/slicknav.min.js') }}"></script>
		<!-- Slick Nav JS -->
		<script src="{{ asset('front/js/slicknav.min.js') }}"></script>
		<!-- Slick Slider JS -->
		<script src="{{ asset('front/js/owl-carousel.min.js') }}"></script>
		<!-- Easing JS -->
		<script src="{{ asset('front/js/easing.js') }}"></script>
		<!-- Magnipic Popup JS -->
		<script src="{{ asset('front/js/magnific-popup.min.js') }}"></script>
		<!-- Active JS -->
		<script src="{{ asset('front/js/active.js') }}"></script>
	</body>
</html>
