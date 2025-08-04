<div class="top-bar-area bg py-3">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-3">
					<div class="top-phone top-box">
						<i class="fa-solid fa-phone"></i>
						<span>771 129 5900</span>
					</div>
				</div>
				<div class="col-xl-3 col-lg-3">
					<div class="top-email top-box">
						<i class="fa-solid fa-envelope"></i>
						<span>heridascemahe@gmail.com</span>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4">
					<div class="top-box top-location">
						<i class="fa-solid fa-location-dot"></i>
						<span>Pachuca Hidalgo</span>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<header class="header">
		<div class="main-navigation">
			<div class="main-wrapper">
				<div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent">
					<div class="container">
						<a class="navbar-brand" href="home">
							<img src="{{ asset('assets/img/logo/logo_CEMAHE_1.png') }}" class="logo-display" alt="thumb">
							<img src="{{ asset('assets/img/logo/Logo_CEMAHE_2.png ') }}" class="logo-scrolled" alt="thumb">
						</a>
						<button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
						<div class="collapse navbar-collapse justify-content-md-end">
							<ul class="navbar-nav navbar-mobile mr-0">
								<li class="nav-item dropdown">
									<a class="nav-link" href="{{ url('/')}}">Inicio<i class="caret"></i></a>
								</li>
								<li class="nav-item"><a class="nav-link" href="{{ url('#nosotros')}}">Nosotros</a></li>
								<li class="nav-item dropdown">
									<a class="nav-link" href="{{ url('#servicios')}}">Servicios<i class="caret"></i></a>
								</li>
								<li class="nav-item"><a class="nav-link" href="{{ url('#contacto')}}">Contacto</a></li>
							</ul>
						</div>
						<div class="search-cart nav-profile">
							<a href="{{ url('#citas')}}" class="btn-4">Citas</a>
						</div>
					</div>
				</div>
				<div class="bsnav-mobile">
					<div class="bsnav-mobile-overlay"></div>
					<div class="navbar"></div>
				</div>
			</div>
		</div>
    </header>
    <!-- End header -->
    