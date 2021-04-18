<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
	<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}"><img src="{{ asset('assets/img/Logo negro.PNG') }}" style="height: 3rem;" alt="" /></a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					Menu
					<i class="fas fa-bars ml-1"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav text-uppercase ml-auto">
							<li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Inicio</a></li>
							<li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/shop') }}">Productos</a></li>
							<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Servicios</a></li>
							{{-- <li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Servicios
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Examen Oftalmológico</a>
									<a class="dropdown-item" href="#">Agenda tu cita</a>

								</div>
							</li> --}}
							{{-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Cita</a></li> --}}
							<li class="nav-item"><a class="nav-link js-scroll-trigger"  href="{{ url('/about') }}">Sobre nosotros</a></li>
							{{-- <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Testimonios</a></li> --}}
							<li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/#contact') }}">Contacto</a></li>

							@if (Route::has('login'))
									@auth
									<li class="nav-item">
											<a  href="{{ url('/home') }}" class="nav-link js-scroll-trigger">Home</a>
									</li>
									@else
									<li class="nav-item">
											<a href="{{ route('login') }}" class="nav-link js-scroll-trigger">Iniciar sesión</a>
									</li>

											@if (Route::has('register'))
											<li class="nav-item">
													<a href="{{ route('register') }}" class="nav-link js-scroll-trigger">Registro</a>
											</li>
											@endif
									@endauth
							@endif
					</ul>
			</div>
	</div>
</nav>

<!--END Navigation-->