@extends('Layouts.main')
@section('content')
<div class="breadcrumbs overlay" style="background-image:url({{asset('img/farma.jpg')}})">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.html">{{$id}}</a></li>
									<li><a href="blog-grid.html">{{$olam}}</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>Farmatsiya fakulteti</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->

		<section class="contact-us section-space" style="padding-bottom: 0">
			<div class="container" style="padding-bottom: 0; margin-bottom: 50px; border-bottom: 3px solid #179e66">
				<div class="row">
					@foreach($dekanInfo as $info)
					@if($id == "uz")
					<?php $post = $info->uzpost; $hafta = $info->uzhafta; $idu = $info->uzidu; ?>
					@elseif($id == "en")
					<?php $post = $info->enpost; $hafta = $info->enhafta; $idu = $info->enidu; ?>
					@elseif($id == "ru")
					<?php $post = $info->rupost; $hafta = $info->ruhafta; $idu = $info->ruidu; ?>
					@endif
					<div class="col-lg-4 col-md-7 col-12">
						<!-- Contact Form -->
						<div class="cbp-item business animation">
									<!-- Single Portfolio -->
									<div class="single-portfolio">
										<div class="portfolio-head overlay">
											<img src="{{asset('img/ulugbek.jpg')}}" alt="#" width="200px" height="100px">
										</div>
										<div class="portfolio-content">
											<h4><a>{{__('dekan')}}</a></h4>
											<p>{{$info->fio}}</p>
										</div>
									</div>
									<!--/ End Single Portfolio -->
						</div>
						<!--/ End contact Form -->
					</div>
					<div class="col-lg-8 col-md-5 col-12">
						<div class="contact-box-main m-top-30">
								<div class="contact-title">
									<h2>{{__('havola')}}</h2>
									<p>{{$post}}</p>
								</div>
							<!-- Single Contact -->
							<div class="row">
							<div class="col-lg-6 col-md-12 col-12">
								<div class="single-contact-box" style="margin-bottom: 20px">
									<div class="c-icon"><i class="fa fa-envelope-o"></i></div>
									<div class="c-text">
										<h4>{{__('pochta')}}</h4>
										<p>{{$dekanInfo[0]->pochta}}</p>
									</div>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="col-lg-6 col-md-12 col-12">
								<div class="single-contact-box" style="margin-bottom: 20px">
									<div class="c-icon"><i class="fa fa-phone"></i></div>
									<div class="c-text">
										<h4>{{__('nomer')}}</h4>
										<p>Tel.: {{$dekanInfo[0]->nomer}}</p>
									</div>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="col-lg-6 col-md-12 col-12">
								<div class="single-contact-box" style="margin-bottom: 20px">
									<div class="c-icon"><i class="fa fa-graduation-cap"></i></div>
									<div class="c-text">
										<h4>{{__('idu')}}</h4>
										<p>{{$idu}}</p>
									</div>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="col-lg-6 col-md-12 col-12">
								<div class="single-contact-box">
									<div class="c-icon"><i class="fa fa-clock-o"></i></div>
									<div class="c-text">
										<h4>{{__('vaqt')}}</h4>
										<p>{{$hafta}} <br> {{$dekanInfo[0]->vaqt}}</p>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
			<!--Fakultet dekani tugadi-->
			<div class="container" style="padding: 0">
				<div class="row">
					@foreach($zamInfo as $info)
					@if($id == "uz")
					<?php $hafta = $info->uzhafta; ?>
					@elseif($id == "en")
					<?php $hafta = $info->enhafta; ?>
					@elseif($id == "ru")
					<?php $hafta = $info->ruhafta; ?>
					@endif
					<div class="col-lg-6 col-md-6 col-12">
						<div class="container" style="border-bottom: 2px solid #F3A712; margin-bottom: 20px;">
							<div class="row">

									<div class="col-lg-5 col-md-5 col-12">
										<!-- Contact Form -->
										<div class="cbp-item business animation">
													<!-- Single Portfolio -->
													<div class="single-portfolio">
														<div class="portfolio-head overlay">
															<img src="{{$info->fio}}" alt="#" width="200px" height="100px">
														</div>

													</div>
													<!--/ End Single Portfolio -->
										</div>
										<!--/ End contact Form -->
									</div>
									<div class="col-lg-7 col-md-7 col-12">
										<div class="contact-box-main m-top-10 m-left-10">
											<!-- Single Contact -->
											<div class="row">
												<div class="portfolio-content">
												<h4><a style="font-size: 18px">{{__('zamdekan')}}</a></h4>
												<p>{{$info->fio}}</p>
												</div>
											<ul class="address-widget-list">
												<li class="footer-mobile-number"><i class="fa fa-check" style="margin-right: 5px;"></i>{{$info->nomer}}</li>
												<li class="footer-mobile-number"><i class="fa fa-check"  style="margin-right: 5px;"></i>{{$info->pochta}}</li>
												<li class="footer-mobile-number"><i class="fa fa-check"  style="margin-right: 5px;"></i>{{$hafta}} {{$info->vaqt}}</li>
											</ul>
											</div>
										</div>
									</div>

							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
		<section class="news-area archive blog-single section-padding" style="padding-bottom: 0">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
						<div class="row">
							<div class="col-12">
								<div class="blog-single-main">

									<div class="blog-detail">

										<h6 class="blog-title">{{__('fakultet_tarixi')}}</h6>
										<p>Toshkеnt Farmatsеvtika instituti 1937-yilda Toshkеnt Tibbiyot instituti bazasida tashkil etildi. Shu yili institutga 50 nafar talaba oqishga qabul qilindi. Talabalarga Toshkеnt tibbiyot instituti kafеdralarining profеssor-oqituvchilari dars bеrdilar. 1945-yilgacha fakultеtda alohida dеkanat faoliyat korsatmagan. 1945-yildan boshlab mazkur fakultеtga I.I. Ivеnskiy rahbarlik qila boshladi.

										Kеyinchalik fakultеt dеkani sifatida Tolagan Abrolov va Alеksandra Nikolayevna Tatarеnko faoliyat ko’rsatgan. Keyingi yillarda quyidagi professor-o’qituvchilar fakultet dekani lavozimida ishlaganlar:</p>
										<div class="row blog-space">

											<div class="col-lg-12">
												<h5>{{__('dekanlar')}}</h5>
												<ul>
													<li>1953-1959 yillar – farmatsevtika fanlari nomzodi H.X Xolmatov;</li>
													<li>1959-1976 yillar – farmatsevtika fanlari nomzodi, dotsent A.Yu.Ibodov;</li>
													<li>1976-1978 yillar – farmatsevtika fanlari nomzodi E.R.Toshmuhamedov;</li>
													<li>1978-1981 yillar – farmatsevtika fanlari nomzodi, dotsent A.Yu.Ibodov;</li>
													<li>1981-1989 yillar – dotsent O’.A.Axmedov;</li>
													<li>1989-1990 yillar – dotsent A.H.Halimov;</li>
													<li>1990-1991 yillar – kimyo fanlari doktori X.R.Rahmatullayev;</li>
													<li>1991-1995 yillar – dotsent H.K.Jalilov;</li>
													<li>1995-1999 yillar – kimyo fanlari nomzodi N.Q.Olimov;</li>
													<li>1999-1999 yillar – farmatsevtika fanlari doktori H.M.Komilov;</li>
													<li>1999-2000 yillar – farmatsevtika fanlari doktori O’.A.Axmedov;</li>
													<li>2000-2001 yillar – kimyo fanlari doktori, professor O.A.Shobilolov;</li>
													<li>2001-2003 yillar – farmatsevtika fanlari nomzodi Z.A.Yuldashev;</li>
													<li>2003-2005 yillar – farmatsiya fanlari nomzodi, dotsent A.H.Halimov;</li>
													<li>2005-2007 yillar – dotsent Z.Osmonov;</li>
													<li>2007-2012 yillar – farmatsevtika fanlari doktori Z.A.Yuldashev;</li>
													<li>2012-2015 yillar – farmatsevtika fanlari nomzodi A.Q.G’aniyev;</li>
													<li>2015-2019 yilla  – qishloq xo’jalik fanlari nomzodi A.A.Nurmuxamedov.</li>
												</ul>
											</div>
										</div>
										<p>Farmatsiya fakulteti institutning nufuzli fakulteti bo’lib, uning tarkibida sakkizta kafedra, Axborot texnologiyalari markazi, Markaziy ilmiy tekshirish laboratoriyasi, video-audio markazi va axborot-resurs markazi faoliyat ko’rsatmoqda. Bu yil fakultetda 1200 dan ortiq talaba va 50 ta magistratura talabalari tahsil olmoqda. Talabalarga farmatsevtika sohasining yetuk olimlari fan doktori-professorlar, fan nomzodlari-dotsentlar va yuqori malakali katta o’qituvchilar dars berishmoqda.
										<br><br>
										Professor-o’qituvchilar olib borgan izlanishlarning natijalari nomzodlik, doktorlik dissertatsiyalarida, xalqaro anjumanlarda va Respublikamizda chop etiladigan qator jurnallarda, jumladan, “Farmatsevtika jurnali”da muntazam chop etib kelinadi. Ilmiy-pedagogik xodimlar muntazam ravishda o’z malakalarini oshirib boradilar. Ular ta’lim berishning ilg’or pedagogik usullarini doimo o’quv jarayoniga tatbiq etishlari natijasida fakultetda ta’lim olayotgan talabalarning bilim saviyasi sezilarli darajada ijobiy tomonga o’zgarib bormoqda.
										<br><br>
										Farmatsiya fakultetida fakultet Ilmiy kengashi faoliyat ko’rsatadi. Kengashga kafedra mudirlari, institut jamoat tashkilotlari rahbarlari, yetakchi mutaxassislar jalb etilgan. Kengash faoliyati fakultet oldida turgan dolzarb muammolarni yechishda muhim o’rin tutadi. Farmatsiya fakultetida tahsil olgan talabalar farmatsiya sohasining turli jabhalarida va kimyo tahlil laboratoriyalarida mehnat qiladilar. Talabalarga bilim berish hozirgi zamon ilg’or pedagogik texnologiyalari asosida olib borilmoqda.
										<br><br>
										O’qitiladigan barcha fanlar bo’yicha axborot-resurs markazida yetarli miqdorda ma’ruza matnlari, o’quv-uslubiy qo’llanmalar mavjud. Fakultet kafedralarida talabalarning tajribalar o’tkazishlari uchun barcha shart-sharoitlar yaratilgan. Shu jumladan, iqtidorli talabalar bilan alohida dastur asosida ish olib borilmoqda. Talabalarimiz davlatimiz tomonidan ta’sis etilgan turli Davlat stipendiyalariga sazovor bo’lmoqdalar.
										<br><br>
										Talabalarimiz olib borgan ilmiy izlanishlarining natijalari bilan Xalqaro anjumanlarda ishtirok etib yuqori o’rinlarni egallab kelishmoqda. Ular o’quv, ishlab chiqarish amaliyotlarini shahar korxonalarida va Toshkent viloyati, Bo’stonliq tumanida joylashgan “Dorishunos” o’quv amaliyot bazasida o’tkazadilar.</p>

										<h6 style="color: #179e66">{{__('fakultet_yonalish1')}} n {{__('fakultet_yonalish2')}}</h6>
										<i class="fa  fa-arrow-circle-o-right" style="color: #179e66; margin-right: 5px;"></i><strong style="margin: 3px 0;">5510500-Farmatsiya turlari bo’yicha:</strong>
										<ul style="margin: 3px 0 12px 15px;">
											<li>Dorixona ishi;</li>
											<li>Klinik farmatsiya;</li>
											<li>Farmatsevtik tahlil.</li>
										</ul>
										<i class="fa  fa-arrow-circle-o-right" style="color: #179e66; margin-right: 5px;"></i><strong>5111000- Kasb ta’lim (5110500-farmatsiya).</strong>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>
		<!-- Blog Layout -->
		<section class="blog-layout news-default section-space" style="padding-top: 50px;">
			<div class="container" style="border-top: 3px solid #179e66; padding-top: 25px;">
				<h4 class="widget-title" style="margin-bottom: 20px">{{__('fakultet_kafedra')}}</h4>
				<div class="row ">

					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->

							<div class="single-f-news margin-30">
									<div class="post-thumb" style=""><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 10, 2020</time></p>
										<h4 class="title"><a href="blog-sngle.html">
										Farmatsevtik kimyo</a></h4>
									</div>
								</div>

						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->

							<div class="single-f-news margin-30">
									<div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 10, 2020</time></p>
										<h4 class="title"><a href="blog-sngle.html">Analitik kimyo</a></h4>
									</div>
								</div>

						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->

							<div class="single-f-news margin-30">
									<div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 10, 2020</time></p>
										<h4 class="title"><a href="blog-sngle.html">
										Toksikologik kimyo</a></h4>
									</div>
								</div>

						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->

							<div class="single-f-news margin-30">
									<div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 10, 2020</time></p>
										<h4 class="title"><a href="blog-sngle.html">Farmakognoziya</a></h4>
									</div>
								</div>

						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->

							<div class="single-f-news margin-30">
									<div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 10, 2020</time></p>
										<h4 class="title"><a href="blog-sngle.html">Dori turlari texnologiyasi</a></h4>
									</div>
								</div>

						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->

							<div class="single-f-news margin-30">
									<div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 10, 2020</time></p>
										<h4 class="title"><a href="blog-sngle.html">Farmatsevtika ishini tashkil qilish</a></h4>
									</div>
								</div>

						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Blog -->

							<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 10, 2020</time></p>
										<h4 class="title"><a href="blog-sngle.html">Noorganik, fizik va kolloid kimyo</a></h4>
									</div>
								</div>

						<!--/ End Single Blog -->
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<!-- Single Blog -->

							<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="https://via.placeholder.com/70x70" alt="#" style=""></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i>April 10, 2020</time></p>
										<h4 class="title"><a href="blog-sngle.html">Farmakologiya va klinik farmatsiya</a></h4>
									</div>
								</div>

						<!--/ End Single Blog -->
					</div>
				</div>
			</div>
		</section>
@endsection
