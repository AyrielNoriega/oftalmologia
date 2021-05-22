

 
		
<div id="medicos" class="tabcontent animate__animated animate__fadeIn">

	<div class="row justify-content-md-between mb-3">
		<h3 class="ml-3">Médicos</h3> 
		{{-- <button class="btn btn-primary ml-3 mr-md-5 btnCrearMedico">Crear Médico</button>  --}}
	</div> 

	<table class="table" id="tableMedicos">
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



<!-- Modal Crear Medico-->
{{-- <div class="modal fade" id="ModalCrearMedico" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Crear Médico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="ModalCloseMedico">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
 

					<form class="needs-validation" id="CrearMedicoForm" >
						@csrf
				 
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="nombre">Nombre completo</label>
								<input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre"  autofocus>
								<div id="invalid-nombre" class="formInvalid">
									Este campo es obligatorio
								</div>
								<span class="validacionform" id="validacionformNombre"></span>
							</div>
							<div class="col-md-6 mb-3">
								<label for="correo">Correo</label>
								<input type="email" class="form-control" id="correo" name="correo" placeholder="Correo"  autocomplete="email">
								<div id="invalid-correo" class="formInvalid">
									Este campo es obligatorio
								</div>
								<span class="validacionform" id="validacionformCorreo"></span>
							</div>
						</div>

						<div class="form-row">

							<div class="col-md-6 mb-3">
								<label for="numero_id">ID</label>
								<input type="number" class="form-control" id="numero_id" name="numero_id" placeholder="Num identidad">
								<div id="invalid-numero_id" class="formInvalid">
									Este campo es obligatorio
								</div>
								<span class="validacionform" id="validacionformNumero_Id"></span>
							</div>
							<div class="col-md-6 mb-3">
								<label for="telefono">Teléfono</label>
								<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Teléfono"  autocomplete="tel">
 
							</div>
						</div>



						<div class="form-row">

								<div class="col-md-6 mb-3">
									<label for="contraseña">Contraseña</label>
									<input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" autocomplete="new-password">
									<div id="invalid-contraseña" class="formInvalid">
										Este campo es obligatorio
									</div>
									<span class="validacionform" id="validacionformContrasena"></span>
								</div>
	
								<div class="col-md-6 mb-3">
										<label for="contrasena-confirm">Confirmar contraseña</label>
										<input id="contrasena-confirm" type="password" class="form-control" name="contrasena_confirmation" required autocomplete="new-password">
										<div id="invalid-contrasena" class="formInvalid">
											Este campo es obligatorio
										</div>
										
								</div>

						</div>
						<div class="form-row">

								<div class="col-md-6 mb-3">
									<label for="registro">Registro</label>
									<input type="text" class="form-control" id="registro" name="registro" placeholder="Registro">
									<div id="invalid-registro" class="formInvalid">
										Este campo es obligatorio
									</div>
									<span class="validacionform" id="validacionFormRegistro"></span>
								</div>
						</div>
			 

						<div class="modal-footer footerMedico">
							<button type="button" class="btn btn-secondary" id="btnCancelarMedico" data-dismiss="modal">Cancelar</button>
							<button type="submit" class="btn btn-primary " id="btnSubmitMedico" disabled>Guardar...</button>
						</div>

					</form>
 
      </div>

    </div>
  </div>
</div> --}}
{{-- END MODAL --}}




 