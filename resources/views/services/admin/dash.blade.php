<div id="dash" class="tabcontent animate__animated animate__fadeIn">
	
	<h4>Crear Usuario / Médico </h4>

					@if ( session('userCreado') == 'ok' )
							@section('script')
								<script>
											toastr["success"]("Usuario creado correctamente!", "Muy bien.<br>")

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
								</script>
							@endsection
					@endif

					{{--  FORM CREAR USUARIO --}}
						<form class="" id="formCrearUsuario" method="POST" action="{{ route('user.store') }}" >
							@csrf
							{{-- <input type="hidden" id="userId" value="{{ Auth::id()}} "> --}}
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="name">Nombre completo</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="nombre" value="{{ old('name') }}">
									@error('name')
											<div class="text-danger">{{ $message }}</div>
									@enderror
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<label for="email">Correo</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="email"  value="{{ old('email') }}" >
									@error('email')
									<div class="text-danger">{{ $message }}</div>
									@enderror
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
							</div>
	
							<div class="form-row">
								<div class="col-md-4 mb-3">
									<label for="type_id">Tipo ID</label>
									<select class="form-control" id="type_id" name="type_id" value="{{ old('type_id') }}">
										<option value="Cc">Cc</option>
										<option value="Nit">Nit</option>
										<option value="Pasaporte">Pasaporte</option>
										<option value="Otro">Otro</option>
									</select>
									@error('type_id')
											<div class="text-danger">{{ $message }}</div>
									@enderror
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<label for="num_id">ID</label>
									<input type="number" class="form-control" id="num_id" name="num_id" placeholder="Id"  value="{{ old('num_id') }}" >
									@error('num_id')
											<div class="text-danger">{{ $message }}</div>
									@enderror
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<label for="phone">Teléfono</label>
									<input type="tel" class="form-control" id="phone" name="phone" placeholder="Teléfono"  value="{{ old('phone') }}">
									@error('phone')
											<div class="text-danger">{{ $message }}</div>
									@enderror
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4 mb-3">
									<label for="f_nacimiento">Fecha Nacimiento</label>
									<input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="Fecha Nacimiento" value="{{ old('f_nacimiento') }}">
									@error('f_nacimiento')
											<div class="text-danger">{{ $message }}</div>
									@enderror
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<label for="age">Edad</label>
									<input type="number" class="form-control" id="age" name="age" placeholder="Edad"  value="{{ old('age') }}">
									@error('age')
											<div class="text-danger">{{ $message }}</div>
									@enderror
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<label for="sex">Sexo</label>
									<select class="form-control" id="sex" name="sex" value="{{ old('sex') }}">
										<option value="Masculino">Masculino</option>
										<option value="Femenino">Femenino</option>
										<option value="Otro">Otro</option>
									</select>
									@error('sex')
											<div class="text-danger">{{ $message }}</div>
									@enderror
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
							</div>
	
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="city">Ciudad</label>
									<input type="text" class="form-control" id="city" name="city" placeholder="Ciudad" value="{{ old('city') }}">
									@error('city')
											<div class="text-danger">{{ $message }}</div>
									@enderror
									<div class="invalid-feedback">
										Please provide a valid city.
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<label for="direction">Dirección</label>
									<input type="text" class="form-control" id="direction" name="direction" placeholder="Dirección" autocomplete="address-level1" value="{{ old('direction') }}">
									@error('direction')
											<div class="text-danger">{{ $message }}</div>
									@enderror
									<div class="invalid-feedback">
										Please provide a valid direction.
									</div>
								</div>

	
								  <div class="col-md-3 mb-3">
										<label for="type">Tipo de usuario</label>
										<select class="form-control" id="type" name="type" value="{{ old('type') }}">
											<option value="admin">Admin</option>
											<option value="medico">Médico</option>
											<option value="paciente">Paciente</option>
										</select>
										@error('type')
												<div class="text-danger">{{ $message }}</div>
										@enderror
										<div class="invalid-feedback">
											Please provide a valid zip.
										</div>
									</div> 
							</div>

							<div class="form-row">

								<div class="col-md-6 mb-3">
									<label for="password">Contraseña</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required autocomplete="new-password">
									@error('password')
											<div class="text-danger">{{ $message }}</div>
									@enderror
									<div id="invalid-password" class="formInvalid">
										Este campo es obligatorio
									</div>
									<span class="validacionform" id="validacionformPass"></span>
								</div>
	
								<div class="col-md-6 mb-3">
										<label for="password-confirm">Confirmar contraseña</label>
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Contraseña" required autocomplete="new-password">
										@error('password_confirmation')
										<div class="text-danger">{{ $message }}</div>
										@enderror
										<div id="invalid-password" class="formInvalid">
											Este campo es obligatorio
										</div>
										
								</div>
							</div> 
	 
	
							<div class="modal-footer">
								<button type="reset" class="btn btn-secondary">Cancelar</button>
								<button type="submit" class="btn btn-primary">Guardar datos...</button>
							</div>
	
						</form>
	 
						{{-- END FORM --}}
 
 


</div>

