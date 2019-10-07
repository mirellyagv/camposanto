//$("#nvoClienteWiz").number(true);

$('.nvoRegistroUser').on('change', function(){
	select = $(this).closest("form").find("select.selectTipoDoc").val();

	$('#m_modal_1_loader').addClass('loader');
	if(select == 'DI001'){
		var dni = $(this).val();
		var url = 'extensiones/consultaReniec/consulta_reniec.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'dni='+dni,
			success: function(datos_dni){
				$('#m_modal_1_loader').removeClass('loader');
				var datos = eval(datos_dni);
				//console.log(datos);
				if(datos[1] == '' && dni != ''){
					swal({
				        title:"Error",
				        text: "El DNI no figura en el registro del RENIEC.",
				        type: "error",
				        confirmButtonText: "Aceptar",
				    })
				    $('#apelPatNvoCliWiz').val('');
					$('#apelMatNvoCliWiz').val('');
					$('#nombresNvoCliWiz').val('');
				}else{
					$('#apelPatNvoCliWiz').val(datos[1]);
					$('#apelMatNvoCliWiz').val(datos[2]);
					$('#nombresNvoCliWiz').val(datos[3]);
				}//else
			}//success
		});
		return false;
	}else if(select == 'DI004'){
		var ruc = $('#nvoClienteWiz').val();
		var url = 'extensiones/consultaReniec/consulta_sunat.php';
		$.ajax({
		type:'POST',
		url:url,
		data:'ruc='+ruc,
		success: function(datos_dni){
			var datos = eval(datos_dni);
				var nada ='nada';
				if(datos[0]==nada){
					swal({
				        title:"Error",
				        text: "DNI o RUC no válido o no registrado.",
				        type: "error",
				        confirmButtonText: "Aceptar",
				    })
				}else{
					$('#m_modal_1_loader').removeClass('loader');
					$('#razonSocNvoCliWiz').val(datos[1]);
				}
			}//success
		});//ajax	
	}else if(select == 'vacio'){
		$('#m_modal_1_loader').removeClass('loader');
		swal({
	        title:"Error",
	        text: "Debe seleccionar un tipo de documento.",
	        type: "error",
	        confirmButtonText: "Aceptar",
	    })
	    $(".tipoDoc").focus();
	}else{
		$('#m_modal_1_loader').removeClass('loader');
	}
});

 

