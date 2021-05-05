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
			<p>AYRIEL NORIEGA MONROY - CC 1027544333</p>
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

		<script>

			$( document ).ready(function() {

				//EDITAR DATOS 	
				var actualizarDatos = document.querySelector('#actualizarDatos')

				actualizarDatos.addEventListener( 'click', function ( event ) {
			 
					var id = 	$('#userId').val();

						$.get( '/user/edit/'+id, function ( user ) {
							console.log(user);

							$('#name').val( user.name );
							$('#email').val( user.email );
							$('#type_id').val( user.type_id );
							$('#num_id').val( user.num_id );
							$('#phone').val( user.phone);
							$('#f_nacimiento').val( user.f_nacimiento);
							$('#age').val( user.age);
							$('#sex').val( user.sex);
							$('#city').val( user.city);
							$('#direction').val( user.direction);
							$("input[name=_token]").val();

							$('#userEditModal').modal('toggle')
							
						} );
				} );

				//ACTUALIZAR DATOS 
				$('#actualizarDatosForm').submit( function ( event ) {
					event.preventDefault();

					var id =	$('#userId').val();
					var name = $('#name').val();
					var email = $('#email').val();
					var type_id = $('#type_id').val();
					var num_id = $('#num_id').val();
					var phone = $('#phone').val();
					var f_nacimiento = $('#f_nacimiento').val();
					var age = $('#age').val();
					var sex = $('#sex').val();
					var city = $('#city').val();
					var direction = $('#direction').val();
					var _token2 = $("input[name=_token]").val();

					$.ajax({
						url: " {{ route('user.update') }} ",
						type: 'POST',
						data: {
							id: id,
							name: name,
							email: email,
							type_id: type_id,
							num_id: num_id,
							phone: phone,
							f_nacimiento: f_nacimiento,
							age: age,
							sex: sex,
							city: city,
							direction: direction,
							_token: _token2
						},
							success: function ( response ) {
 
								if( response ){
                    $( '#userEditModal' ).modal('hide');
										toastr["success"]("Se actualiaron sus datos correctamente!")

												toastr.options = {
													"closeButton": false,
													"debug": false,
													"newestOnTop": false,
													"progressBar": false,
													"positionClass": "toast-top-right",
													"preventDuplicates": false,
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
                    // toastr.info('El registro se actualizó correctamente', ' Registro actualizado', { timeOut:3000 });
                    // $( '#table-animal' ).DataTable().ajax.reload();
                }
							}
					});

				} );


					// CAMBIAR CONTRASEÑA

							//validar contraseña


					var cambiarContraseña = document.querySelector('#cambiarContraseña');
					cambiarContraseña.addEventListener('click', function () {


						console.log('CONTRASEÑA');
						$('#cambiarContraseñaModal').modal('toggle')
					});

					$( '#cambiarContraseñaForm' ).submit( function ( event ) {
						event.preventDefault();

						// validPassword()

						var id =	$('#userId').val();
						var password =	$('#password').val();
						var _token2 = $("input[name=_token]").val();

								var password = document.querySelector('#password').value
								var password2 = document.querySelector('#password2').value

						if ( password === password2 ) { //VALIDACIÓN DE PASSWORD
									$.ajax({
									url: "{{ route('user.update') }}",
									type: 'POST',
									data: {
										id: id,
										password: password,
										_token: _token2
									},
										success: function ( response ) {

												document.getElementById("cambiarContraseñaForm").reset(); //reset form

												if( response ){
													$( '#cambiarContraseñaModal' ).modal('hide');
													toastr["success"]("Se actualizó su contraseña correctamente!")

															toastr.options = {
																"closeButton": false,
																"debug": false,
																"newestOnTop": false,
																"progressBar": false,
																"positionClass": "toast-top-right",
																"preventDuplicates": false,
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
								
											}
										}
									});
						} else {
								console.log('NO VALIDDO FORM');
								$( ".formInvalid" ).text( "Las contraseñas no coinciden!" ).show().fadeOut( 3000 );
						}



					} );

					// ORDENES MEDICAS

					var ordenesMedicas = document.querySelector('#ordenesMedicas')

					ordenesMedicas.addEventListener( 'click', function () {


						if ( $.fn.dataTable.isDataTable( '#tableOrder' ) ) {


							table = $('#tableOrder').DataTable();
						}
						else {
							table = $('#tableOrder').DataTable( {

	 
										 
												processing:true,
												serverSide:true,
                        responsive: true,
												autoWidth: false,
												language: {
														processing:     "Procesando...",
														search:         "Buscar",
														lengthMenu:    "Mostrar _MENU_ registros",
														info:           "Mostrando de _START_ a _END_  de _TOTAL_ elementos",
														infoEmpty:      "Ningún elemento encontrato",
														infoFiltered:   "(Filtrado de _MAX_ elementos en total)",
														infoPostFix:    "",
														loadingRecords: "Cargando...",
														zeroRecords:    "Nada encontrado...",
														emptyTable:     "Tabla vacía",
														paginate: {
																first:      "Primero",
																previous:   "Anterior",
																next:       "Siguiente",
																last:       "Último"
														}
												},
                     
                        // "serverSide": true,
                        "ajax":  "{{ route('ajaxResponseOrders') }}",
                        "columns": [
                            { data: 'id'},
                            { data: 'dx'},
                            { data: 'created_at',},
														{

															data: 'action'
 
														}
														
                        ]
								 
							} );
						}
 

						$('#ordenMedicaModal').modal('toggle');
						
					} )


					// CITAS MEDICAS
					var citasMedicas = document.querySelector('#citasMedicas')

					citasMedicas.addEventListener('click', function () {
		 


						
						$('#citaMedicaModal').modal('toggle');
					});
				
			}); // END READY

		</script>



 

		
@endsection