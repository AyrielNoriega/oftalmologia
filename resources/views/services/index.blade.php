@extends('layouts.app')

@section('style')
		<link rel="stylesheet" href="{{ asset('css/services.css') }}">
@endsection

@section('content')

<div class="container">
	<div class="row my-md-5 my-4  mx-3 ">
		<h3>Officina virtual</h3>
	</div>
	<div class="row row-cols-1 row-cols-md-3 ">
		<div class="col mb-4">
			<div class="card h-100">
				{{-- <i class="fas fa-file-medical medical"></i> --}}
				<i class="fas fa-user-md medical "></i>
				{{-- <img src="{{ asset('assets/img/default.png') }}" class="card-img-top" alt="..."> --}}
				<div class="card-body">
					<h5 class="card-title ">CITAS MÉDICAS</h5>
					{{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> --}}
				</div>
			</div>
		</div>
		<div class="col mb-4">
			<div class="card h-100">
				{{-- <img src="..." class="card-img-top" alt="..."> --}}
				<i class="fas fa-book-medical medical"></i>
				<div class="card-body">
					<h5 class="card-title">ORDENES MÉDICAS</h5>
					{{-- <p class="card-text">This is a short card.</p> --}}
				</div>
			</div>
		</div>
		<div class="col mb-4">
			<div class="card h-100">
				{{-- <img src="..." class="card-img-top" alt="..."> --}}
				<i class="fas fa-user-edit medical"></i>
				<div class="card-body">
					<h5 class="card-title">ACTUALIZACIÓN DE DATOS</h5>
					{{-- <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p> --}}
				</div>
			</div>
		</div>
		{{-- <div class="col mb-4">
			<div class="card h-100">
				<img src="..." class="card-img-top" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				</div>
			</div>
		</div> --}}
	</div>


	<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021 - 2022 Oftisoft</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>


</div>

		
@endsection