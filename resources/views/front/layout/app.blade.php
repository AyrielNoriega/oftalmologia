<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>  @yield('title') </title>

        {{-- CSS BOOTSTRAP 4.6 --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

        {{-- Boostrap 4.5 --}}
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
        <link href="{{ asset('css/layout2.css') }}" rel="stylesheet">

        <link rel="shortcut icon" href="{{ asset('assets/img/Logo negro.PNG') }}" type="image/x-icon">

        <!-- Font Awesome icons (free version)-->
        <link rel="stylesheet" href="{{ asset('fontawesome/fontawesome-free-5.15.1-web/css/all.css') }}">
        
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />



        @yield('style')

    </head>
    <body class="antialiased">

        @include('front.layout.nav')

        <main>
            
            @yield('content')

        </main>

        @include('front.layout.footer')

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        
        <!-- Third party plugin JS-->

        @yield('script')

    </body>
</html>
