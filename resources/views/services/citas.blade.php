@extends('layouts.app')

@section('style')
		<link rel="stylesheet" href="{{ asset('css/services.css') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col mt-4 mb-3">
				<h2>Citas médicas</h2>
				<p>AYRIEL NORIEGA MONROY - CC 1027544333</p>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<form>
					{{-- <div class="form-group">
						<label for="exampleFormControlInput1">Email address</label>
						<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
					</div> --}}
					<div class="form-group">
						<label for="ciudad">Ciudad</label>
						<select class="form-control" id="ciudad" name="ciudad">
							<option selected>Seleccione Ciudad</option>
							<option>Bogotá</option>
							<option>Cali</option>
							<option>Valle</option>
							<option>Cauca</option>
						</select>
					</div>
					<div class="form-group">
						<label for="especialidad">Especialidad</label>
						<select   class="form-control" id="especialidad" name="especialidad">
							<option selected>Seleccione Especialidad</option>
							<option>EPS Optometris</option>
							<option>Medicina Prepagada Optometria</option>
							<option>Premium Optometria</option>
							<option>Otro</option>
						</select>
					</div>
					<div class="form-group">
						<label for="sede">Sede</label>
						<select   class="form-control" id="sede" name="sede">
							<option selected>Seleccione sede</option>
							<option>Principal</option>
							<option>Segundaria</option>
 
						</select>
					</div>
					<div class="form-group">
						<label for="fecha">Fecha</label>
						<input type="date" name="fecha" id="fecha">
					</div>

					<div class="form-row">
						<div class="col">
							<label for="horaDesde">Hora</label>
							<input type="time" class="form-control" name="horaDesde" id="horaDesde">
						</div>
						<div class="col">
							<label for="horaHasta">Hora</label>
							<input type="time" class="form-control" name="horaHasta" id="horaHasta">
						</div>
 
					</div>

					<div class="form-group">
						<div class="col text-center mt-2">
							<label for="fecha">Fecha</label>
							<button type="button" class="btn-group btn btn-sm btn-primary">Lunes</button>
							<button type="button" class="btn-group btn btn-sm btn-primary">Martes</button>
							<button type="button" class="btn-group btn btn-sm btn-primary">Miercoles</button>
							<button type="button" class="btn-group btn btn-sm btn-primary">Jueves</button>
							<button type="button" class="btn-group btn btn-sm btn-primary">Viernes</button>
							<button type="button" class="btn-group btn btn-sm btn-primary">Sabado</button>
							<button type="button" class="btn-group btn btn-sm btn-primary">Domingo</button>
						</div>
					</div>

 

 
				</form>
			</div>
		</div>

		
	</div>
@endsection