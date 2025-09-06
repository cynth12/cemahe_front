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
                                            En CEMAHE, Somos un equipo de especialistas enfocados en el manejo de pacientes 
                                            portadores de enfermedades Crónico Degenerativas, 
                                            dedicados al manejo integral de heridas de difícil cicatrización.
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
                                            Nuestros Servicios

                                        <li>Consulta medica preventiva</li>
                                         <li>Atención a domicilio</li>
                                          <li>Consulta a pacientes con heridas y ostomias</li>
                                          <li>Distribuidor de apositos</li>
                                          <li>Aplicación de terapia de presion negativa</li>
                                          <li>Material de curación ostomias</li>
                                        </h2>
                                        <br>
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

       @include('nosotros.index')
       
     @include('servicios.index') 

       @include('citas.index') 
       @include('testimoniales.index') 
       @include('contacto.index') 
        
        

    @endsection
