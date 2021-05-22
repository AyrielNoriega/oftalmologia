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



<div class="container-fluid">
  <div class="row">
    {{-- <nav id="navbarSupportedContent" class="navsider col-md-3 col-lg-2 d-md-block bg-light sidebar collapse"> --}}
    <nav id="navbarSupportedContent" class="navsider col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-0 shadow ">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link tablinks btnOrdenes" onclick="openMedico(event, 'ordenes')" id="defaultOpen" href="#">
              <span data-feather="home"></span>
              Crear Orden <span class="sr-only">(current)</span>
            </a>
          </li>
					<li class="nav-item">
						<a class="nav-link tablinks btnCitas" onclick="openMedico(event, 'citas')"  href="#">
							<span data-feather="users"></span>
							Ver citas
						</a>
					</li>
        </ul>

      </div>
    </nav>

    {{-- <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"> --}}
    <section role="main" class="col-md-9  col-lg-10 px-md-4 mt-4 mt-sm-4 mt-md-0">



      @include('services.medico.orden')
      @include('services.medico.citas')

    </section>



  </div>
</div>
@endsection




@section('scripts')

    {{-- TOAStr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    {{-- datatable --}}
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>

    {{-- buttoo dattable --}}
    <script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>

		<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
		{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script> --}}
		<script src="{{ asset('js/dashboard.js') }}"></script>

    @yield('script')

 
    <script>
 
 
        
          
        // MANIPULACION TAP ADMIN
        function openMedico(evt, page) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(page).style.display = "block";
          evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();


        // END MANIPULACION TAP ADMIN

        document.querySelector('.btnCitas').addEventListener('click', () => {

          if ( $.fn.dataTable.isDataTable( '#tableCitas' ) ) {

              table = $('#tableCitas').DataTable();

          }
          else {
                table = $('#tableCitas').DataTable( {

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
                  "ajax":  "/cita/user",
                  // "ajax":  "/ajaxResponseOrders",
                  "columns": [
                      { data: 'id'},
                      { data: 'hora'},
                      { data: 'especialidad',},
                      {
                        data: 'action'
                      }
                      
                  ]

                } );
            }

        });
 


    </script>

@endsection