@extends('layouts.app')

@section('style')
		<link rel="stylesheet" href="{{ asset('css/services.css') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('content')

<div class="container">
	<div class="row my-md-5 my-4  mx-3 ">
		<h3>Officina virtual</h3>
	</div>
	<div class="row row-cols-1 row-cols-md-3 ">
		<div class="col col-md-3 mb-4">
			<div class="card h-100">
				{{-- <i class="fas fa-file-medical medical"></i> --}}
				{{-- <img src="{{ asset('assets/img/default.png') }}" class="card-img-top" alt="..."> --}}
				<div class="card-body">
					<div class="btn-service">
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
					<div class="btn-service">
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

	{{-- MODAL --}}
	<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userEditModal">
  Launch static backdrop modal
</button> --}}

<!-- Modal Actualizar datos-->
<div class="modal fade" id="userEditModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Actualizar datos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 

					<form class="needs-validation" id="actualizarDatosForm" >
						@csrf
						<input type="hidden" id="userId" value="{{ Auth::id()}} ">
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="name">Nombre completo</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="nombre"  " required>
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="email">Correo</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="correo@correo.com"   required>
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="city">Ciudad</label>
								<input type="text" class="form-control" id="city" name="city" >
								<div class="invalid-feedback">
									Please provide a valid city.
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="direction">Dirección</label>
								<input type="text" class="form-control" id="direction" name="direction">
								<div class="invalid-feedback">
									Please provide a valid direction.
								</div>
							</div>

							{{-- <div class="col-md-3 mb-3">
								<label for="validationCustom05">Zip</label>
								<input type="text" class="form-control" id="validationCustom05" required>
								<div class="invalid-feedback">
									Please provide a valid zip.
								</div>
							</div> --}}
						</div>
 

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary">Actualizar...</button>
						</div>

					</form>
					


 
      </div>

    </div>
  </div>
</div>
{{-- END MODAL --}}
<!-- Modal Cambiar Contraseña-->
<div class="modal fade" id="cambiarContraseñaModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Cambiar contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 

					<form class="needs-validation" id="cambiarContraseñaForm" >
						@csrf
						{{-- <input type="hidden" id="userId" value="{{ Auth::id()}} "> --}}
						<div class="form-group">
							<label for="password">Escriba su nueva contraseña</label> <span class="formInvalid text-danger"></span>
							<input type="password" class="form-control" id="password" placeholder="Contraseña" aria-describedby="passwordHelpBlock" required>
							<small id="passwordHelpBlock" class="form-text text-muted">
								Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
							</small>
						</div>
						<div class="form-group">
							<label for="password2">Repita la contraseña</label> <span class="formInvalid text-danger"></span>
							<input type="password" class="form-control" id="password2" name="password" placeholder="Contraseña" required>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary">Actualizar...</button>
						</div>

					</form>
					


 
      </div>

    </div>
  </div>
</div>
{{-- END MODAL --}}

	<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021 - 2022 Oftisoft</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad</a></li>
      <li class="list-inline-item"><a href="#">Termninos</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
    </ul>
  </footer>


</div>

	
@endsection


@section('scripts')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

		<script>

			$( document ).ready(function() {

				//EDITAR DATOS 	
				var actualizarDatos = document.querySelector('#actualizarDatos')

				actualizarDatos.addEventListener( 'click', function ( event ) {
			 
					var id = 	$('#userId').val();

						$.get( '/user/edit/'+id, function ( user ) {
							// console.log(user);

							$('#name').val( user.name );
							$('#email').val( user.email);
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
					var name =	$('#name').val();
					var email =	$('#email').val();
					var city =	$('#city').val();
					var direction =	$('#direction').val();
					var _token2 = $("input[name=_token]").val();

					$.ajax({
						url: " {{ route('user.update') }} ",
						type: 'POST',
						data: {
							id: id,
							name: name,
							email: email,
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

				// END READY
			});

		</script>



 

		
@endsection