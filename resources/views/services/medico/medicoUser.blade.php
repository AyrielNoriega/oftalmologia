@extends('layouts.app')

@section('style')
 
	<link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

  {{-- toasTr --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

  {{-- datatable --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css"/>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css"/>

  {{-- animate css --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

@endsection

@section('content')



<div class="container">
 
			<section class="row mb-4 mt-4 shadow">
				<div class="col">
					<p id="userId" hidden>{{ $user->id }}</p>
					<p class="text-uppercase"><b> F. Inscripción: </b> {{ empty( $user->created_at ) ? '---' : $user->created_at->isoFormat( 'DD MMMM  YYYY, h:mm:ss a' ) }} </p>
					<p class="text-uppercase"><b>F. Nacimiento: </b>{{ empty( $user->f_nacimiento ) ? '---' : $user->f_nacimiento }}</p>
					<p class="text-uppercase"><b> Teléfono: </b> {{ empty( $user->phone ) ? '---' : $user->phone }}</p>
					<p class="text-uppercase"><b> Correo: </b> {{ empty( $user->email ) ? '---' : $user->email }}</p>
				</div>
				<div class="col">
					<p class="text-uppercase"><b>Nombre: </b> {{ $user->name }} </p>
					<p class="text-uppercase"><b>Edad: </b> {{ empty( $user->age ) ? '---' : $user->age }} </p>
					<p class="text-uppercase"><b>Ciudad: </b> {{ empty( $user->city ) ? '---' : $user->city }} </p>
					<p class="text-uppercase"><b>Dirección: </b> {{ empty( $user->direction ) ? '---' : $user->direction }} </p>
				</div>
				<div class="col">
					<p class="text-uppercase"><b>Tipo Doc Identidad: </b> {{ empty( $user->type_id ) ? '---' : $user->type_id }} </p>
					<p class="text-uppercase"><b>Historial/Doc Identidad: </b> {{ empty( $user->num_id ) ? '---' : $user->num_id }} </p>
					<p class="text-uppercase"><b>Sexo: </b> {{ empty( $user->sex ) ? '---' : $user->sex }} </p>
				</div>
		
			</section>

			<section class="row">
				<div class="col-md-12">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Historial Ordenes</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Historial Citas</a>
							</li>
							</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<table class="table" id="tableOrdenesUsuario">
									<thead>
										<tr>
							
											<th scope="col">#</th>
											<th scope="col">Diagnostico</th>
											<th scope="col">Fecha</th>
											<th scope="col">&nbsp;</th>
 
										</tr>
									</thead>
									{{-- <tbody>
							
									</tbody> --}}
								</table>
							</div>
							<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<table class="table" id="tableCitasUsuario">
									<thead>
										<tr>
							
											<th scope="col">Día</th>
											<th scope="col">Fecha</th>
											<th scope="col">Creación</th>
											<th scope="col">&nbsp;</th>

										</tr>
									</thead>
									{{-- <tbody>
							
									</tbody> --}}
								</table>
							</div>
							</div>
				</div>
			</section>
 
 


 
</div>
@endsection




@section('scripts')

    {{-- TOAStr --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}

    {{-- datatable --}}
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

    {{-- buttoo dattable --}}
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>

		{{-- <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script> --}}
		{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script> --}}
		{{-- <script src="{{ asset('js/dashboard.js') }}"></script> --}}

 
 
 <script>
	 			// ORDENES

				 var userId = document.getElementById('userId').innerHTML;

				if ( $.fn.dataTable.isDataTable( '#tableOrdenesUsuario' ) ) {


				table = $('#tableOrdenesUsuario').DataTable();
				}
				else {
				table = $('#tableOrdenesUsuario').DataTable( {


			 
					processing:true,
					serverSide:true,
					responsive: true,
					autoWidth: false,
					language: {
							processing:     "Procesando...",
							search:         "Buscar",
							lengthMenu:    "Mostrar _MENU_ registros",
							info:           "Mostrando de _START_ a _END_  de _TOTAL_ elementos",
							infoEmpty:      "Ningún elemento encontrato",
							infoFiltered:   "(Filtrado de _MAX_ elementos en total)",
							infoPostFix:    "",
							loadingRecords: "Cargando...",
							zeroRecords:    "Nada encontrado...",
							emptyTable:     "Tabla vacía",
							paginate: {
									first:      "Primero",
									previous:   "Anterior",
									next:       "Siguiente",
									last:       "Último"
							}
					},
			 
					// "serverSide": true,
					// "ajax":  "{{ route('ajaxResponseOrders') }}",
					"ajax":  "/ajaxOrders/"+userId,
					"columns": [
							{ data: 'id'},
							{ data: 'dx'},
							{ data: 'created_at',},
							{

								data: 'action'

							}
							
					]
	 
				} );
			
			}



			// CITAS


			var userId = document.getElementById('userId').innerHTML;

			if ( $.fn.dataTable.isDataTable( '#tableCitasUsuario' ) ) {


			table = $('#tableCitasUsuario').DataTable();
			}
			else {
			table = $('#tableCitasUsuario').DataTable( {



					processing:true,
					serverSide:true,
					responsive: true,
					autoWidth: false,
					language: {
							processing:     "Procesando...",
							search:         "Buscar",
							lengthMenu:    "Mostrar _MENU_ registros",
							info:           "Mostrando de _START_ a _END_  de _TOTAL_ elementos",
							infoEmpty:      "Ningún elemento encontrato",
							infoFiltered:   "(Filtrado de _MAX_ elementos en total)",
							infoPostFix:    "",
							loadingRecords: "Cargando...",
							zeroRecords:    "Nada encontrado...",
							emptyTable:     "Tabla vacía",
							paginate: {
									first:      "Primero",
									previous:   "Anterior",
									next:       "Siguiente",
									last:       "Último"
							}
					},

						// "serverSide": true,
						// "ajax":  "{{ route('ajaxResponseOrders') }}",
						"ajax":  "/ajaxCitas/"+userId,
						"columns": [
								{ data: 'dia'},
								{ data: 'especialidad'},
								{ data: 'created_at',},
								// {

								// 	data: 'action'

								// }
								
						]

				} );

			}	




 </script>
 
 

@endsection