



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
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
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
							{{-- <th scope="col">ACCIÒN</th> --}}
						</tr>
					</thead>
					{{-- <tbody>
 
					</tbody> --}}
				</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>


{{-- END MODAL --}}