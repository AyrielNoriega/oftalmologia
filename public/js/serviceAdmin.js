
		// MANIPULACION TAP ADMIN
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


		// END MANIPULACION TAP ADMIN
 
		// {{-- pacientes --}}

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
							"ajax":  "/user/all",
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



		// lista de ordenes
		// var ordenes = document.querySelector('.btnOrdenes');

		// ordenes.addEventListener('click', function () {

		// 	if ( $.fn.dataTable.isDataTable( '#tableOrdenes' ) ) {

		// 	table = $('#tableOrdenes').DataTable();

		// 	}
		// 	else {
		// 				table = $('#tableOrdenes').DataTable( {
					
		// 					processing:true,
		// 					serverSide:true,
		// 					responsive: true,
		// 					autoWidth: false,
		// 					language: {
		// 							processing:     "Procesando...",
		// 							search:         "Buscar",
		// 							lengthMenu:    "Mostrar _MENU_ registros",
		// 							info:           "Mostrando de _START_ a _END_  de _TOTAL_ elementos",
		// 							infoEmpty:      "Ningún elemento encontrato",
		// 							infoFiltered:   "(Filtrado de _MAX_ elementos en total)",
		// 							infoPostFix:    "",
		// 							loadingRecords: "Cargando...",
		// 							zeroRecords:    "Nada encontrado...",
		// 							emptyTable:     "Tabla vacía",
		// 							paginate: {
		// 									first:      "Primero",
		// 									previous:   "Anterior",
		// 									next:       "Siguiente",
		// 									last:       "Último"
		// 							}
		// 					},
					
		// 					// "serverSide": true,
		// 					"ajax":  "/orden/all",
		// 					// "ajax":  "/ajaxResponseOrders",
		// 					"columns": [
		// 							{ data: 'id'},
		// 							{ data: 'num_id'},
		// 							{ data: 'name',},
		// 							{ data: 'phone',},
		// 							{

		// 								data: 'action'

		// 							}
									
		// 					]
			
		// 		} );
		// 	}

		// })

		// end ORDENES

		// modal crear user desde admin

							
		$('.modal-footer').mouseover(function () { 
						// VALIDAR FORM ANTES DE AJAX 

				if ( $('#name').val().length < 10) {
					document.getElementById('invalid-name').style.display = "block";
					$('#btnSubmit').attr('disabled', true);
				}
				// else {
				// 	$('#btnSubmit').attr('disabled', false);
				// }

				if ($('#email').val() == 0) {
						document.getElementById('invalid-email').style.display = "block";
						$('#btnSubmit').attr('disabled', true);
				}

				if ( $('#num_id').val().length < 8 ) {
						document.getElementById('invalid-num_id').style.display = "block";
						$('#btnSubmit').attr('disabled', true);
				}

				if ($('#password').val().length < 8) {
						document.getElementById('invalid-password').style.display = "block";
						$('#btnSubmit').attr('disabled', true);
				}

				if ($('#password-confirm').val().length < 8) {
						document.getElementById('invalid-password').style.display = "block";
						$('#btnSubmit').attr('disabled', true);
				}

				if ($('#password-confirm').val() != $('#password').val()) {
						document.getElementById('invalid-password').style.display = "block";
						$('#btnSubmit').attr('disabled', true);
				}

				if ( $('#name').val().length > 10 && $('#email').val() != 0 && $('#num_id').val().length >= 8 && $('#password').val().length >= 8 && $('#password-confirm').val() === $('#password').val() ) {
					$('#btnSubmit').attr('disabled', false);
				}


			// console.log('focus');
		});

			document.getElementById('btnCancelar').addEventListener('click', () => {
				$('#CrearUserForm')[0].reset();
			});
			document.getElementById('ModalClose').addEventListener('click', () => {
				$('#CrearUserForm')[0].reset();
			});

 

 

		document.querySelector('.btnCrearPac').addEventListener('click', () => {
		
			$('#ModalCrearUser').modal('toggle');

			var formInvalid = document.getElementsByClassName("formInvalid");
			for (i = 0; i < formInvalid.length; i++) {
				formInvalid[i].style.display = "block";
			}
							//
							$('#CrearUserForm').submit( function ( event ) {
								event.preventDefault();

								var dataUser = {
								 name: $('#name').val(),
								 email: $('#email').val(),
								 type_id: $('#type_id').val(),
								 num_id: $('#num_id').val(),
								 phone: $('#phone').val(),
								 f_nacimiento: $('#f_nacimiento').val(),
								 age: $('#age').val(),
								 sex: $('#sex').val(),
								 city: $('#city').val(),
								 password: $('#password').val(),
								 password_confirmation: $('#password-confirm').val(),
								 _token: $("input[name=_token]").val(),
							}

							console.log(dataUser);
				
								$.ajax({
									// url: " {{ route('user.update') }} ",
									url: "/user/create",
									type: 'POST',
									data: dataUser,
								})
									.done(
											function ( response ) {
				
													if( response ){

															$('#CrearUserForm')[0].reset();

															$( '#ModalCrearUser' ).modal('hide');

															$('#tableUsers').DataTable().ajax.reload(); //recargar Datatable despues de agregar usuario
																								
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

										if (jqXHR.responseJSON.errors.name) {
											document.getElementById('validacionformName').innerHTML  = jqXHR.responseJSON.errors.name[0]
										}
										if (jqXHR.responseJSON.errors.email) {
											document.getElementById('validacionformEmail').innerHTML  = jqXHR.responseJSON.errors.email[0]

										}
										if (jqXHR.responseJSON.errors.num_id) {
											document.getElementById('validacionformNumId').innerHTML  = jqXHR.responseJSON.errors.num_id[0]
										}
										if (jqXHR.responseJSON.errors.password) {
											document.getElementById('validacionformPass').innerHTML  = jqXHR.responseJSON.errors.password[0]
										}
	 

									})
			
							} );

		});

