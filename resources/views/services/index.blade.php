@extends('layouts.app')

@section('style')
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

		{{-- datatable --}}
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css"/>
 
@endsection

@section('content')

<div class="container">
	<div class="row my-md-3 my-2  mx-3 ">
		<h3>Officina virtual</h3>
	</div>
	<div class="row">
		<div class="col">
			<h2>Citas médicas</h2>
			<p class="text-uppercase "><span id="userAuth">{{ auth()->user()->name }}</span> - CC <span id="IdUser">{{ auth()->user()->num_id }}</span></p>
		</div>
	</div>
	<div class="row row-cols-1 row-cols-md-3 ">
		<div class="col col-md-3 mb-4">
			<div class="card h-100">
				{{-- <i class="fas fa-file-medical medical"></i> --}}
				{{-- <img src="{{ asset('assets/img/default.png') }}" class="card-img-top" alt="..."> --}}
				<div class="card-body">
					<div class="btn-service" id="citasMedicas">
						<i class="fas fa-user-md medical "></i>
						<h5 class="card-title mt-2">CITAS MÉDICAS</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="col col-md-3 mb-4">
			<div class="card h-100">
				{{-- <img src="..." class="card-img-top" alt="..."> --}}
				<div	iv class="card-body">
					<div class="btn-service" id="ordenesMedicas">
						<i class="fas fa-book-medical medical"></i>
						<h5 class="card-title mt-2">ORDENES MÉDICAS</h5>
					</div>
			 
				</div>
			</div>
		</div>
		<div class="col col-md-3 mb-4">
			<div class="card h-100">

				<div class="card-body">
					<div class="btn-service" id="actualizarDatos">
						<i class="fas fa-user-edit medical"></i>
							{{-- <button  id="actualizarDatos" class="btn-service"> --}}
						<h5 class="card-title mt-2">ACTUALIZACIÓN DE DATOS</h5>
							{{-- </button> --}}
					</div>
				</div>
			</div>
		</div>
		<div class="col col-md-3 mb-4">
			<div class="card h-100">

				<div class="card-body">
					<div class="btn-service" id="cambiarContraseña">
						<i class="fas fa-key medical"></i>
							{{-- <button  id="actualizarDatos" class="btn-service"> --}}
						<h5 class="card-title mt-2">CAMBIAR  CONTRASEÑA</h5>
							{{-- </button> --}}
					</div>
				</div>
			</div>
		</div>
 
	</div>

 
	{{-- modals --}}
@include('services.modals')


</div> {{-- END CONTAINER --}}

	
@endsection


@section('scripts')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

	{{-- datatable --}}
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

	{{-- buttoo dattable --}}
	<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>


	<script src="{{ asset('js/services.js') }}"></script>
	
@endsection