@extends('layouts.app')

@section('style')
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

		{{-- datatable --}}
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css"/>

		{{-- Datepicker fecha --}}
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		{{-- <link rel="stylesheet" href="/resources/demos/style.css"> --}}
 
@endsection

@section('content')

<div class="container">
	<div class="row my-md-3 my-2  mx-3 ">
		<h3>Oficina virtual</h3>
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

	{{-- Datepicker Fecha --}}

	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	{{-- idioma Datepicker español --}}
	<script src="{{ asset('js/datepicker-es.js') }}"></script>

	<script>

			$( function() {



				
					$( "#datepicker" ).datepicker();

					$( "#datepicker" ).change(function (evt) {
		
						// Setter
						$( "#datepicker").datepicker( "option", "dateFormat", "yy-mm-dd" );

							console.log(datepicker.value);

							$.get("/cita/all", { dia: datepicker.value } ,
								function (data, textStatus, jqXHR) {

									$("#horasDisponible").empty();
									
									console.log('data', data);
									for (const key in data) {

										$( '#numTurnos' ).html( "" );
										$( '#numTurnos' ).html( data.length );

										$('#horasDisponible').append(`<button type="button" class="btn btn-sm btn-outline-primary btnSelected "> ${data[key]} </button>`);

					
									}

								}


							);

							// Recoger datos luego de cambios
 
						
							var btn = document.getElementsByClassName("btnSelected");
							for(let e = 0; e <= btn.length; e++){
								btn[e].onclick = function(){
									// this.className += " active";
									console.log('sisisi');
								};
							};

						
					});



			
					$('#horasDisponible').change(function (e) { 
						e.preventDefault();
						
						console.log('cambio de btn grp');
					});

 
					//  (evnt) => {
					// 	event.preventDefault();
					// 	var btnSelected = document.getElementsByClassName("btnSelected");
					// 	for (let i = 0; i < btnSelected.length; i++) { 	btnSelected[i].className = btnSelected[i].className.replace(" active", "") }
					// 	event.currentTarget.className += " active";
					// }

 
					// 	event.preventDefault();
						// var btnSelected = document.getElementsByClassName("btnSelected");
						// for (let i = 0; i < btnSelected.length; i++) { 	btnSelected[i].className = btnSelected[i].className.replace(" active", ""); }
						// event.currentTarget.className += " active";
 


					$('#especialidad').change(function (e) { 
						e.preventDefault();
						var especialidad = document.getElementById('especialidad').value;
							console.log(especialidad);			
					});



  	} );
	</script>

 
	
@endsection