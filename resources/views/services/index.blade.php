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


				var dia;
				
		 			 $( "#datepicker" ).datepicker();

 
					$( "#datepicker" ).change(function (evt) {
		
						// Setter
							$( "#datepicker").datepicker( "option", "dateFormat", "yy-mm-dd" );

							// console.log("fecha selec: ",datepicker.value);		
							dia = datepicker.value;

							$.get("/cita/all", { dia: datepicker.value } ,
								function (data, textStatus, jqXHR) {

									$("#horasDisponible").empty();
									
									// console.log('data: ', data);
									for (const key in data) {

										$( '#numTurnos' ).html( "" );
										$( '#numTurnos' ).html( data.length );

										// $('#horasDisponible').append(`<button type="button" class="btn btn-sm btn-outline-primary btnSelected "> ${data[key]} </button>`);
										$('#horasDisponible').append(`<label class="btn btn-outline-primary btnSelected">
																									<input type="radio" name="options" id="${data[key]}"> ${data[key]}
																									</label>`);

					
									}

								}


							);

							// Recoger datos luego de cambios
							
							 fecha = datepicker.value
							console.log('toma: ',fecha);
						
					});

					var hora, especialidad;
					$('#horasDisponible').change(function (e) { 
									// e.preventDefault();
						console.log('cambio de btn grp: ',  e.target.getAttribute("id"));
						hora = e.target.getAttribute("id");
					});

					$('#especialidad').change(function (e) { 
					// var especialidad = document.getElementById('especialidad').value;
						console.log(e.target.value);	
						especialidad = e.target.value;
					});


					$( '#formCitas' ).submit(function (e) { 
						e.preventDefault();

 
					 
						let datos = {
								hora: hora,
								dia: dia,
								especialidad: especialidad,
								_token: $("input[name=_token]").val()

						}

						console.log("hora: ",hora);

						if ( typeof datos.hora != 'undefined' && typeof datos.dia != 'undefined' && typeof datos.especialidad != 'undefined' ) {

								$( '#guardarCita' ).attr( 'disabled' , true);

								$.post("/cita/store", datos	,
									function (response, textStatus, jqXHR) {
										// console.log(response);
									}
								)
								.done(function (response ) {
									document.getElementById("formCitas").reset(); //reset form
									$("#horasDisponible").empty(); //limpiar horas disponibles

									$( '#guardarCita' ).attr( 'disabled' , false);
									$( '#especialidad' ).removeClass( 'invalidForm validForm' );
									$( '#datepicker' ).removeClass( 'invalidForm validForm' );

									if( response ){
											$( '#citaMedicaModal' ).modal('hide');
									
											toastr["success"](`<br />Cita creada correctamente para el ${dia} a las ${hora}!<br /><br />`)

													toastr.options = {
														"closeButton": true,
														"debug": false,
														"newestOnTop": false,
														"progressBar": false,
														"positionClass": "toast-top-right",
														"preventDuplicates": true,
														"onclick": null,
														"showDuration": "300",
														"hideDuration": "1000",
														"timeOut": "5000",
														"extendedTimeOut": "1000",
														"showEasing": "swing",
														"hideEasing": "linear",
														"showMethod": "fadeIn",
														"hideMethod": "fadeOut"
													}

															//establecer undefined luego de enviar datos
															hora = undefined
															dia = undefined
															especialidad = undefined
						
									}

								});
							}else {

								if (typeof datos.especialidad == 'undefined') {
									$( '#especialidad' ).addClass( 'invalidForm' );
								}else  $( '#especialidad' ).addClass( 'validForm' )

								if (typeof datos.dia == 'undefined') {
									$( '#datepicker' ).addClass( 'invalidForm' );
								}else $( '#datepicker' ).addClass( 'validForm' )

								// if (typeof datos.hora == 'undefined') {
								// 	$( '#especialidad' ).addClass( 'invalid-form' );
								// }$( '#especialidad' ).addClass( 'validForm' )

							}


					});

 

						 
 


  	} );
	</script>

 
	
@endsection