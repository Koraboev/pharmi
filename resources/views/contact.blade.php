@extends('Layouts.main')

@section('stylesheets')
@endsection

@section('content')
  		<!-- Breadcrumb -->

		<!--/ End Breadcrumb -->

		<!-- Contact Us -->
		<section class="contact-us section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-12">
						<!-- Contact Form -->
						<div class="contact-form-area m-top-30">
							<h4>{{ __('contact1') }}</h4>
							<form class="form" method="post" action="mail/mail.php">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input type="text" name="first_name" placeholder="First Name">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input type="text" name="last_name" placeholder="Last Name">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-envelope"></i></div>
											<input type="email" name="email" placeholder="Type Subjects">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-tag"></i></div>
											<input type="text" name="subject" placeholder="Type Subjects">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group textarea">
											<div class="icon"><i class="fa fa-pencil"></i></div>
											<textarea type="textarea" name="message" rows="5"></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group button">
											<button type="submit" class="bizwheel-btn theme-2">{{ __('contact2') }}</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<!--/ End contact Form -->
					</div>
					<div class="col-lg-5 col-md-5 col-12">
						<div class="contact-box-main m-top-30">
							<div class="contact-title">
								<h2>{{ __('reklama1') }}</h2>
								<p>{{ __('contact3') }}.</p>
							</div>
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-clock-o"></i></div>
								<div class="c-text">
                                <h4>Bizning Manzil:</h4>

									<p>100015, Toshkent sh, Oybek k, 45</p>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-phone"></i></div>
								<div class="c-text">
                  <h4>Bog'lanish</h4>



									<p>Tel: (+998 71) 256-37-38<br>Faks: (+998 71) 256-45-04</p>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-envelope-o"></i></div>
								<div class="c-text">
									<h4>Bizning Email</h4>
									<p>info@pharmi.uz</p>
								</div>
							</div>
							<!--/ End Single Contact -->
							<div class="button">
								<a href="#" class="bizwheel-btn theme-1">{{ __('contact4') }}<i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Contact Us -->

@endsection
