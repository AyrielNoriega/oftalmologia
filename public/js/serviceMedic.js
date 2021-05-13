

$(function () {

				$('.footerMedico').mouseover(function () { 
					// VALIDAR FORM ANTES DE AJAX 

			if ( $('#nombre').val().length < 10) {
				document.getElementById('invalid-nombre').style.display = "block";
				$('#btnSubmitMedico').attr('disabled', true);
			}
			// else {
			// 	$('#btnSubmitMedico').attr('disabled', false);
			// }

			if ($('#correo').val() == 0) {
					document.getElementById('invalid-correo').style.display = "block";
					$('#btnSubmitMedico').attr('disabled', true);
			}

			if ( $('#numero_id').val().length < 8 ) {
					document.getElementById('invalid-numero_id').style.display = "block";
					$('#btnSubmitMedico').attr('disabled', true);
			}

			if ($('#contrasena').val().length < 8) {
					document.getElementById('invalid-contrasena').style.display = "block";
					$('#btnSubmitMedico').attr('disabled', true);
			}

			if ($('#contrasena-confirm').val().length < 8) {
					document.getElementById('invalid-contrasena').style.display = "block";
					$('#btnSubmitMedico').attr('disabled', true);
			}

			if ($('#contrasena-confirm').val() != $('#contrasena').val()) {
					document.getElementById('invalid-contrasena').style.display = "block";
					$('#btnSubmitMedico').attr('disabled', true);
			}

			if ( $('#nombre').val().length > 10 && $('#correo').val() != 0 && $('#numero_id').val().length >= 8 && $('#contrasena').val().length >= 8 && $('#contrasena-confirm').val() === $('#contrasena').val() ) {
				$('#btnSubmitMedico').attr('disabled', false);
			}


			console.log('focus');
			});

			document.getElementById('btnCancelarMedico').addEventListener('click', () => {
			$('#CrearMedicoForm')[0].reset();
			});
			document.getElementById('ModalCloseMedico').addEventListener('click', () => {
			$('#CrearMedicoForm')[0].reset();
			});

	
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
						"ajax":  "/medico/all",
						// "ajax":  "/ajaxResponseOrders",
						"columns": [
								{ data: 'id'},
								{ data: 'numero_id'},
								{ data: 'nombre',},
								{ data: 'telefono',},
								{

									data: 'action'

								}
								
						]
		
			} );
		}

	})
	

	document.querySelector('.btnCrearMedico').addEventListener('click', () => {
		
		$('#ModalCrearMedico').modal('toggle');

		var formInvalid = document.getElementsByClassName("formInvalid");
		for (i = 0; i < formInvalid.length; i++) {
			formInvalid[i].style.display = "block";
		}
						//
						$('#CrearMedicoForm').submit( function ( event ) {
							event.preventDefault();

							var dataMedico = {
							 nombre: $('#nombre').val(),
							 correo: $('#correo').val(),
							 numero_id: $('#numero_id').val(),
							 telefono: $('#telefono').val(),
							 contrasena: $('#contrasena').val(),
							 contrasena_confirmation: $('#contrasena-confirm').val(),
							 _token: $("input[name=_token]").val(),
						}

						console.log(dataMedico);
			
							$.ajax({
								// url: " {{ route('user.update') }} ",
								url: "/medico/create",
								type: 'POST',
								data: dataMedico,
							})
								.done(
										function ( response ) {
			
												if( response ){

														$('#CrearMedicoForm')[0].reset();

														$( '#ModalCrearMedico' ).modal('hide');

														$('#tableMedicos').DataTable().ajax.reload(); //recargar Datatable despues de agregar usuario
																							
														toastr["success"]("Se guardaron los datos correctamente!")
				
																toastr.options = {
																	"closeButton": false,
																	"debug": false,
																	"newestOnTop": false,
																	"progressBar": false,
																	"positionClass": "toast-top-right",
																	"preventDuplicates": true,
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
												}
								})
								.fail( (jqXHR, textStatus, errorThrown )=>{
									console.log(jqXHR );


									var formInvalid = document.getElementsByClassName("formInvalid");
									for (i = 0; i < formInvalid.length; i++) {
										formInvalid[i].style.display = "none";
									}

									if (jqXHR.responseJSON.errors.nombre) {
										document.getElementById('validacionformNombre').innerHTML  = jqXHR.responseJSON.errors.nombre[0]
									}
									if (jqXHR.responseJSON.errors.correo) {
										document.getElementById('validacionformCorreo').innerHTML  = jqXHR.responseJSON.errors.correo[0]

									}
									if (jqXHR.responseJSON.errors.numero_id) {
										document.getElementById('validacionformNumeroId').innerHTML  = jqXHR.responseJSON.errors.numero_id[0]
									}
									if (jqXHR.responseJSON.errors.contrasena) {
										document.getElementById('validacionformContrasena').innerHTML  = jqXHR.responseJSON.errors.contrasena[0]
									}
 

								})
		
						} );

	});


});