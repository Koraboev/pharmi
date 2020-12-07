@extends('Layouts.main')

@section('stylesheets')

@endsection

@section('content')

		<!-- Hero Slider -->
		<section class="hero-slider style1">
			<div class="home-slider">
				<!-- Single Slider -->
				<div class="single-slider" style="background-image:url({{ asset('front/img/slider1.jpg')}})">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-12">
								<div class="welcome-text">
									<div class="hero-text">
										<h4>{{ __('reklama1') }}</h4>
										<h1>{{ __('slider2') }}</h1>
										<div class="p-text">
											<p style="color:green">{{ __('slider3') }}</p>
										</div>
										<div class="button">
											<a href="/contact" class="bizwheel-btn theme-1 effect">{{ __('reklama3') }}</a>
											<a href="portfolio.html" class="bizwheel-btn theme-2 effect">{{ __('davomini_oqing') }}</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<div class="single-slider" style="background-image:url({{ asset('front/img/slider2.jpg')}})">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-12">
								<div class="welcome-text">
									<div class="hero-text">
										<h4>{{ __('reklama1') }}</h4>
										<h1>Build Your WorldClass Brand with Bizwheel</h1>
										<div class="p-text">
											<p style="color:green">Nunc tincidunt venenatis elit. Etiam venenatis quam vel maximus bibendum Pellentesque elementum dapibus diam tristique</p>
										</div>
										<div class="button">
										    <a href="contact.html" class="bizwheel-btn theme-1 effect">{{ __('reklama3') }}</a>
											<a href="portfolio.html" class="bizwheel-btn theme-2 effect">{{ __('davomini_oqing') }}</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<div class="single-slider" style="background-image:url({{ asset('front/img/slider3.jpg')}})">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-12">
								<div class="welcome-text">
									<div class="hero-text">
										<h4>{{ __('reklama1') }}</h4>
										<h1>Best Way to Represent your Next Business </h1>
										<div class="p-text">
											<p style="color:green">Nunc tincidunt venenatis elit. Etiam venenatis quam vel maximus bibendum Pellentesque elementum dapibus diam tristique</p>
										</div>
										<div class="button">
									  		<a href="contact.html" class="bizwheel-btn theme-1 effect">{{ __('reklama3') }}</a>
											<a href="portfolio.html" class="bizwheel-btn theme-2 effect">{{ __('davomini_oqing') }}</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
			</div>
		</section>
		<!--/ End Hero Slider -->

		<!-- Features Area -->
		<section class="features-area section-bg">
			<div class="container">
				<div class="row">

					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4><a href="{{ route('anjir', [app()->getLocale(), 'ds']) }}">{{ __('Farmatsiya1') }}  </a></h4>
							<p>{{ __('Farmatsiya2') }}</p>
							<div class="button">
								<a href="" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>
								{{ __('davomini_oqing') }}</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>

					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4><a href="#">{{ __('sanoat1') }}</a></h4>
							<p>{{ __('sanoat2') }}</p>
							<div class="button">
								<a href="#" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>{{ __('davomini_oqing') }}</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4><a href="#">{{ __('malaka1') }}</a></h4>
							<p>{{ __('malaka2') }}</p>
							<div class="button">
								<a href="#" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>{{ __('davomini_oqing') }}</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4><a href="#">{{ __('Magistrantura1') }}</a></h4>
							<p>{{ __('Magistrantura2') }}</p>
							<div class="button">
								<a href="#" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>{{ __('davomini_oqing') }}</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>
					@foreach($behi as $info)
					<?php
						$st = "tuzilma.index";
					 ?>
					@if($id == "uz")
					<?php $name = $info->uzname; $post = $info->uzpost; ?>
					 @elseif($id == "ru")
					 <?php $name = $info->runame; $post = $info->rupost; ?>
					 @elseif($id == "en")
					 <?php $name = $info->enname; $post = $info->enpost; ?>
					 @endif
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><i class="fa fa-podcast"></i></div>
							<h4><a href="{{ route('tuzilma', [app()->getLocale(), $info->blogId]) }}">{{ $name }} </a></h4>
							<p>{{ $post }}</p>
							<div class="button">
								<a href="" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>
								{{ __('davomini_oqing') }}</a>
							</div>
						</div>
						<!--/ End Single Feature -->
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<!--/ End Features Area -->

		<!-- Call To Action -->
		<section class="call-action overlay" style="background-image:url({{ asset('front/img/reklama2.jpg')}})">
			<div class="container">

				<div class="row">
					<div class="col-lg-9 col-12">
						<div class="call-inner">
							<h2>{{ __('reklama1') }}</h2>
							<p> {{ __('reklama2') }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-12">
						<div class="button">
							<a href="/contact" class="bizwheel-btn">{{ __('reklama3') }}</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->

		<!-- Services -->
		<section class="services section-bg section-space">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title style2 text-center">
							<div class="section-top">
								<h1><span>Creative</span><b>{{ __('nteraktiv1') }}</b></h1><h4>{{ __('nteraktiv2') }}.</h4>
							</div>
							<div class="section-bottom">
								<div class="text-style-two">
									<p>{{ __('nteraktiv3') }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-3 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="https://via.placeholder.com/555x410" alt="#">
								<div class="icon-bg"><i class="fa fa-handshake-o"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-business.html">Business Strategy</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-business.html"><i class="fa fa-arrow-circle-o-right"></i>{{ __('davomini_oqing') }}</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="https://via.placeholder.com/555x410" alt="#">
								<div class="icon-bg"><i class="fa fa-html5"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-develop.html">Web Development</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-develop.html"><i class="fa fa-arrow-circle-o-right"></i>{{ __('davomini_oqing') }}</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="https://via.placeholder.com/555x410" alt="#">
								<div class="icon-bg"><i class="fa fa-cube"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-market.html">Market Research</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-market.html"><i class="fa fa-arrow-circle-o-right"></i>{{ __('davomini_oqing') }}</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
					<div class="col-lg-3 col-md-3 col-12">
						<!-- Single Service -->
						<div class="single-service">
							<div class="service-head">
								<img src="https://via.placeholder.com/555x410" alt="#">
								<div class="icon-bg"><i class="fa fa-cube"></i></div>
							</div>
							<div class="service-content">
								<h4><a href="service-market.html">Market Research</a></h4>
								<p>Cras venenatis, purus sit amet tempus mattis, justo nisi facilisis metus, in tempus ipsum ipsum eu ipsum. Class aptent taciti</p>
								<a class="btn" href="service-market.html"><i class="fa fa-arrow-circle-o-right"></i>{{ __('davomini_oqing') }}</a>
							</div>
						</div>
						<!--/ End Single Service -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Services -->

		<!-- Portfolio -->
		<section class="portfolio section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
						<div class="section-title default text-center">
							<div class="section-top">
								<h1><span>Project</span><b>{{ __('reklama1') }}</b></h1>
							</div>
							<div class="section-bottom">
								<div class="text">
									<p>{{ __('reklama2') }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="portfolio-menu">
							<!-- Portfolio Nav -->
							<ul id="portfolio-nav" class="portfolio-nav tr-list list-inline cbp-l-filters-work">

								<li data-filter="*" class="cbp-filter-item active">{{ __('ins_yangiliklari') }}</li>
								<li data-filter=".animation" class="cbp-filter-item">{{ __('xori_yangiliklari') }}</li>
								<li data-filter=".branding" class="cbp-filter-item">{{ __('barcha_elonlar') }}</li>
								<li data-filter=".business" class="cbp-filter-item">{{ __('tadbirlar') }}</li>
								<li data-filter=".consulting" class="cbp-filter-item">{{ __('ilm_seminarlar') }}</li>


							</ul>
							<!--/ End Portfolio Nav -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="portfolio-main">
							<div id="portfolio-item" class="portfolio-item-active">
								<div class="cbp-item business animation">
									<!-- Single Portfolio -->
									<div class="single-portfolio">
										<div class="portfolio-head overlay">
											<img src="https://via.placeholder.com/600x415" alt="#">
											<a class="more" href="portfolio-single.html"><i class="fa fa-long-arrow-right"></i></a>
										</div>
										<div class="portfolio-content">
											<h4><a href="portfolio-single.html">Creative Marketing</a></h4>
											<p>Business, Aniamtion</p>
										</div>
									</div>
									<!--/ End Single Portfolio -->
								</div>
								<div class="cbp-item seo consulting">
									<!-- Single Portfolio -->
									<div class="single-portfolio">
										<div class="portfolio-head overlay">
											<img src="https://via.placeholder.com/600x415" alt="#">
											<a class="more" href="portfolio-single.html"><i class="fa fa-long-arrow-right"></i></a>
										</div>
										<div class="portfolio-content">
											<h4><a href="portfolio-single.html">Creative Marketing</a></h4>
											<p>Seo, Consulting</p>
										</div>
									</div>
									<!--/ End Single Portfolio -->
								</div>
								<div class="cbp-item marketing seo">
									<!-- Single Portfolio -->
									<div class="single-portfolio">
										<div class="portfolio-head overlay">
											<img src="https://via.placeholder.com/600x415" alt="#">
											<a class="more" href="portfolio-single.html"><i class="fa fa-long-arrow-right"></i></a>
										</div>
										<div class="portfolio-content">
											<h4><a href="portfolio-single.html">Creative Marketing</a></h4>
											<p>Marketing, SEO</p>
										</div>
									</div>
									<!--/ End Single Portfolio -->
								</div>
								<div class="cbp-item animation branding">
									<!-- Single Portfolio -->
									<div class="single-portfolio">
										<div class="portfolio-head overlay">
											<img src="https://via.placeholder.com/600x415" alt="#">
											<a class="more" href="portfolio-single.html"><i class="fa fa-long-arrow-right"></i></a>
										</div>
										<div class="portfolio-content">
											<h4><a href="portfolio-single.html">Creative Marketing</a></h4>
											<p>Animation, Branding</p>
										</div>
									</div>
									<!--/ End Single Portfolio -->
								</div>
								<div class="cbp-item branding consulting">
									<!-- Single Portfolio -->
									<div class="single-portfolio">
										<div class="portfolio-head overlay">
											<img src="https://via.placeholder.com/600x415" alt="#">
											<a class="more" href="portfolio-single.html"><i class="fa fa-long-arrow-right"></i></a>
										</div>
										<div class="portfolio-content">
											<h4><a href="portfolio-single.html">Creative Marketing</a></h4>
											<p>Branding, Consulting</p>
										</div>
									</div>
									<!--/ End Single Portfolio -->
								</div>
								<div class="cbp-item business marketing">
									<!-- Single Portfolio -->
									<div class="single-portfolio">
										<div class="portfolio-head overlay">
											<img src="https://via.placeholder.com/600x415" alt="#">
											<a class="more" href="portfolio-single.html"><i class="fa fa-long-arrow-right"></i></a>
										</div>
										<div class="portfolio-content">
											<h4><a href="portfolio-single.html">Creative Marketing</a></h4>
											<p>Business</p>
										</div>
									</div>
									<!--/ End Single Portfolio -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Portfolio -->

		<!-- Testimonials -->
		<section class="testimonials section-space" style="background-image:url({{ asset('front/img/slider2.jpg')}})">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-9 col-12">
						<div class="section-title default text-left">
							<div class="section-top">
								<h1><b>Our Satisfied Clients</b></h1>
							</div>
							<div class="section-bottom">
								<div class="text"><p>some of our great clients and their review</p></div>
							</div>
						</div>
						<div class="testimonial-inner">
							<div class="testimonial-slider">
								<!-- Single Testimonial -->
								<div class="single-slider">
									<ul class="star-list">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the <strong>industry's standard</strong> dummy text ever sinsimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
									<!-- Client Info -->
									<div class="t-info">
										<div class="t-left">
											<div class="client-head"><img src="https://via.placeholder.com/70x70" alt="#"></div>
											<h2>Julias Dien <span>CEO / Creative IT</span></h2>
										</div>
										<div class="t-right">
											<div class="quote"><i class="fa fa-quote-right"></i></div>
										</div>
									</div>
								</div>
								<!-- / End Single Testimonial -->
								<!-- Single Testimonial -->
								<div class="single-slider">
									<ul class="star-list">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the <strong>industry's standard</strong> dummy text ever sinsimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
									<!-- Client Info -->
									<div class="t-info">
										<div class="t-left">
											<div class="client-head"><img src="https://via.placeholder.com/70x70" alt="#"></div>
											<h2>Buman Panama <span>Founder, Jolace Group</span></h2>
										</div>
										<div class="t-right">
											<div class="quote"><i class="fa fa-quote-right"></i></div>
										</div>
									</div>
								</div>
								<!-- / End Single Testimonial -->
								<!-- Single Testimonial -->
								<div class="single-slider">
									<ul class="star-list">
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
										<li><i class="fa fa-star"></i></li>
									</ul>
									<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the <strong>industry's standard</strong> dummy text ever sinsimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard</p>
									<!-- Client Info -->
									<div class="t-info">
										<div class="t-left">
											<div class="client-head"><img src="https://via.placeholder.com/70x70" alt="#"></div>
											<h2>Donald Bonam <span>Developer, Soft IT</span></h2>
										</div>
										<div class="t-right">
											<div class="quote"><i class="fa fa-quote-right"></i></div>
										</div>
									</div>
								</div>
								<!-- / End Single Testimonial -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Testimonials -->

		<!-- Latest Blog -->
		<section class="latest-blog section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
						<div class="section-title default text-center">
							<div class="section-top">
								<h1><span>Latest</span><b> Published</b></h1>
							</div>
							<div class="section-bottom">
								<div class="text">
									<p>Lorem Ipsum Dolor Sit Amet, Conse Ctetur Adipiscing Elit, Sed Do Eiusmod Tempor Ares Incididunt Utlabore. Dolore Magna Ones Baliqua</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="blog-latest blog-latest-slider">
							<div class="single-slider">
								<!-- Single Blog -->
								<div class="single-news ">
									<div class="news-head overlay">
										<span class="news-img" style="background-image:url('https://via.placeholder.com/700x530')"></span>
										<a href="#" class="bizwheel-btn theme-2">Read more</a>
									</div>
									<div class="news-body">
										<div class="news-content">
											<h3 class="news-title"><a href="blog-single.html">We Provide you Best &amp; Creative Consulting Service</a></h3>
											<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris</p></div>
											<ul class="news-meta">
												<li class="date"><i class="fa fa-calendar"></i>April 2020</li>
												<li class="view"><i class="fa fa-comments"></i>0</li>
											</ul>
										</div>
									</div>
								</div>
								<!--/ End Single Blog -->
							</div>
							<div class="single-slider">
								<!-- Single Blog -->
								<div class="single-news ">
									<div class="news-head overlay">
										<span class="news-img" style="background-image:url('https://via.placeholder.com/700x530')"></span>
										<a href="#" class="bizwheel-btn theme-2">Read more</a>
									</div>
									<div class="news-body">
										<div class="news-content">
											<h3 class="news-title"><a href="blog-single.html">We Provide you Best &amp; Creative Consulting Service</a></h3>
											<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris</p></div>
											<ul class="news-meta">
												<li class="date"><i class="fa fa-calendar"></i>April 2020</li>
												<li class="view"><i class="fa fa-comments"></i>0</li>
											</ul>
										</div>
									</div>
								</div>
								<!--/ End Single Blog -->
							</div>
							<div class="single-slider">
								<!-- Single Blog -->
								<div class="single-news ">
									<div class="news-head overlay">
										<span class="news-img" style="background-image:url('https://via.placeholder.com/700x530')"></span>
										<a href="#" class="bizwheel-btn theme-2">Read more</a>
									</div>
									<div class="news-body">
										<div class="news-content">
											<h3 class="news-title"><a href="blog-single.html">We Provide you Best &amp; Creative Consulting Service</a></h3>
											<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris</p></div>
											<ul class="news-meta">
												<li class="date"><i class="fa fa-calendar"></i>April 2020</li>
												<li class="view"><i class="fa fa-comments"></i>0</li>
											</ul>
										</div>
									</div>
								</div>
								<!--/ End Single Blog -->
							</div>
							<div class="single-slider">
								<!-- Single Blog -->
								<div class="single-news ">
									<div class="news-head overlay">
										<span class="news-img" style="background-image:url('https://via.placeholder.com/700x530')"></span>
										<a href="#" class="bizwheel-btn theme-2">Read more</a>
									</div>
									<div class="news-body">
										<div class="news-content">
											<h3 class="news-title"><a href="blog-single.html">We Provide you Best &amp; Creative Consulting Service</a></h3>
											<div class="news-text"><p>Sed tempus pulvinar augue ut euismod. Donec a nisi volutpat, dignissim mauris eget. Quisque vitae nunc sit amet eros pellentesque tempus at sit amet sem. Maecenas feugiat mauris</p></div>
											<ul class="news-meta">
												<li class="date"><i class="fa fa-calendar"></i>April 2020</li>
												<li class="view"><i class="fa fa-comments"></i>0</li>
											</ul>
										</div>
									</div>
								</div>
								<!--/ End Single Blog -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Latest Blog -->

		<!-- Client Area -->
		<div class="clients section-bg">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="partner-slider">
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="http://academy.uz/" target="_blank"><img  src="{{ asset('front/img/hamkorlar/n1.jpg')}}" alt="#"></a>
									<p> {{ __('hamkorla1') }}</p>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="http://ssv.uz/uz/" target="_blank"><img src="{{ asset('front/img/hamkorlar/n2.jpg')}}" alt="#"></a>
									<p>{{ __('hamkorla2') }} </p>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="http://doridarmon.uz/" target="_blank"><img src="{{ asset('front/img/hamkorlar/n3.jpg')}}" alt="#"></a>
									<p> {{ __('hamkorla3') }}</p>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="http://ziyonet.uz/" target="_blank"><img src="{{ asset('front/img/hamkorlar/n4.jpg')}}" alt="#"></a>
									<p> {{ __('hamkorla4') }}</p>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="https://www.uzpharm-control.uz/" target="_blank"><img src="{{ asset('front/img/hamkorlar/n5.jpg')}}" alt="#"></a>
									<p> {{ __('hamkorla5') }}</p>
								</div>
							</div>
							<!--/ End Single client -->
							<!-- Single client -->
							<div class="single-slider">
								<div class="single-client">
									<a href="http://www.edu.uz/uz" target="_blank"><img src="{{ asset('front/img/hamkorlar/n6.jpg')}}" alt="#"></a>
									<p> {{ __('hamkorla6') }}</p>
								</div>
							</div>
							<!--/ End Single client -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Client Area -->

@endsection
