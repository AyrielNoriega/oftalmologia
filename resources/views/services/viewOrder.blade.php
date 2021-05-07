<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <title>Checkout example · Bootstrap v4.6</title>

 
		<link rel="stylesheet" href="{{ asset('fontawesome/fontawesome-free-5.15.1-web/css/all.css') }}">

    <!-- Bootstrap core CSS -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/viewOrder.css') }}">

  </head>
  <body>
<div class="container">
	<div class="row">
		<div class="col mt-2 text-center">
			<button class="btn btn-outline-dark mt-1" onclick="window.print()"><i class="fas fa-print"></i> Imprimir</button>
			<button class="btn btn-outline-dark mt-1"  id="btnCrearPdf"><i class="fas fa-file-download"></i> Descargar PDF</button>
			<button class="btn btn-outline-dark mt-1"  id="btnEnviarCorreo"><i class="far fa-envelope"></i> Enviar por correo</button>
		</div>
	</div>
</div>
<div class="container" id="content">

  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="{{ asset('assets/img/Logo negro.PNG') }}" alt="optisoft" width="120" >
    <h2>Optisoft</h2>
    <p class="lead"><span>CC Campanario</span> <span class="">TELEFONO 999999999</span>  </p>
		<p class="lead">CARRERA 9 #49-55, Popayan Cauca-Colombia </p>
 
  </div>

	<div class="row mb-4">
		<div class="col">

			<p class="text-uppercase"><b> F. Inscripción: </b> {{ empty( $order->user->created_at ) ? '---' : $order->user->created_at->isoFormat( 'DD MMMM  YYYY, h:mm:ss a' ) }} </p>
			<p class="text-uppercase"><b>F. Nacimiento: </b>{{ empty( $order->user->f_nacimiento ) ? '---' : $order->user->f_nacimiento }}</p>
			<p class="text-uppercase"><b> Teléfono: </b> {{ empty( $order->user->phone ) ? '---' : $order->user->phone }}</p>
		</div>
		<div class="col">
			<p class="text-uppercase"><b>Nombre: </b> {{ $order->user->name }} </p>
			<p class="text-uppercase"><b>Edad: </b> {{ empty( $order->user->age ) ? '---' : $order->user->age }} </p>
			<p class="text-uppercase"><b>Dirección: </b> {{ empty( $order->user->direction ) ? '---' : $order->user->direction }} </p>
		</div>
		<div class="col">
			<p class="text-uppercase"><b>Tipo Doc Identidad: </b> {{ empty( $order->user->type_id ) ? '---' : $order->user->type_id }} </p>
			<p class="text-uppercase"><b>Sexo: </b> {{ empty( $order->user->sex ) ? '---' : $order->user->sex }} </p>
			<p class="text-uppercase"><b>Historial/Doc Identidad: </b> {{ empty( $order->user->num_id ) ? '---' : $order->user->num_id }} </p>
		</div>

	</div>

	<div class="row">
		<div class="col">
			<p><b>DX: </b>{{ $order->dx }}</p>
			<h5 class="d-flex justify-content-between align-items-center mb-3">
        FORMULA:
      </h5>
		</div>
		<div class="col">
			<h5 class="mb-3">Fecha: {{ $order->created_at->isoFormat( 'DD MMMM  YYYY, h:mm:ss a' ) }}</h5>
		</div>
	</div>
  <div class="row mb-5">
    <div class="col-md-8">
      {{-- <h4 class="d-flex justify-content-between align-items-center mb-3"> --}}
        {{-- <span class="text-muted">Your cart</span> --}}
        {{-- FORMULA --}}
      {{-- </h4> --}}
  
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>&nbsp;</th>
						<th>ESF</th>
						<th>CYL</th>
						<th>EJE</th>
						<th>CÓDIGO</th>
						<th>AV</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>OD</th>
						<td>{{ $order->od_esf }}</td>
						<td>{{ $order->od_cyl }}</td>
						<td>{{ $order->od_eje }}</td>
						<td>{{ $order->od_codigo }}</td>
						<td>{{ $order->od_av }}</td>
					</tr>
					<tr>
						<th>OI</th>
						<td>{{ $order->oi_esf }}</td>
						<td>{{ $order->oi_cyl }}</td>
						<td>{{ $order->oi_eje }}</td>
						<td>{{ $order->oi_codigo }}</td>
						<td>{{ $order->oi_av }}</td>
					</tr>
					<tr>
						<td colspan="3">COLOR: {{ $order->color }}</td>
						<td>ADD: {{ $order->add }}</td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td colspan="3">BIFOCAL: {{ $order->bifocal }}</td>
						<td>DEP: {{ $order->dep }}</td>
						<td>ALT: {{ $order->alt }}</td>
						<td></td>
					</tr>
					<tr>
						<td colspan="6">OBSERVACIONES: {{ $order->observaciones }}</td>
					</tr>
				</tbody>
			</table>

    </div>
    <div class="col-md-4">
      {{-- <h4 class="mb-3">Fecha: </h4> --}}
			<table class="table table-bordered">
				{{-- <thead>
					<tr>
						<th>&nbsp;</th>
						<th>ESF</th>
						<th>CYL</th>
						<th>EJE</th>
						<th>CÓDIGO</th>
						<th>AV</th>
					</tr>
				</thead> --}}
				<tbody>
					<tr>
						<td> <b> TIPO LENTE: </b> {{ $order->tipo_lente }}</td>
					</tr>
					<tr>
						<td><b>FOTOCROMATICO: </b> {{ $order->fotocromatico }}</td>
					</tr>
	 
					<tr>
						<td> <b>MATERIAL: </b> {{ $order->material }}</td>
					</tr>
		 
					<tr>
						<td> <b>FILTRO: </b> {{ $order->filtro }}</td>
					</tr>
 
 
				</tbody>
			</table>
    </div>
				<div class="col text-center">
						<span> Profesional: Wilson Munoz - Registro 1221</span>
				</div> 
	</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw==" crossorigin="anonymous"></script>

<script>

	var btnCrearPdf = document.querySelector('#btnCrearPdf')
	
	btnCrearPdf.addEventListener('click', function () {
		
		var  elementoParaConvertir = document.querySelector('#content'); // <-- Aquí puedes elegir cualquier elemento del DOM
		var opt = {
				margin:       1,
				filename:     'orden.pdf',
				image:        { type: 'jpeg', quality: 0.98 },
				html2canvas:  { scale: 2, letterRendering: true },
				jsPDF:        { unit: 'in', format: 'a3', orientation: 'portrait' }
		};
 
		html2pdf().set(opt).from(elementoParaConvertir).save();
 
 

	})
	

</script>


  </body>
</html>
