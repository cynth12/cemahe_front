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
    <meta property="og:image" content="{{ asset('logo_cemahe.png') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, , shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.png') }}">
    
    
        @include('layouts.commonCSS')
    </head>
    
</head>

<body>

    <div>
        @include('layouts.navbar')
        @yield('content')
    </div>

    
    @include('footer')
       

    @include('layouts.commonJS')

    

</body>

</html>
