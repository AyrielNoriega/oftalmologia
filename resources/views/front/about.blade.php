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
		 <a href="http://www.facebook.com">
		<img src="{{ asset('assets/img/facebook.png') }}" alt="logo facebook" height="30px"> </a> 
	</div>
	<div class="whatsapp mb-3">
		<a href="http://www.whatsapp.com">
		<img src="{{ asset('assets/img/whatsapp.png') }}" alt="logo whatsapp" height="30px"> </a> 
	</div>
	<div class="instagram mb-3">
		<a href="http://www.instagram.com">
		<img src="{{ asset('assets/img/instagram.png') }}" alt="logo instagram" height="30px"></a> 
	</div>

</section>



 <!-- ///////////////////////////////////////////// -->

<section class="container">
	<div class="row mt-5">
		<div class="col-md-6">
			<h3>Quienes Somos</h3>
			<p>En 2014 abrimos las puertas de nuestra primera sede de Optica Cruz en un pequeño local en la ciudad de Bogota-Colombia
			A lo largo de estos ultimos años, ha sido muy alto nuestro compromiso con nuestros clientes que hemos tenido personal especialmente capacitado en la adaptación de anteojos, con un gran sentido de ética y profesionalismo.</p>
		</div>
	</div>
	<div class="row mt-5 mb-4">
	<div class="col-md-6">
		<h3>Misión</h3>
		<p>Ser la empresa que ofrece soluciones integrales en el cuidado y conservación visual, con un alto sentido de profesionalismo y ética.</p>
	</div>
		<div class="col-md-6">
			<h3>Vision</h3>
			<p> En 2021 ser el principal referente en el cuidado y prevención de la salud visual, ofreciendo excelentes servicios y productos de excelente calidad.</p>
	</div>
	</div>
</section>







@endsection