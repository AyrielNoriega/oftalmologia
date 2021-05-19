		
<div id="ordenes" class="tabcontent animate__animated animate__fadeIn">
	<form>
		<h4 class="text-info">OD</h4>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputEmail4">ESF</label>
				<input type="text" class="form-control form-control-sm" id="inputEmail4">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputPassword4">CYL</label>
				<input type="text" class="form-control form-control-sm" id="inputPassword4">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputPassword4">EJE</label>
				<input type="text" class="form-control form-control-sm" id="inputPassword4">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputPassword4">CÓDIGO</label>
				<input type="text" class="form-control form-control-sm" id="inputPassword4">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputPassword4">AV</label>
				<input type="text" class="form-control form-control-sm" id="inputPassword4">
			</div>
		</div>
		<h4 class="text-info">Oi</h4>
		<div class="form-row">
	 
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputEmail4">ESF</label>
				<input type="text" class="form-control form-control-sm" id="inputEmail4">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputPassword4">CYL</label>
				<input type="text" class="form-control form-control-sm" id="inputPassword4">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputPassword4">EJE</label>
				<input type="text" class="form-control form-control-sm" id="inputPassword4">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputPassword4">CÓDIGO</label>
				<input type="text" class="form-control form-control-sm" id="inputPassword4">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputPassword4">AV</label>
				<input type="text" class="form-control form-control-sm" id="inputPassword4">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputEmail4">Color</label>
				<input type="text" class="form-control form-control-sm" id="inputEmail4">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputPassword4">Eje: ADD</label>
				<input type="text" class="form-control form-control-sm" id="inputPassword4">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputPassword4">Bifocal</label>
				<input type="text" class="form-control form-control-sm" id="inputPassword4">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputPassword4">Eje: DEP</label>
				<input type="text" class="form-control form-control-sm" id="inputPassword4">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputPassword4">Código: ALT</label>
				<input type="text" class="form-control form-control-sm" id="inputPassword4">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputEmail4">Tipo de lente</label>
				<input type="text" class="form-control form-control-sm" id="inputEmail4">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputPassword4">Fotocromatico</label>
				<input type="text" class="form-control form-control-sm" id="inputPassword4">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputPassword4">Material</label>
				<input type="text" class="form-control form-control-sm" id="inputPassword4">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="inputPassword4">Filtro</label>
				<input type="text" class="form-control form-control-sm" id="inputPassword4">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label class="font-italic" for="observaciones">Observaciones</label>
				{{-- <input type="text" class="form-control" id="inputCity"> --}}
				<textarea class="form-control" name="observaciones" id="observaciones" cols="30" rows="1"></textarea>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label class="font-italic" for="paciente">Paciente</label>
				<select   class="form-control" id="paciente" name="paciente">
					<option selected>Seleccione Paciente</option>
					@foreach ($users as $user)
							
					@endforeach
					<option value="{{ $user->id }}">{{ $user->name }} - {{ $user->num_id }}</option>
				</select>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Guardar Orden</button>
	</form>


</div>