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
            <a class="nav-link tablinks" onclick="openCity(event, 'dash')" id="defaultOpen" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
					<li class="nav-item">
						<a class="nav-link tablinks btnPacientes" onclick="openCity(event, 'pacientes')"  href="#">
							<span data-feather="users"></span>
							Pacientes
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link tablinks btnMedicos"  onclick="openCity(event, 'medicos')" href="#">
							<span data-feather="users"></span>
							Médicos
						</a>
					</li>
          <li class="nav-item">
            <a class="nav-link tablinks btnOrdenes" onclick="openCity(event, 'ordenes')" href="#">
              <span data-feather="file"></span>
              Ordenes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link tablinks" href="#">
              <span data-feather="shopping-cart"></span>
              Productos
            </a>
          </li>
        </ul>

      </div>
    </nav>

    {{-- <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"> --}}
    <section role="main" class="col-md-9  col-lg-10 px-md-4 mt-4 mt-sm-4 mt-md-0">

      @include('services.admin.dash')

      @include('services.admin.pacientes')

      @include('services.admin.medicos')

      
      {{-- <div id="medicos" class="tabcontent animate__animated animate__fadeIn">
        <h3>medicos</h3>
        <p>Paris is the capital of France.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, dolores!
        </p>
      </div> --}}
      
      <div id="ordenes" class="tabcontent animate__animated animate__fadeIn">
        <h3>ordenes</h3>
        <p>Tokyo is the capital of Japan.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus provident quam est sint molestiae, totam iusto error! Similique distinctio modi corporis doloribus aliquid? A porro culpa, nostrum quidem magni maiores. Recusandae a autem corporis iste excepturi, atque sit nemo reiciendis aliquid natus nobis repellendus temporibus veniam. Expedita, quas. Eos, vero?
        </p>
      </div>

    </section>



  </div>
</div>
@endsection




@section('scripts')


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

    <script> // cambio tab
    function openCity(evt, cityName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>


    {{-- pacientes --}}

    <script>

      var pacientes = document.querySelector('.btnPacientes');


      pacientes.addEventListener('click', function () {

        if ( $.fn.dataTable.isDataTable( '#tableUsers' ) ) {

        table = $('#tableUsers').DataTable();

        }
        else {
              table = $('#tableUsers').DataTable( {


            
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
                "ajax":  "{{ route('user.index') }}",
                // "ajax":  "/ajaxResponseOrders",
                "columns": [
                    { data: 'id'},
                    { data: 'num_id'},
                    { data: 'name',},
                    { data: 'phone',},
                    {

                      data: 'action'

                    }
                    
                ]
        
          } );
        }



      })

      // end pacientes

      var medicos = document.querySelector('.btnMedicos');

      medicos.addEventListener('click', function () {

        if ( $.fn.dataTable.isDataTable( '#tableMedicos' ) ) {

        table = $('#tableMedicos').DataTable();

        }
        else {
              table = $('#tableMedicos').DataTable( {
            
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
                "ajax":  "{{ route('medico.index') }}",
                // "ajax":  "/ajaxResponseOrders",
                "columns": [
                    { data: 'id'},
                    { data: 'num_id'},
                    { data: 'name',},
                    { data: 'phone',},
                    {

                      data: 'action'

                    }
                    
                ]
        
          } );
        }

      })

      // end Medicos
      var ordenes = document.querySelector('.btnOrdenes');

      ordenes.addEventListener('click', function () {

        if ( $.fn.dataTable.isDataTable( '#tableOrdenes' ) ) {

        table = $('#tableOrdenes').DataTable();

        }
        else {
              table = $('#tableOrdenes').DataTable( {
            
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
                "ajax":  "{{ route('orden.all') }}",
                // "ajax":  "/ajaxResponseOrders",
                "columns": [
                    { data: 'id'},
                    { data: 'num_id'},
                    { data: 'name',},
                    { data: 'phone',},
                    {

                      data: 'action'

                    }
                    
                ]
        
          } );
        }

      })

      // end ORDENES


    </script>

@endsection