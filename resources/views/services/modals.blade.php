



<!-- Modal Actualizar datos-->
<div class="modal fade" id="userEditModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
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
								<input type="text" class="form-control" id="name" name="name" placeholder="nombre" >
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="email">Correo</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="email"   >
								<div class="valid-feedback">
									Looks good!
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
									Looks good!
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<label for="num_id">ID</label>
								<input type="number" class="form-control" id="num_id" name="num_id" placeholder="Id"   >
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<label for="phone">Teléfono</label>
								<input type="tel" class="form-control" id="phone" name="phone" placeholder="Teléfono"  >
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-4 mb-3">
								<label for="f_nacimiento">Fecha Nacimiento</label>
								<input type="date" class="form-control" id="f_nacimiento" name="f_nacimiento" placeholder="Fecha Nacimiento">
								<div class="valid-feedback">
									Looks good!
								</div>
							</div>
							<div class="col-md-4 mb-3">
								<label for="age">Edad</label>
								<input type="number" class="form-control" id="age" name="age" placeholder="Edad"  >
								<div class="valid-feedback">
									Looks good!
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
									Looks good!
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

							{{-- <div class="col-md-3 mb-3">
								<label for="validationCustom05">Zip</label>
								<input type="text" class="form-control" id="validationCustom05" >
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





{{-- MODAL ORDENES MÉDICAS --}}


<!-- Button trigger modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Launch static backdrop modal
</button> --}}

<!-- Modal -->
<div class="modal fade " id="ordenMedicaModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Ordenes Médicas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
				<table class="table" id="tableOrder">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">DIAGNOSTICO</th>
							<th scope="col">FECHA</th>
							<th scope="col">&nbsp;</th>
						</tr>
					</thead>
					{{-- <tbody>
 
					</tbody> --}}
				</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        {{-- <button type="button" class="btn btn-primary">Understood</button> --}}
      </div>
    </div>
  </div>
</div>


{{-- END MODAL --}}