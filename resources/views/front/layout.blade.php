<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Optisoft</title>
        <!-- Font Awesome icons (free version)-->

        <link rel="stylesheet" href="{{ asset('fontawesome/fontawesome-free-5.15.1-web/css/all.css') }}">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

        {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

        @yield('style')

    </head>
    <body class="antialiased">

        <main>
            @yield('content')

        </main>

        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © Your oftalmology 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                            <a class="mr-3" href="#!">Politicas de privacidad</a>
                            <a href="#!">Terminos de uso</a>
                    </div>
                </div>
            </div> 
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src=""></script>
        
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script> --}}
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="{{ asset('assets/mail/jqBootstrapValidation.js') }}"></script>
        <script src="{{ asset('assets/mail/contact_me.js') }}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js2/scripts.js') }}"></script>

    </body>
</html>
