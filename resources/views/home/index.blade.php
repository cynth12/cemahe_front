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
                    <div class="hero-single swiper-slide bg-overlay hero-bg"
                        style="background-image: url(assets/img/heridas/heridas_pachuca_2.png)">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="hero-content">
                                        <h2 class="hero-title">
                                            Centro Especializado en el Manejo Avanzado de Heridas y Estomas
                                        </h2>
                                        <p>
                                            En CEMAHE, somos un equipo de especialistas dedicados al manejo integral de
                                            heridas crónicas,
                                            estomas, pie diabético y lesiones complejas.
                                        </p>
										<h2 class="hero-title">
                                          Contamos con servicio a Domicilio
                                        </h2>
                                        <div class="hero-btn">
                                            <a href="{{ url('contact.html') }}" class="service-btn btn-white btn-animated">
                                                Contactanos
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-single swiper-slide hero-overlay hero-bg"
                        style="background-image: url(assets/img/header/hdr-2.jpg)">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 offset-xl-3">
                                    <div class="hero-content text-center">
                                        <h2 class="hero-title">
                                            Ofrecemos tratamientos personalizados con técnicas avanzadas y productos de
                                            última generación
                                        </h2>
                                        <p class="p-0">
                                            Nos enfocamos en brindar atención de alta calidad, profesional y humana,
                                            con el respaldo de experiencia clínica, preparación académica y vocación de
                                            servicio.
                                        </p>
                                        <div class="hero-btn">
                                            <a href="contact.html" class="service-btn btn-white btn-animated">
                                                Contactanos
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
										<img src="assets/img/heridas/JULEANA.png" class="about-pic-2" alt="Image Not Found">
                                      
                                         <img src="assets/img/heridas/curacion.jpg" class="about-pic-2" alt="Image Not Found">
										
									</div>
									<img src="assets/img/heridas/pie_diabetico.jpg" class="about-pic-3" alt="Image Not Found">
									
								</div>
							</div>
						</div>
                        <div class="col-xl-5">
                            <div class="about-right pl-30">
                                <span class="hero-sub-title">Nuestro equipo</span>
                                <h2 class="hero-title">
                                   Lic. Esp. Reyna Juleana Zárate Vargas
                                </h2>
                                <p class="about-para">
                                    Contamos con un equipo multidisciplinario altamente capacitado, con amplia experiencia en el tratamiento de heridas complejas y estomas. Nuestro compromiso es ofrecer atención profesional, 
									humana y efectiva para evitar amputaciones y acelerar la cicatrización de todo tipo de heridas.
                                </p>
                                <ul class="about-list">
                                    <li>Cédula Profesional de Licenciatura y Posgrado</li>
                                    <li>Especialista en el manejo de heridas y estomas</li>
                                    <li>Cursos y diplomados nacionales e internacionales</li>
                                </ul>
                                <div class="about-opt grid-2">
                                    <div class="about-opt-box">
                                        <h5 class="heading-5 mb-0">Calidad humana</h5>
                                    </div>
                                    <div class="about-opt-box">
                                        <h5 class="heading-5 mb-0">Servicio Profesional</h5>
                                    </div>
                                    <div class="about-opt-box">
                                        <h5 class="heading-5 mb-0">Resultados Comprobados</h5>
                                    </div>
                                    <div class="about-opt-box">
                                        <h5 class="heading-5 mb-0">Excelencia Médica</h5>
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
        <div class="service-area de-padding bg-overlay  hero-bg"
            style="background-image: url(assets/img/heridas/procedimiento.jpg)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3">
                        <div class="site-title wh text-center">
                            <h2>Nuestros servicios</h2>
                            <p class="mb-0">
                            Ofrecemos atención especializada y personalizada para cada paciente, utilizando técnicas avanzadas 
							en el cuidado de heridas, estomas y pie diabético, con el objetivo de mejorar su calidad de vida.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="service-wpr grid-3">
                    <div class="service-box">
                        <div class="service-icon">
                            <i>🦶</i>
                        </div>
                        <div class="service-desc">
                            <h4 class="heading-4">
                                Pie Diabetico 
                            </h4>
                            <p>
                                Complicación frecuente de la diabetes que afecta la piel, nervios y circulación de los pies. 
                                Puede causar úlceras, infecciones y, en casos graves, amputaciones. El tratamiento oportuno 
                                ayuda a controlar la infección, mejorar la circulación y favorecer la cicatrización.
                            </p>
                            <a href="{{ url('inicio')}}" class="btn-2">Leer
                                Mas</a>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa-solid fa-user-nurse"></i>
                        </div>
                        <div class="service-desc">
                            <h4 class="heading-4">
                                Estomas
                            </h4>
                            <p>
                                Aperturas quirúrgicas en el abdomen que permiten la salida de desechos corporales cuando 
                                el funcionamiento normal del intestino o la vejiga está afectado. Brindamos cuidado especializado 
                                para prevenir infecciones, proteger la piel circundante y enseñar el manejo adecuado al paciente.
                            </p>
                            <a href="{{ url('inicio')}}" class="btn-2">Leer mas</a>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa-sharp fa-solid fa-hand-holding-medical"></i>
                        </div>
                        <div class="service-desc">
                            <h4 class="heading-4"> 
                                Heridas Infectadas
                            </h4>
                            <p>
                                Lesiones que han sido invadidas por bacterias, causando enrojecimiento, dolor, 
                                secreción y retraso en la cicatrización. El manejo incluye limpieza profunda, 
                                control de la infección y aplicación de técnicas avanzadas de curación.
                            </p>
                            <a href="{{ url('inicio')}}" class="btn-2">Leer mas</a>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa-solid fa-bed"></i>
                        </div>
                        <div class="service-desc">
                            <h4 class="heading-4">
                                Ulceras por presion
                            </h4>
                            <p>
                               Lesiones en la piel y tejidos subyacentes causadas por presión 
                               prolongada, común en personas con movilidad reducida. 
                               El tratamiento consiste en aliviar la presión, promover la circulación y aplicar terapias de regeneración tisular.


                            </p>
                            <a href="{{ url('inicio')}}" class="btn-2">Leer mas</a>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa-solid fa-hand"></i>
                        </div>
                        <div class="service-desc">
                            <h4 class="heading-4">
                                Quemaduras
                            </h4>
                            <p>
                                Lesiones de la piel causadas por calor, sustancias químicas, electricidad o radiación. 
                                El tratamiento busca controlar el dolor, prevenir infecciones 
                                y acelerar la regeneración de la piel con técnicas y apósitos especializados.
                            </p>
                            <a href="{{ url('inicio')}}" class="btn-2">Leer mas</a>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-icon">
                            <i class="fa-solid fa-bed-pulse"></i>
                        </div>
                        <div class="service-desc">
                            <h4 class="heading-4">
                                Varices
                            </h4>
                            <p>
                               Venas dilatadas y tortuosas que aparecen por debilidad en las paredes venosas y problemas 
                               de circulación. Pueden causar dolor, pesadez e inflamación. 
                               Ofrecemos terapias para mejorar el flujo sanguíneo y prevenir complicaciones.
                            </p>
                            <a href="{{ url('inicio')}}" class="btn-2">Leer mas</a>
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
                                <img src="assets/img/heridas/heridologa.png" alt="thumb">
                                <img src="assets/img/shape/shape-3.png" class="why-shape-1" alt="thumb">
                                <img src="assets/img/shape/shape-2.png" class="why-shape-2" alt="thumb">
                                <img src="assets/img/dot/17.png" class="why-shape-3" alt="thumb">
                            </div>
                        </div>
                    </div>
                    <div class="why-right">
                        <div class="why-right-content">
                            <h2 class="hero-title">
                                Consulta con Expertos en Heridas y Ostomías
                            </h2>
                            <p>
                                Nuestro equipo especializado ofrece atención oportuna, personalizada y Seguimiento Continuo
                            </p>
                            <ul class="why-list">
                                <li><i class="fa-solid fa-house-medical"></i>Horarios Flexibles y Servicio a Domicilio</li>
                                <li><i class="fa-sharp fa-solid fa-laptop-medical"></i>Atención por Profesionales Certificados</li>
                            </ul>
                            <button type="submit" class="btn-submit">Agenda tu cita</button>
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
                <img src="assets/img/shape/shape-4.png" class="medo-shape-1 up-move" alt="thumb">
            </div>
            <div class="container">
                <div class="medo-wpr">
                    <div class="medo-top">
                        <div class="row g-5">
                            <div class="col-xl-6">
                                <div class="medo-left">
                                    <h2 class="hero-title wh mb-30">
                                       Confianza, Experiencia y Resultados Comprobados
                                    </h2>
                                    <p class="medo-txt mb-50">
                                        
                                    Con años de trayectoria, ayudamos a nuestros pacientes a sanar de forma integral, 
									evitando amputaciones y mejorando su calidad de vida.
									</p>
                                    <div class="counter-wpr counter-1 grid-3">
                                        <div class="fun-fact">
                                            <div class="fun-icon">
                                                <i class="fa-solid fa-truck-medical"></i>
                                            </div>
                                            <div class="fun-desc">
                                                <p class="timer" data-count="+" data-to="15" data-speed="3000"></p>
                                                <span class="medium">Años de experiencia</span>
                                            </div>
                                        </div>
                                        <div class="fun-fact">
                                            <div class="fun-icon">
                                                <i class="fa-solid fa-hospital-user"></i>
                                            </div>
                                            <div class="fun-desc">
                                                <p class="timer" data-count="+" data-to="2000" data-speed="3000"></p>
                                                <span class="medium">Pacientes con éxito</span>
                                            </div>
                                        </div>
                                        <div class="fun-fact">
                                            <div class="fun-icon">
                                                <i class="fa-solid fa-bed-pulse"></i>
                                            </div>
                                            <div class="fun-desc">
                                                <p class="timer" data-count="+" data-to="2000" data-speed="3000"></p>
                                                <span class="medium">Cicatrizadas sin complicaciones</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="medo-right pl-60">
                                    <img src="assets/img/heridas/presion.png" alt="thumb">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="medo-bottom">
                        <div class="row g-5">
                            <div class="col-xl-8">
                                <div class="medo-btm-left">
                                    <img src="assets/img/heridas/sanacion.png" alt="thumb">
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="medo-btm-right">
                                    <div class="medo-btm-right-content pos-rel">
                                        <h2 class="heading-1 wh mb-50">
                                            ¿Necesitas una cita médica rápida y sencilla?
                                        </h2>
                                        <div class="medo-link">
                                            <a href="{{ url('contacto')}}" class="service-btn btn-white btn-animated">
                                                Agenda tu cita
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

        <div class="vidz-area pos-rel hero-bg de-padding" style="background-image: url(assets/img/bg/bg-vidz.jpg)">
            <div class="container">
                <div class="vidz-wpr bg-theme">
                    <div class="vidz-single grid-4">
                        <div class="vidz-box">
                            <div class="vidz-icon">
                                <i class="fa-solid fa-user-doctor"></i>
                            </div>
                            <div class="vidz-desc">
                                <h5 class="heading-5">Personal especialidazo</h5>
                            </div>
                        </div>
                        <div class="vidz-box">
                            <div class="vidz-icon">
                                <i class="fa-solid fa-clipboard-user"></i>
                            </div>
                            <div class="vidz-desc">
                                <h5 class="heading-5">Consutas a tiempo</h5>
                            </div>
                        </div>
                        <div class="vidz-box">
                            <div class="vidz-icon">
                                <i class="fa-solid fa-laptop-medical"></i>
                            </div>
                            <div class="vidz-desc">
                                <h5 class="heading-5">Expediente clinico</h5>
                            </div>
                        </div>
                        <div class="vidz-box">
                            <div class="vidz-icon">
                                <i class="fa-solid fa-receipt"></i>
                            </div>
                            <div class="vidz-desc">
                                <h5 class="heading-5">Información clara</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="vidz-section pos-rel">
                    <img src="assets/img/heridas/pie.jpg" alt="No image">
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
            <iframe width="auto" height="auto" src="https://www.youtube.com/embed/REWRZDTgmRk"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
        <!-- End Vidz -->

        <div class="blog-area de-padding">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 offset-xl-3">
						<div class="site-title text-center">
							<h2>Testimoniales</h2>
							<p class="mb-0">
								En Cemahe, cada historia cuenta. Nuestros pacientes comparten sus experiencias reales de atención, acompañamiento y recuperación. 
							
							</p>
						</div>
					</div>
				</div>		
		</div>
	</div>
		<!-- End Blog -->
	<!-- Start Review Contact
		============================================= -->
		<div class="rev-contact bg-theme pos-rel de-padding">
			<img src="assets/img/shape/shape-5.png" class="rv-1" alt="no image">
			<img src="assets/img/shape/shape-6.png" class="rv-2" alt="no image">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 offset-xl-3">
						<div class="site-title wh text-center">
							<h2>Contacto</h2>
							<p class="mb-0">
								Ponte en contacto con nosotros para agendar una cita o resolver tus preguntas.
							</p>
						</div>
					</div>
				</div>
				<div class="addr-box grid-3">
					<div class="addr-box-single">
						<div class="addr-icon">
							<i class="fa-solid fa-location-dot"></i>
						</div>
						<div class="addr-desc">
							<h5>Dirección</h5>
							<p class="mb-0">
								16 de Septiembre 221, San Antonio el Desmonte, 42083 Pachuca de Soto, Hgo.
							</p>
						</div>
					</div>
					<div class="addr-box-single">
						<div class="addr-icon">
							<i class="fa-solid fa-phone"></i>
						</div>
						<div class="addr-desc">
							<h5>Telefono</h5>
							<p class="mb-0">
								771 129 5900
							</p>
						</div>
					</div>
					<div class="addr-box-single">
						<div class="addr-icon">
							<i class="fa-solid fa-envelope"></i>
						</div>
						<div class="addr-desc">
							<h5>Email</h5>
							<p class="mb-0">
								heridascemahe@gmail.com
							</p>
						</div>
					</div>
				</div>



    @endsection
