<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <head>
        
        {{-- Título y descripción del sitio --}}
    <title>CEMAHE 🦶 Clínica de Heridas y Estomas en Pachuca</title>
    <meta name="description" content="Centro especializado en el manejo avanzado de heridas, estomas y pie diabético. Atención profesional en Pachuca, Hidalgo.">

    {{-- Open Graph (para compartir en redes sociales) --}}
    <meta property="og:title" content="@yield('og_title', 'CEMAHE 🦶 Clínica Especializada en Heridas y Estomas')">
    <meta property="og:description" content="@yield('og_description', 'Expertos en curación de heridas, ostomías y pie diabético en Pachuca. Agenda tu cita hoy.')">
    <meta property="og:image" content="{{ asset('logo.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, , shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
        @include('layouts.commonCSS')
    </head>
    
</head>
<a href="https://wa.me/5217711295900" target="_blank" class="whatsapp-float" title="Envíanos un mensaje">
    <i class="fab fa-whatsapp"></i>
</a>
<body id="bdy">

    <div>
        @include('layouts.navbar')
        

    <div>
        @yield('content')
    </div>

    
    @include('footer')
       

    @include('layouts.commonJS')

</body>


</html>
