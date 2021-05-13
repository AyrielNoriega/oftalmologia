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
					<li class="nav-item ">
						<a class="nav-link tablinks btnMedicos "  onclick="openCity(event, 'medicos')" href="#">
							<span data-feather="users"></span>
							Médicos
						</a>
					</li>
          {{-- <li class="nav-item">
            <a class="nav-link tablinks btnOrdenes" onclick="openCity(event, 'ordenes')" href="#">
              <span data-feather="file"></span>
              Ordenes
            </a>
          </li> --}}
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

      {{-- @include('services.admin.ordenes') --}}


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

    {{-- Validador form create user --}}
    {{-- <script src="{{ asset('js/validaFormUser.js') }}"></script> --}}

    <script src="{{ asset('js/serviceAdmin.js') }}" ></script>
    <script src="{{ asset('js/serviceMedic.js') }}" ></script>

@endsection