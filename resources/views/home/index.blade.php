@extends('layouts.app')

@section('title', '- Home')

@push('custom_css')
@endpush

@section('content')


<main class="main">
		
		<!-- Start Slider
		============================================= -->
		<div class="hero-area">
			<div class="swiper hero-sldr">
				<div class="swiper-wrapper">
					<div class="hero-single swiper-slide bg-overlay hero-bg" style="background-image: url(assets/img/header/hdr-1.jpg)">
						<div class="container">
							<div class="row">
								<div class="col-xl-6">
									<div class="hero-content">
										<h2 class="hero-title">
											Call For Emrgency Doctors At Home
										</h2>
										<p>
											Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae  vel illum qui dolorem eum velit esse quam nihil consequatur 
										</p>
										<div class="hero-btn">
											<a href="contact.html" class="service-btn btn-white btn-animated">
												Contact Us
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="hero-single swiper-slide hero-overlay hero-bg" style="background-image: url(assets/img/header/hdr-2.jpg)">
						<div class="container">
							<div class="row">
								<div class="col-xl-6 offset-xl-3">
									<div class="hero-content text-center">
										<h2 class="hero-title">
											We care you, and your family at home
										</h2>
										<p class="p-0">
											Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae  vel illum qui dolorem eum velit esse quam nihil consequatur 
										</p>
										<div class="hero-btn">
											<a href="contact.html" class="service-btn btn-white btn-animated">
												Contact Us
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
		</div>
		<!-- End Slider -->

	<!-- Start About
		============================================= -->
		<div class="about-area de-padding bg">
			<div class="container">
				<div class="about-wpr">
					<div class="row g-5">
						<div class="col-xl-7">
							<div class="about-left">
								<div class="about-pics pos-rel">
									<div class="about-pic grid-2">
										<img src="assets/img/about/about-1.jpg" class="about-pic-1" alt="Image Not Found">
										<img src="assets/img/about/about-2.jpg" class="about-pic-2" alt="Image Not Found">
									</div>
									<img src="assets/img/about/about-3.jpg" class="about-pic-3" alt="Image Not Found">
									<img src="assets/img/shape/shape-1.png" class="about-pic-4" alt="Image Not Found">
								</div>
							</div>
						</div>
						<div class="col-xl-5">
							<div class="about-right pl-30">
								<span class="hero-sub-title">About Us</span>
								<h2 class="hero-title">
									Tackle The Challenge Of Delivering Health Care
								</h2>
								<p class="about-para">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem deserunt quod itaque, praesentium quos ratione molestiae deleniti tenetur consectetur id.
								</p>
								<ul class="about-list">
									<li>Consultations Wif Specialized Pediatricians</li>
									<li>A Wide Range Of Laboratory Studies</li>
									<li>Ultrasound Examination</li>
									<li>ECG, Echocardiography</li>
								</ul>
								<div class="about-opt grid-2">
									<div class="about-opt-box">
										<h5 class="heading-5 mb-0">Skilled Doctors</h5>
									</div>
									<div class="about-opt-box">
										<h5 class="heading-5 mb-0">Latest Equipment</h5>
									</div>
									<div class="about-opt-box">
										<h5 class="heading-5 mb-0">Positive Reviews</h5>
									</div>
									<div class="about-opt-box">
										<h5 class="heading-5 mb-0">Quality Services</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End About -->
		<!-- Start Service
		============================================= -->
		<div class="service-area de-padding bg-overlay  hero-bg" style="background-image: url(assets/img/service/service.jpg)">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 offset-xl-3">
						<div class="site-title wh text-center">
							<h2>Our Service</h2>
							<p class="mb-0">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, error! Quisquam voluptas molestias, praesentium voluptatum.
							</p>
						</div>
					</div>
				</div>
				<div class="service-wpr grid-3">
					<div class="service-box">
						<div class="service-icon">
							<i class="fa-solid fa-eye"></i>
						</div>
						<div class="service-desc">
							<h4 class="heading-4">
								eye care
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, odio quibusdam! Pariatur dicta quisquam, repellat
							</p>
							<a href="https://themekar.com/templatebucket/medo/sevice-single.html" class="btn-2">Read More</a>
						</div>
					</div>
					<div class="service-box">
						<div class="service-icon">
							<i class="fa-solid fa-tooth"></i>
						</div>
						<div class="service-desc">
							<h4 class="heading-4">
								Denal Care
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, odio quibusdam! Pariatur dicta quisquam, repellat
							</p>
							<a href="https://themekar.com/templatebucket/medo/sevice-single.html" class="btn-2">Read More</a>
						</div>
					</div>
					<div class="service-box">
						<div class="service-icon">
							<i class="fa-solid fa-bed"></i>
						</div>
						<div class="service-desc">
							<h4 class="heading-4">
								Kidney Operation
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, odio quibusdam! Pariatur dicta quisquam, repellat
							</p>
							<a href="https://themekar.com/templatebucket/medo/sevice-single.html" class="btn-2">Read More</a>
						</div>
					</div>
					<div class="service-box">
						<div class="service-icon">
							<i class="fa-sharp fa-solid fa-hand-holding-medical"></i>
						</div>
						<div class="service-desc">
							<h4 class="heading-4">
								Cardiology
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, odio quibusdam! Pariatur dicta quisquam, repellat
							</p>
							<a href="https://themekar.com/templatebucket/medo/sevice-single.html" class="btn-2">Read More</a>
						</div>
					</div>
					<div class="service-box">
						<div class="service-icon">
							<i class="fa-solid fa-brain"></i>
						</div>
						<div class="service-desc">
							<h4 class="heading-4">
								Neurology
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, odio quibusdam! Pariatur dicta quisquam, repellat
							</p>
							<a href="https://themekar.com/templatebucket/medo/sevice-single.html" class="btn-2">Read More</a>
						</div>
					</div>
					<div class="service-box">
						<div class="service-icon">
							<i class="fa-solid fa-bed-pulse"></i>
						</div>
						<div class="service-desc">
							<h4 class="heading-4">
								Major Operation
							</h4>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, odio quibusdam! Pariatur dicta quisquam, repellat
							</p>
							<a href="https://themekar.com/templatebucket/medo/sevice-single.html" class="btn-2">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Service -->
	<!-- Start Why Choose Us
		============================================= -->
		<div class="why-area de-padding">
			<div class="container">
				<div class="why-wpr grid-2">
					<div class="why-left">
						<div class="why-left-content">
							<div class="why-left-pic pos-rel text-center">
								<img src="assets/img/choose/choose.png" alt="thumb">
								<img src="assets/img/shape/shape-3.png" class="why-shape-1" alt="thumb">
								<img src="assets/img/shape/shape-2.png" class="why-shape-2" alt="thumb">
								<img src="assets/img/dot/17.png" class="why-shape-3" alt="thumb">
							</div>
						</div>
					</div>
					<div class="why-right">
						<div class="why-right-content">
							<h2 class="hero-title">
								Consultation with your Best Doctor Anytime
							</h2>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit maiores quidem labore libero deserunt, aspernatur!
							</p>
							<ul class="why-list">
								<li><i class="fa-solid fa-house-medical"></i>Served Directly By Experts</li>
								<li><i class="fa-sharp fa-solid fa-laptop-medical"></i>Easy online Service</li>
							</ul>
							<button type="submit" class="btn-submit">Make Appointment</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Why Choose Us -->
		<!-- Start medo
		============================================= -->
		<div class="medo-area de-padding pos-rel bg-black-3">
			<div class="medo-shape">	
				<img src="assets/img/shape/shape-4.png" class="medo-shape-1 up-move"  alt="thumb">
			</div>
			<div class="container">
				<div class="medo-wpr">
					<div class="medo-top">
						<div class="row g-5">
							<div class="col-xl-6">
								<div class="medo-left">
									<h2 class="hero-title wh mb-30">
										We Will Help You To  Grow your conviction
									</h2>
									<p class="medo-txt mb-50">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt molestias, ipsum aperiam! Obcaecati quae, harum.
									</p>
									<div class="counter-wpr counter-1 grid-3">
										<div class="fun-fact">
											<div class="fun-icon">
												<i class="fa-solid fa-truck-medical"></i>
											</div>
											<div class="fun-desc">
												<p class="timer" data-count="+" data-to="120" data-speed="3000"></p>
												<span class="medium">Best Doctor</span>
											</div>
										</div>
										<div class="fun-fact">
											<div class="fun-icon">
												<i class="fa-solid fa-hospital-user"></i>
											</div>
											<div class="fun-desc">
												<p class="timer" data-count="+" data-to="25" data-speed="3000"></p>
												<span class="medium">Surgery Room</span>
											</div>
										</div>
										<div class="fun-fact">
											<div class="fun-icon">
												<i class="fa-solid fa-bed-pulse"></i>
											</div>
											<div class="fun-desc">
												<p class="timer" data-count="+" data-to="2000" data-speed="3000"></p>
												<span class="medium">Patient Capacity</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6">
								<div class="medo-right pl-60">
									<img src="assets/img/medo/medo-2.jpg" alt="thumb">
								</div>
							</div>
						</div>
					</div>
					<div class="medo-bottom">
						<div class="row g-5">
							<div class="col-xl-8">
								<div class="medo-btm-left">
									<img src="assets/img/medo/medo-1.jpg" alt="thumb">
								</div>
							</div>
							<div class="col-xl-4">
								<div class="medo-btm-right">
									<div class="medo-btm-right-content pos-rel">
										<h2 class="heading-1 wh mb-50">
											Want To make an Appointment Easily?
										</h2>
										<div class="medo-link">
											<a href="contact.html" class="service-btn btn-white btn-animated">
												Get A Appointment
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End medo -->
		<!-- Start Quick Solution
		============================================= -->
		<div class="quick-area de-padding">
			<div class="container">
				<div class="quick-wpr pos-rel">
					<div class="quick-shape">
						<img src="assets/img/quick/doctor-1.png" class="quick-shape-1" alt="thumb">
					</div>
					<div class="quick-img pb-60 text-center">
						<img src="assets/img/quick/quick.jpg" alt="thumb">
					</div>
					<div class="quick-content">
						<h3 class="heading-3">
							Easy System or Next Day Appointment
						</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem esse autem modi voluptatibus rem!
						</p>
						<ul class="quick-list">
							<li><i class="icofont-brain"></i>Best Quality Appointment Services </li>
							<li><i class="icofont-medical-sign-alt"></i>Easy Online Booking</li>
						</ul>
						<a href="contact.html" class="btn-submit">Make An Appointment</a>
					</div>
				</div>
			</div>
		</div>
		<!-- End Quick Solution-->

	
		<div class="vidz-area pos-rel hero-bg de-padding" style="background-image: url(assets/img/bg/bg-vidz.jpg)">
			<div class="container">
				<div class="vidz-wpr bg-theme">
					<div class="vidz-single grid-4">
						<div class="vidz-box">
							<div class="vidz-icon">
								<i class="fa-solid fa-user-doctor"></i>
							</div>
							<div class="vidz-desc">
								<h5 class="heading-5">specialized doctor</h5>
							</div>
						</div>
						<div class="vidz-box">
							<div class="vidz-icon">
								<i class="fa-solid fa-clipboard-user"></i>
							</div>
							<div class="vidz-desc">
								<h5 class="heading-5">On Time Report</h5>
							</div>
						</div>
						<div class="vidz-box">
							<div class="vidz-icon">
								<i class="fa-solid fa-laptop-medical"></i>
							</div>
							<div class="vidz-desc">
								<h5 class="heading-5">digital Record</h5>
							</div>
						</div>
						<div class="vidz-box">
							<div class="vidz-icon">
								<i class="fa-solid fa-receipt"></i>
							</div>
							<div class="vidz-desc">
								<h5 class="heading-5">Patient Information</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="vidz-section pos-rel">
					<img src="assets/img/choose/vidz.jpg" alt="No image">
					<div class="pl">
						<a href="index-2.html#vidz" id="videoLink" class="play-bt">
							<i class="fa-solid fa-play"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!--Modal-->
		<!-- Vertically centered modal -->
		<div class="mfp-hide" id="vidz">
			<iframe width="auto" height="auto" src="https://www.youtube.com/embed/REWRZDTgmRk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<!-- End Vidz -->
		
		<div class="form-area  de-padding bg">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 d-flex align-items-center">
						<div class="form-left-content">
							<div class="form-header">
								<h4 class="form-title">Get an Appointment</h4>
							</div>
							<div class="appointment-here-form">
								<form>
									<div class="row g-4">
										<div class=" col-md-6">
											<div class="form-group">
												<input type="text" class="form-control input-style-2" id="inputName" placeholder="Name">
												<i class="fa fa-heart" aria-hidden="true"></i>
											</div>
										</div>
										<div class="form-group col-md-6">
											<div class="form-group">
												<input type="text" class="form-control input-style-2" id="inputPhone" placeholder="Phone">
												<i class="fa-solid fa-mobile"></i>
											</div>
										</div>
										<div class=" col-md-6">
											<div class="form-group">
												<input type="email" class="form-control input-style-2" id="inputEmail" placeholder="Email">
												<i class="fa-solid fa-envelope"></i>
											</div>
										</div>
										<div class=" col-md-6">
											<div class="form-group">
												<select id="inputState" class="form-control input-style-2" >
													<option selected >Service Option</option>
													<option>Service One</option>
													<option>Service Two</option>
												</select>
												<i class="fa-solid fa-gear"></i>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="date" class="form-control input-style-2" id="inputDate" placeholder="Dates">
												<i class="fa-solid fa-calendar-days"></i>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<select id="inputOpt" class="form-control input-style-2" >
													<option selected >Persons</option>
													<option>Service One</option>
													<option>Service Two</option>
												</select>
												<i class="fa-solid fa-user-group"></i>
											</div>
										</div>
										<button type="submit" class="btn-submit">Make Appointment</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6">
						<div class="form-right pl-60">
							<img src="assets/img/contact/contact.jpg" alt="thumb">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Form -->
		
		
		
@endsection