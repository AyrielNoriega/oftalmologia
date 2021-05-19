<div id="dash" class="tabcontent animate__animated animate__fadeIn">
	
	<h4>Crear Usuario / Médico </h4>


					{{--  FORM CREAR USUARIO --}}
						<form class="" id="formCrearUsuario" method="POST" action="{{ route('user.store') }}" >
							@csrf
							<input type="hidden" id="userId" value="{{ Auth::id()}} ">
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="name">Nombre completo</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="nombre" >
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<label for="email">Correo</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="email"   >
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
							</div>
	
							<div class="form-row">
								<div class="col-md-4 mb-3">
									<label for="type_id">Tipo ID</label>
									<select class="form-control" id="type_id" name="type_id">
										<option value="Cc">Cc</option>
										<option value="Nit">Nit</option>
										<option value="Pasaporte">Pasaporte</option>
										<option value="Otro">Otro</option>
									</select>
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<label for="num_id">ID</label>
									<input type="number" class="form-control" id="num_id" name="num_id" placeholder="Id"   >
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<label for="phone">Teléfono</label>
									<input type="tel" class="form-control" id="phone" name="phone" placeholder="Teléfono"  >
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4 mb-3">
									<label for="f_nacimiento">Fecha Nacimiento</label>
									<input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="Fecha Nacimiento">
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<label for="age">Edad</label>
									<input type="number" class="form-control" id="age" name="age" placeholder="Edad"  >
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
								<div class="col-md-4 mb-3">
									<label for="sex">Sexo</label>
									{{-- <input type="text" class="form-control" id="sex" name="sex" placeholder="Sexo"  > --}}
									<select class="form-control" id="sex" name="sex">
										<option value="Masculino">Masculino</option>
										<option value="Femenino">Femenino</option>
										<option value="Otro">Otro</option>
									</select>
									<div class="valid-feedback">
										Muy bien!
									</div>
								</div>
							</div>
	
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="city">Ciudad</label>
									<input type="text" class="form-control" id="city" name="city" placeholder="Ciudad">
									<div class="invalid-feedback">
										Please provide a valid city.
									</div>
								</div>
								<div class="col-md-6 mb-3">
									<label for="direction">Dirección</label>
									<input type="text" class="form-control" id="direction" name="direction" placeholder="Dirección">
									<div class="invalid-feedback">
										Please provide a valid direction.
									</div>
								</div>
	
								  <div class="col-md-3 mb-3">
										<label for="type">Tipo de usuario</label>
										<select class="form-control" id="type" name="type">
											<option value="admin">Admin</option>
											<option value="medico">Médico</option>
											<option value="paciente">Paciente</option>
										</select>
										<div class="invalid-feedback">
											Please provide a valid zip.
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

