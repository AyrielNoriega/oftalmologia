			@if ( session('OrdenCreada') == 'ok' )
					@section('script')
						<script>
									toastr["success"]("Orden creada correctamente!", "Muy bien.<br>")

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


<div id="ordenes" class="tabcontent animate__animated animate__fadeIn">
	<form method="POST" action="{{ route('store.order') }}">
		@csrf
		<h4 class="text-info">OD</h4>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label class="font-italic" for="od_esf">ESF</label>
				<input type="text" class="form-control form-control-sm" id="od_esf" name="od_esf">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="od_cyl">CYL</label>
				<input type="text" class="form-control form-control-sm" id="od_cyl" name="od_cyl">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="od_eje">EJE</label>
				<input type="text" class="form-control form-control-sm" id="od_eje" name="od_eje">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="od_codigo">CÓDIGO</label>
				<input type="text" class="form-control form-control-sm" id="od_codigo" name="od_codigo">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="od_av">AV</label>
				<input type="text" class="form-control form-control-sm" id="od_av" name="od_av">
			</div>
		</div>
		<h4 class="text-info">Oi</h4>
		<div class="form-row">
	 
			<div class="form-group col-md-3">
				<label class="font-italic" for="oi_esf">ESF</label>
				<input type="text" class="form-control form-control-sm" id="oi_esf" name="oi_esf">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="oi_cyl">CYL</label>
				<input type="text" class="form-control form-control-sm" id="oi_cyl" name="oi_cyl">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="oi_eje">EJE</label>
				<input type="text" class="form-control form-control-sm" id="oi_eje" name="oi_eje">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="oi_codigo">CÓDIGO</label>
				<input type="text" class="form-control form-control-sm" id="oi_codigo" name="oi_codigo">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="oi_av">AV</label>
				<input type="text" class="form-control form-control-sm" id="oi_av" name="oi_av">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-3">
				<label class="font-italic" for="color">Color</label>
				<input type="text" class="form-control form-control-sm" id="color" name="color">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="add">Eje: ADD</label>
				<input type="text" class="form-control form-control-sm" id="add" name="add">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="bifocal">Bifocal</label>
				<input type="text" class="form-control form-control-sm" id="bifocal" name="bifocal">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="dep">Eje: DEP</label>
				<input type="text" class="form-control form-control-sm" id="dep" name="dep">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="alt">Código: ALT</label>
				<input type="text" class="form-control form-control-sm" id="alt" name="alt">
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-3">
				<label class="font-italic" for="tipo_pente">Tipo de lente</label>
				<input type="text" class="form-control form-control-sm" id="tipo_pente" name="tipo_pente">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="fotocromatico">Fotocromatico</label>
				<input type="text" class="form-control form-control-sm" id="fotocromatico" name="fotocromatico">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="material">Material</label>
				<input type="text" class="form-control form-control-sm" id="material" name="material">
			</div>
			<div class="form-group col-md-3">
				<label class="font-italic" for="filtro">Filtro</label>
				<input type="text" class="form-control form-control-sm" id="filtro" name="filtro">
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label class="font-italic" for="observaciones">Observaciones</label>
				@error('observaciones')
				<div class="text-danger">{{ $message }}</div>
				@enderror
				{{-- <input type="text" class="form-control" id="inputCity"> --}}
				<textarea class="form-control" name="observaciones" id="observaciones" name="observaciones" cols="30" rows="1"></textarea>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label class="font-italic" for="paciente">Paciente</label>
				@error('paciente')
				<div class="text-danger">{{ $message }}</div>
				@enderror
				<select   class="form-control" id="paciente" name="paciente">
					<option value="" disabled selected>Seleccione Paciente</option>
					@foreach ($users as $user)
						<option value="{{ $user->id }}">{{ $user->name }} - {{ $user->num_id }}</option>
					@endforeach
				</select>
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Guardar Orden</button>
	</form>


</div>