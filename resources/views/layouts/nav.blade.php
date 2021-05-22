<nav class="navbar navbar-expand-md shadow-sm navbar-light">
	<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
					{{ config('app.name', 'Optisoft') }}
			</a>
			<button class="navbar-toggler border-secondary bg-white" type="button" data-toggle="collapse"  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav mr-auto">

					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="navbar-nav ml-auto">
							<!-- Authentication Links -->
							@guest
									@if (Route::has('login'))
											<li class="nav-item">
													<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
											</li>
									@endif
									
									@if (Route::has('register'))
											<li class="nav-item">
													<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
											</li>
									@endif
							@else
										<li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/') }}">Inicio</a></li>

										<li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">Home</a></li>

									@if ( Auth::user()->type ==="medico" )
										<li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('medico.home') }}">Home Medico</a></li>
									@endif
									@if ( Auth::user()->type ==="admin" )
										<li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('home/admin') }}">Admin</a></li>
									@endif
									

									<li class="nav-item dropdown">
											<a id="navbarDropdown" class="nav-link dropdown-toggle text-primary font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
													Bienvenid@ <span class="text-uppercase"> {{ Auth::user()->name }}</span>
											</a>

											<div class="dropdown-menu dropdown-menu-right border-dark" aria-labelledby="navbarDropdown">
													<a class="dropdown-item text-dark" href="{{ route('logout') }}"
														 onclick="event.preventDefault();
																					 document.getElementById('logout-form').submit();">
														 <span class="text-dark">	Cerrar sesión</span>
													</a>

													<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
															@csrf
													</form>
											</div>
									</li>
							@endguest
					</ul>
			</div>
	</div>
</nav>
