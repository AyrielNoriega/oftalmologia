@extends('front.layout.app')

@section('title', 'Optisoft - Inicio')


@section('style')
		        {{-- css adictional --}}
						{{-- <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
						<link href="{{ asset('css/layout2.css') }}" rel="stylesheet"> --}}
@endsection

@section('content')


		<section class="redes">
			<div class="facebook mb-3">
				<a href="http://www.facebook.com" target="_blank" >
				<img src="{{ asset('assets/img/facebook.png') }}" alt="logo facebook" height="30px"> </a> 
			</div>
			<div class="whatsapp mb-3">
				<a href="http://www.whatsapp.com" target="_blank">
				<img src="{{ asset('assets/img/whatsapp.png') }}" alt="logo whatsapp" height="30px"> </a> 
			</div>
			<div class="instagram mb-3">
				<a href="http://www.instagram.com" target="_blank">
				<img src="{{ asset('assets/img/instagram.png') }}" alt="logo instagram" height="30px"></a> 
			</div>

		</section>

					<!-- Masthead-->
					
					<header class="masthead">
							<div class="container img-fond">
									{{-- <div class="masthead-subheading">Bienvenido a Oftisoft</div> --}}
									<div class="masthead-heading text-uppercase">Bienvenido a Optisoft!</div>
									<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Saber más...</a>
							</div>
					</header>
	
					<!-- Algunas marcas-->
					<div class="py-5 d-none d-sm-block bg-light" id="services">
							<div class="container">
									<div class="row">
											<div class="col-md-3 col-sm-6 my-3">
													<a href="#!"><img class="img-fluid d-block mx-auto img-heigth" src="{{ asset('assets/img/arnettelogo.svg') }}" alt="" /></a>
											</div>
											<div class="col-md-3 col-sm-6 my-3">
													<a href="#!"><img class="img-fluid d-block mx-auto img-heigth" src="{{ asset('assets/img/diorlogo.png') }}" alt="" /></a>
											</div>
											<div class="col-md-3 col-sm-6 my-3">
													<a href="#!"><img class="img-fluid d-block mx-auto img-heigth" src="{{ asset('assets/img/persolLogo.png') }}" alt="" /></a>
											</div>
											<div class="col-md-3 col-sm-6 my-3">
													<a href="#!"><img class="img-fluid d-block mx-auto img-heigth" src="{{ asset('assets/img/Ray-Ban-logo.png') }}" alt="" /></a>
											</div>
									</div>
							</div>
					</div>
	
					<section class="page-section pt-4 pb-0">
							<section class="contenido">
									<div class="container mt-5">
											<div class="row">
													<div class="col-md-4 container-images mx-auto">
															<img src="{{ asset('assets/img/sol.jpg') }}">
													</div>
													<div class="col-md-6 px-5 text-center mx-auto">
													<h2>Ray-Ban-Línea Wayfarers</h2>
															<p>Los modelos de la línea Wayfarers llevan cristales de alta calidad, por lo que ofrecen una mejor claridad. Ray-Ban, nos dice que se concentran en la calidad a largo plazo, asegurándose de que los materiales utilizados no se desgasten. Estan cortado al láser para garantizar que sea muy liviano y cómodo.
											Las monturas del Wayfarer se hacen de acetato.</p>
							
													</div>
													<!-- <div class="col-md-2"> -->
													<aside class="posterior col-md-2 aside ">
															<h3>Para leer</h3>
															<ul class="cinco">
							
																	<li><a target="_blank" href="https://www.arnette.com/es">Arnette</a></li>
																	<li><a target="_blank" href="https://www.ray-ban.com/spain/">Ray-Ban</a></li>
																	<li><a target="_blank" href="https://www.polaroideyewear.com/en-ww/home.html">Polaroid</a></li>
																	<li><a target="_blank" href="http://www.gafaspolice.com/es/">Police</a></li>
																	<li><a target="_blank" href="https://www.carolinaherrera.com/us/es/fashion/carolina-herrera/women/ch-carolina-herrera-women/">Carolina Herrera</a></li>
																	<li><a target="_blank" href="https://www.prada.com/us/es.html">Prada</a></li>
																	<li><a target="_blank" href="https://www.arnette.com/es">Arnette</a></li>
																	<li><a target="_blank" href="https://global.lacoste.com/es/lacoste/hombre/complementos/gafas-de-sol/">Lacoste</a></li>
																	<li><a target="_blank" href="https://www.dior.com/es_sam/moda-mujer/los-accesorios/gafas-de-sol">Dior</a></li>
															</ul>
													</aside>
													<!-- </div> -->
											</div>
									</div>
							</section>
							<section class="contenido">
									<div class="container mt-5">
											<div class="row">
										<div class="col-md-6 px-5 text-center mx-auto">
											<h2>¿Qué tienen las gafas de sol Arnette?</h2>
															<p>Una de las principales características son sus diseños envolventes que facilitan máxima protección y una perfecta adaptación al rostro dando una sensación de confort. Protegen 100% de los rayos del sol.
											Otro de sus fuertes son sus materiales: resistentes a los golpes lo que las convierten en unas gafas de sol todoterreno. </p>
												
											</div>
													<div class="col-md-4 container-images mx-auto">
														<img src="{{ asset('assets/img/Arnette.jpg') }}">
													</div>
							<!-- <div class="col-md-2"> -->
										<aside class="posterior col-md-2 aside">
											<h3>enfermandades oftalmológicas</h3>
											<ul class="cinco">
							
												<li><a target="_blank" href="https://cuidateplus.marca.com/enfermedades/oftalmologicas.html">Astigmatismo</a></li>
												<li><a target="_blank" href="https://cuidateplus.marca.com/enfermedades/oftalmologicas.html">Desprendimiento de retina</a></li>
												<li><a target="_blank" href="https://cuidateplus.marca.com/enfermedades/oftalmologicas.html">Hipermetropía</a></li>
												<li><a target="_blank" href="https://cuidateplus.marca.com/enfermedades/oftalmologicas.html">Hipermetropía</a></li>
												<li><a target="_blank" href="https://cuidateplus.marca.com/enfermedades/oftalmologicas.html">Cataratas</a></li>
												<li><a target="_blank" href="https://cuidateplus.marca.com/enfermedades/oftalmologicas.html">Estrabismo</a></li>
												<li><a target="_blank" href="https://www.arnette.com/es">Miopía</a></li>
												<li><a target="_blank" href="https://cuidateplus.marca.com/enfermedades/oftalmologicas.html">Orzuelo</a></li>
												<li><a target="_blank" href="https://cuidateplus.marca.com/enfermedades/oftalmologicas.html">Conjuntivitis</a></li>
												<li><a target="_blank" href="https://cuidateplus.marca.com/enfermedades/oftalmologicas.html">Glaucoma</a></li>
												<li><a target="_blank" href="https://cuidateplus.marca.com/enfermedades/oftalmologicas.html">Ojo seco</a></li>
												<li><a target="_blank" href="https://cuidateplus.marca.com/enfermedades/oftalmologicas.html">Presbicia</a></li>
							
												 </ul>
										</aside>
										<!-- </div> -->
									</div>
								</div>
											</div>
									</div>
							</section>
							<section class="contenido ">
									<div class="container mt-5 mb-5 ">
											<div class="row">
													<div class="col-md-4 container-images mx-auto text-center">
															<img src="{{ asset('assets/img/police.jpg') }}">
													</div>
													<div class="col-md-6 px-5 text-center mx-auto">
													<h2>Police-¿Qué hace especiales a estas gafas?</h2>
															<p>Algunas de las características que resaltan las gafas Police para ser una buena opción de compra:
											Diseño: Hay que destacar que cuentan con unos diseños espectaculares, trabajados hasta el más mínimo detalle que te permitirán tener una apariencia mucho más elegante.
											Variedad: ofrecen una variedad muy amplia, con un catálogo extenso con los modelos que mejor se adaptan a tus gustos.
											Antirreflejos: Naturalmente, son gafas totalmente antirreflejos.
											Mayor claridad: son gafas polarizadas, lo que significa que independientemente del nivel de luz que haya a tu alrededor, podrás tener una visión mucho más clara.
											Los modelos más vendidos de Police son: Police SPL152 Police SPL161 Police SPL339.</p>
											</div>
									</div>
			
							</section>
					</section>
	
									<!-- Services-->
									<section class="page-section" >
											<div class="container">
													{{-- <div class="text-center"> --}}
															{{-- <h2 class="section-heading text-uppercase">Services</h2> --}}
															{{-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h3> --}}
													{{-- </div> --}}
													<div class="row text-center">
															<div class="col-md-4">
																	<span class="fa-stack fa-4x">
																			<i class="fas fa-circle fa-stack-2x text-primary"></i>
																			<i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
																	</span>
																	<h4 class="my-3">Envíos a nivel nacional</h4>
																	<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
															</div>
															<div class="col-md-4">
																	<span class="fa-stack fa-4x">
																			<i class="fas fa-circle fa-stack-2x text-primary"></i>
																			<i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
																	</span>
																	<h4 class="my-3">Diagnostico Oftalmológico</h4>
																	<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
															</div>
															<div class="col-md-4">
																	<span class="fa-stack fa-4x">
																			<i class="fas fa-circle fa-stack-2x text-primary"></i>
																			<i class="fas fa-lock fa-stack-1x fa-inverse"></i>
																	</span>
																	<h4 class="my-3">Garantías hasta por un año</h4>
																	<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
															</div>
													</div>
											</div>
									</section>
	
					<!-- Testimonios-->
					<section class="page-section bg-light" id="team">
							<div class="container">
									<div class="text-center">
											<h2 class="section-heading text-uppercase">Testimonios</h2>
											<h3 class="section-subheading text-muted">Nuestros usuarios comentan.</h3>
									</div>
									<div class="row">
											<div class="col-lg-4">
													<div class="team-member">
															<img class="mx-auto rounded-circle" src="{{ asset('assets/img/team/1.jpg') }}" alt="" />
															<h4>Kay Garland</h4>
															<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sed possimus, , dignissimos reiciendis. Velit!</p>
													</div>
											</div>
											<div class="col-lg-4">
													<div class="team-member">
															<img class="mx-auto rounded-circle" src="{{ asset('assets/img/team/2.jpg') }}" alt="" />
															<h4>Larry Parker</h4>
															<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sed possimus, , dignissimos reiciendis. Velit!</p>
													</div>
											</div>
											<div class="col-lg-4">
													<div class="team-member">
															<img class="mx-auto rounded-circle" src="{{ asset('assets/img/team/3.jpg') }}" alt="" />
															<h4>Diana Petersen</h4>
															<p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam sed possimus, , dignissimos reiciendis. Velit!</p>
													</div>
											</div>
									</div>
							</div>
					</section>
	
					<!-- Contact-->
					<section class="page-section" id="contact">
							<div class="container">
									<div class="text-center">
											<h2 class="section-heading text-uppercase">Contactanos</h2>
											<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
									</div>
									<form id="contactForm" name="sentMessage" novalidate="novalidate">
											<div class="row align-items-stretch mb-5">
													<div class="col-md-6">
															<div class="form-group">
																	<input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
																	<p class="help-block text-danger"></p>
															</div>
															<div class="form-group">
																	<input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
																	<p class="help-block text-danger"></p>
															</div>
															<div class="form-group mb-md-0">
																	<input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
																	<p class="help-block text-danger"></p>
															</div>
													</div>
													<div class="col-md-6">
															<div class="form-group form-group-textarea mb-md-0">
																	<textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
																	<p class="help-block text-danger"></p>
															</div>
													</div>
											</div>
											<div class="text-center">
													<div id="success"></div>
													<button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Enviar Mensaje</button>
											</div>
									</form>
							</div>
					</section>

@endsection

@section('script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
	<!-- Contact form JS-->
	<script src="{{ asset('assets/mail/jqBootstrapValidation.js') }}"></script>
	<script src="{{ asset('assets/mail/contact_me.js') }}"></script>
	<!-- Core theme JS-->
	<script src="{{ asset('js2/scripts.js') }}"></script>
@endsection

