 
		


<div id="pacientes" class="tabcontent animate__animated animate__fadeIn">
	<div class="row justify-content-md-between mb-3">
		<h3 class="ml-3">Pacientes</h3> 
		<button class="btn btn-primary ml-3 mr-md-5 btnCrearPac">Crear Paciente</button> 
	</div> 

	<table class="table" id="tableUsers">
		<thead>
			<tr>

				<th scope="col">#</th>
				<th scope="col">Num Identidad</th>
				<th scope="col">Nombre</th>
				<th scope="col">Teléfono</th>
				<th scope="col">Accion</th>
			</tr>
		</thead>
		{{-- <tbody>

		</tbody> --}}
	</table>


</div>



<!-- Modal Crear paciente-->
<div class="modal fade" id="ModalCrearUser" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Crear Paciente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="ModalClose">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 

					<form class="needs-validation" id="CrearUserForm" >
						@csrf
						{{-- <input type="hidden" id="userId" value="{{ Auth::id()}} "> --}}
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="name">Nombre completo</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="nombre"  autofocus>
								<div id="invalid-name" class="formInvalid">
									Este campo es obligatorio
								</div>
								<span class="validacionform" id="validacionformName"></span>
							</div>
							<div class="col-md-6 mb-3">
								<label for="email">Correo</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="email"   >
								<div id="invalid-email" class="formInvalid">
									Este campo es obligatorio
								</div>
								<span class="validacionform" id="validacionformEmail"></span>
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
								<div id="invalid-type_id" class="formInvalid ">
									Este campo es obligatorio
								</div>
								<span class="validacionform" ></span>

							</div>
							<div class="col-md-4 mb-3">
								<label for="num_id">ID</label>
								<input type="number" class="form-control" id="num_id" name="num_id" placeholder="Num identidad"   >
								<div id="invalid-num_id" class="formInvalid">
									Este campo es obligatorio
								</div>
								<span class="validacionform" id="validacionformNumId"></span>
							</div>
							<div class="col-md-4 mb-3">
								<label for="phone">Teléfono</label>
								<input type="tel" class="form-control" id="phone" name="phone" placeholder="Teléfono"  >
								{{-- <div id="invalid-phone" class="formInvalid">
									Este campo es obligatorio
								</div> --}}
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-4 mb-3">
								<label for="f_nacimiento">Fecha Nacimiento</label>
								<input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="Fecha Nacimiento" >
								{{-- <div id="invalid-f_nacimiento" class="formInvalid">
									Este campo es obligatorio
								</div> --}}
							</div>
							<div class="col-md-4 mb-3">
								<label for="age">Edad</label>
								<input type="number" class="form-control" id="age" name="age" placeholder="Edad"  >
								{{-- <div id="invalid-number" class="formInvalid">
									Este campo es obligatorio
								</div> --}}
							</div>
							<div class="col-md-4 mb-3">
								<label for="sex">Sexo</label>
								{{-- <input type="text" class="form-control" id="sex" name="sex" placeholder="Sexo"  > --}}
								<select class="form-control" id="sex" name="sex" >
									<option value="Masculino">Masculino</option>
									<option value="Femenino">Femenino</option>
									<option value="Otro">Otro</option>
								</select>
								{{-- <div id="invalid-sex" class="formInvalid">
									Este campo es obligatorio
								</div> --}}
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="city">Ciudad</label>
								<input type="text" class="form-control" id="city" name="city" placeholder="Ciudad" >
								{{-- <div id="invalid-city" class="formInvalid">
									Este campo es obligatorio
								</div> --}}
							</div>

							<div class="col-md-6 mb-3">
								<label for="direction">Dirección</label>
								<input type="text" class="form-control" id="direction" name="direction" placeholder="Dirección" autocomplete="address-line1">
								{{-- <div class="invalid-feedback">
									Please provide a valid direction.
								</div> --}}
							</div>

						</div>
							<div class="form-row">

								<div class="col-md-6 mb-3">
									<label for="password">Contraseña</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" autocomplete="new-password">
									<div id="invalid-password" class="formInvalid">
										Este campo es obligatorio
									</div>
									<span class="validacionform" id="validacionformPass"></span>
								</div>
	
								<div class="col-md-6 mb-3">
										<label for="password-confirm">Confirmar contraseña</label>
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
										<div id="invalid-password" class="formInvalid">
											Este campo es obligatorio
										</div>
										
								</div>
							</div>

						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" id="btnCancelar" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary " id="btnSubmit" disabled>Guardar...</button>
						</div>

					</form>
 
      </div>

    </div>
  </div>
</div>
{{-- END MODAL --}}






 