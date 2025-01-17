var WizardDemo = function() {
    $("#m_wizard");
    var i, e, n = $("#m_form");
    return {
        init: function() {
            var r;
            $("#m_wizard"),
            n = $("#m_form"),
            (e = new mWizard("m_wizard",{
                startStep: 1
            })).on("beforeNext", function(e) {
                !0 !== i.form() //&& e.stop()
            }),
            e.on("change", function(e) {
                mApp.scrollTop()
            }),
            i = n.validate({
                ignore: ":hidden",
                rules: {
                    tipPro: {
                        required: !0
                    },
                    camposanto: {
                        required: !0
                    },
                    nomVendedor: {
                        required: !0
                    },
                    planSS: {
                        required: !0                   
                    },
                    tipoPlat: {
                        required: !0
                    }
                },
                messages: {
                    "account_communication[]": {
                        required: "You must select at least one communication option"
                    }
                    /*accept: {
                        required: "You must accept the Terms and Conditions agreement!"
                    }*/
                },
                invalidHandler: function(e, r) {
                    mApp.scrollTop(),
                    swal({
                        title: "",
                        text: "Hay algunos errores en el formulario. Por favor revisar.",
                        type: "error",
                        confirmButtonClass: "btn btn-secondary m-btn m-btn--wide"
                    })
                },
                submitHandler: function(e) {}
            }),
            (r = n.find('[data-wizard-action="submit"]')).on("click", function(e) {
                e.preventDefault(),
                i.form() && (mApp.progress(r),
                n.ajaxSubmit({
                    success: function() {
                        mApp.unprogress(r),
                        swal({
                            title: "",
                            text: "¿Esta seguro de generar este contrato?",
                            type: "question",
                            showCancelButton:!0,
                            confirmButtonText: "Generar",
                            cancelButtonText:"Cancelar"
                        }).then(function(e){e.value&&swal("","El contrato ha sido generado.","success")})
                    }
                }))
            })
        }
    }
}();
jQuery(document).ready(function() {
    WizardDemo.init()
});

function modificarctt(){
    var checkbox = document.getElementById('modificaCtt');
  if (checkbox.checked != true){
    $('#ctt').prop('disabled',true);
    $('#ctt').val('');
    document.getElementById("ctt").placeholder = "";
  }
  else{
        $('#ctt').prop('disabled',false);
        document.getElementById("ctt").placeholder = "Escriba el número de contrato";
    }
}

function apagar(){
    var checkbox = document.getElementById('genCom');
  if (checkbox.checked != true){
    $('#tipoCom').prop('disabled',true);
    $('#tipoCom').val('');
    $('#numCom').prop('disabled',true);
    $('#numCom').val('');
    $('#nnumCom').prop('disabled',true);
    $('#nnumCom').val('');
    $('#m_datepicker_3').attr('disabled','disabled');
    $('#m_datepicker_3').val('');
    $('#deuCom').prop('disabled',true);
    $('#deuCom').val('');
    $('#btn1Com').prop('disabled',true);
    $('#btn1Com').val('');
    $('#btn2Com').prop('disabled',true);
    $('#btn2Com').val('');
    $('#nomCom').prop('disabled',true);
    $('#nomCom').val('');
    $('#docCom').prop('disabled',true);
    $('#docCom').val('');
    $('#ndocCom').prop('disabled',true);
    $('#ndocCom').val('');
    $('#tlfCom').prop('disabled',true);
    $('#tlfCom').val('');
    $('#dirCom').prop('disabled',true);
    $('#dirCom').val('');
    $('#gloCom').prop('disabled',true);
    $('#gloCom').val('');
    $('#monCom').prop('disabled',true);
    $('#monCom').val('');
    $('#totCom').prop('disabled',true);
    $('#totCom').val('');
    }
    else{
        $('#tipoCom').prop('disabled',false);
        $('#numCom').prop('disabled',false);
        $('#nnumCom').prop('disabled',false);
        $('#m_datepicker_3').prop('disabled',false);
        $('#deuCom').prop('disabled',false);
        $('#btn1Com').prop('disabled',false);
        $('#btn2Com').prop('disabled',false);
        $('#nomCom').prop('disabled',false);
        $('#docCom').prop('disabled',false);
        $('#ndocCom').prop('disabled',false);
        $('#tlfCom').prop('disabled',false);
        $('#dirCom').prop('disabled',false);
        $('#gloCom').prop('disabled',false);
        $('#monCom').prop('disabled',false);
        $('#totCom').prop('disabled',false);
    }
}

function desabilitar(){
    var checkbox = document.getElementById('cuoDefi');
  if (checkbox.checked != true){
    $('#cuoFin').prop('disabled',true);
    $('#cuoFin').val('');
    $('#cuoIni').prop('disabled',true);
    $('#cuoIni').val('');
    $('#valCuo').prop('disabled',true);
    $('#valCuo').val('');
    $("#btnCuoDef").prop('disabled',true);
    }
    else{
        $('#cuoFin').prop('disabled',false);
        $('#valCuo').prop('disabled',false);
      $('#cuoIni').prop('disabled',false);
      $("#btnCuoDef").prop('disabled',false);

    }
}

function cargaFormBenef(){

      //---------habilita-------//

  $('#tipoDocBenef').prop('disabled',false);
  $('#numDocBenef').prop('disabled',false);
  $('#apellPaternoBenef').prop('disabled',false);
  $('#apellMaternoBenef').prop('disabled',false);
  $('#nombreBenef').prop('disabled',false);
  $('#m_datepicker_1_modal').prop('disabled',false);
  $('#m_datepicker_2').prop('disabled',false);
  $('#religionBenef').prop('disabled',false);
  $('#edoCivilBenef').prop('disabled',false);
  $('#sexoBenef').prop('disabled',false);
  $('#parentescoBenef').prop('disabled',false);
  $('#lugarDecesoBenef').prop('disabled',false);
  $('#motivoDecesoBenef').prop('disabled',false);
  $('#pesoBenef').prop('disabled',false);
  $('#tallaBenef').prop('disabled',false);
  $('#autopsiaBenef').prop('disabled',false);
  
  //---------------limpia--------//

   document.getElementById("tipoDocBenef").value = '';
  document.getElementById("numDocBenef").value = '';
  document.getElementById("apellPaternoBenef").value = '';
  document.getElementById("apellMaternoBenef").value = '';
  document.getElementById("nombreBenef").value = '';
  $('#m_datepicker_1_modal').datepicker('setDate', null);
  $('#m_datepicker_2').datepicker('setDate', null);
  document.getElementById("religionBenef").value = '';
  document.getElementById("edoCivilBenef").value = '';
  document.getElementById("sexoBenef").value = '';
  document.getElementById("parentescoBenef").value = '';
  document.getElementById("lugarDecesoBenef").value = '';
  document.getElementById("motivoDecesoBenef").value = '';
  document.getElementById("pesoBenef").value = '';
  document.getElementById("tallaBenef").value = '';
  document.getElementById("autopsiaBenef").value = ''; 

  //---------cambia los botones a guardar y cancelar-----//

  $('#botonAgregarB').prop('hidden',true);
  $('#botonModificarB').prop('hidden',true);
  $('#botonGuardarB').prop('hidden',false);
  $('#botonEditaB').prop('hidden',true);
  $('#botonEliminarB').prop('hidden',true);
  $('#botonDescartarB').prop('hidden',false);
  $('#botonCancelarEdicionB').prop('hidden',true);

  document.getElementById("tipoDocBenef").focus();

}

function verificaBenef(val){
  var row = $("#bodyBeneficiario tr").length;
  if(row > 0){
    var filas = document.querySelectorAll("#bodyBeneficiario tr");
    for (var i = 1; i <= row; i++) {
      result = filas[i-1].querySelectorAll("td");
      com = result[0].innerHTML;
      if(val == com){
        return 1;
        break;
      }
    }
  }
  else{
    return 0;
  }
}

function guardaBenef(){
  var tipoDoc = document.getElementById("tipoDocBenef").value;
  var numDoc = document.getElementById("numDocBenef").value;
  var aux = verificaBenef(numDoc);
  var apellPaterno = document.getElementById("apellPaternoBenef").value;
  var apellMaterno = document.getElementById("apellMaternoBenef").value;
  var nombre = document.getElementById("nombreBenef").value;
  var fechNac = $('#m_datepicker_1_modal').datepicker("getDate");
  var fechDec = $('#m_datepicker_2').datepicker("getDate");
  var religion = document.getElementById("religionBenef").value;
  var edoCivil = document.getElementById("edoCivilBenef").value;
  var sexo = document.getElementById("sexoBenef").value;
  var parentesco = document.getElementById("parentescoBenef").value;
  var lugarDeceso = document.getElementById("lugarDecesoBenef").value;
  var motivoDeceso = document.getElementById("motivoDecesoBenef").value;
  var peso = document.getElementById("pesoBenef").value;
  var talla = document.getElementById("tallaBenef").value;
  var autopsia = document.getElementById("autopsiaBenef").checked;
  var registro = [tipoDoc,numDoc,apellPaterno,apellMaterno,nombre,fechNac,fechDec,religion,edoCivil,sexo,parentesco,lugarDeceso,motivoDeceso,peso,talla,autopsia];
  var muestra = '<tr onclick="verDetalles(event)" id="'+numDoc+'"><td class="'+numDoc+'">'+numDoc+'</td><td class="'+numDoc+'">'+nombre+'</td><td class="'+numDoc+'">'+apellPaterno+' '+apellMaterno+'<input type="hidden" id="idBenef" value="'+numDoc+'"><input type="hidden" id="registro_'+numDoc+'" value="'+registro+'"></td></tr>';
  document.getElementById("bodyBeneficiario").insertAdjacentHTML("beforeEnd" ,muestra);

  swal({
        title: "",
        text: "Beneficiario añadido.",
        type: "success",
        confirmButtonText: "Aceptar",
    })

  limpiaydsi(); 
}

function eliminaBenef(id){
  swal({
        title: "¿Está seguro de eliminar el beneficiario?",
        type: "question",
        showCancelButton: !0,
        confirmButtonText: "Si, eliminar",
        cancelButtonText: "No, cancelar"
    }).then(function(e) {
        e.value ? swal({
          title:"Eliminados", 
          text:"Se ha eliminado el beneficiario.",
          type: "success",
          onBeforeOpen: borrarBenef(id)         
        }) : "cancel" === e.dismiss
    })
}

function borrarBenef(id){
  document.getElementById(id).remove();
  limpiaydsi();
}

function activaEditaBenef(id){

  $('#tipoDocBenef').prop('disabled',false);
  $('#numDocBenef').prop('disabled',false);
  $('#apellPaternoBenef').prop('disabled',false);
  $('#apellMaternoBenef').prop('disabled',false);
  $('#nombreBenef').prop('disabled',false);
  $('#m_datepicker_1_modal').prop('disabled',false);
  $('#m_datepicker_2').prop('disabled',false);
  $('#religionBenef').prop('disabled',false);
  $('#edoCivilBenef').prop('disabled',false);
  $('#sexoBenef').prop('disabled',false);
  $('#parentescoBenef').prop('disabled',false);
  $('#lugarDecesoBenef').prop('disabled',false);
  $('#motivoDecesoBenef').prop('disabled',false);
  $('#pesoBenef').prop('disabled',false);
  $('#tallaBenef').prop('disabled',false);
  $('#autopsiaBenef').prop('disabled',false);

  //----------cambia los botones a editar y cancelar-------//

  $('#botonAgregarB').prop('hidden',true);
  $('#botonModificarB').prop('hidden',false);
  $('#botonGuardarB').prop('hidden',true);
  $('#botonEditaB').prop('hidden',true);
  $('#botonEliminarB').prop('hidden',true);
  $('#botonDescartarB').prop('hidden',true);
  $('#botonCancelarEdicionB').prop('hidden',false);

  boton = document.getElementById("botonModificarB");
  boton.addEventListener("click", function(){guardaEdicionB(id)}, false);

}

function guardaEdicionB(id){
  var tipoDoc = document.getElementById("tipoDocBenef").value;
  var numDoc = document.getElementById("numDocBenef").value;
  var apellPaterno = document.getElementById("apellPaternoBenef").value;
  var apellMaterno = document.getElementById("apellMaternoBenef").value;
  var nombre = document.getElementById("nombreBenef").value;
  var fechNac = $('#m_datepicker_1_modal').datepicker("getDate");
  var fechDec = $('#m_datepicker_2').datepicker("getDate");
  var religion = document.getElementById("religionBenef").value;
  var edoCivil = document.getElementById("edoCivilBenef").value;
  var sexo = document.getElementById("sexoBenef").value;
  var parentesco = document.getElementById("parentescoBenef").value;
  var lugarDeceso = document.getElementById("lugarDecesoBenef").value;
  var motivoDeceso = document.getElementById("motivoDecesoBenef").value;
  var peso = document.getElementById("pesoBenef").value;
  var talla = document.getElementById("tallaBenef").value;
  var autopsia = document.getElementById("autopsiaBenef").checked;
  var registro = [tipoDoc,numDoc,apellPaterno,apellMaterno,nombre,fechNac,fechDec,religion,edoCivil,sexo,parentesco,lugarDeceso,motivoDeceso,peso,talla,autopsia];
  var muestra = '<tr onclick="verDetalles(event)" id="'+numDoc+'"><td class="'+numDoc+'">'+numDoc+'</td><td class="'+numDoc+'">'+nombre+'</td><td class="'+numDoc+'">'+apellPaterno+' '+apellMaterno+'<input type="hidden" id="idBenef" value="'+numDoc+'"><input type="hidden" id="registro_'+numDoc+'" value="'+registro+'"></td></tr>';
  document.getElementById(id).remove();
  document.getElementById("bodyBeneficiario").insertAdjacentHTML("beforeEnd" ,muestra);

  swal({
        title: "",
        text: "Beneficiario modificado.",
        type: "success",
        confirmButtonText: "Aceptar",
    })

  limpiaydsi();
}

function limpiaydsi(){

          //------------limpia------------------//
  
  document.getElementById("tipoDocBenef").value = '';
  document.getElementById("numDocBenef").value = '';
  document.getElementById("apellPaternoBenef").value = '';
  document.getElementById("apellMaternoBenef").value = '';
  document.getElementById("nombreBenef").value = '';
  $('#m_datepicker_1_modal').datepicker('setDate', null);
  $('#m_datepicker_2').datepicker('setDate', null);
  document.getElementById("religionBenef").value = '';
  document.getElementById("edoCivilBenef").value = '';
  document.getElementById("sexoBenef").value = '';
  document.getElementById("parentescoBenef").value = '';
  document.getElementById("lugarDecesoBenef").value = '';
  document.getElementById("motivoDecesoBenef").value = '';
  document.getElementById("pesoBenef").value = '';
  document.getElementById("tallaBenef").value = '';
  $('#autopsiaBenef').prop("checked", false);

        //------------deshabilita---------------//

  $('#tipoDocBenef').prop('disabled',true);
  $('#numDocBenef').prop('disabled',true);
  $('#apellPaternoBenef').prop('disabled',true);
  $('#apellMaternoBenef').prop('disabled',true);
  $('#nombreBenef').prop('disabled',true);
  $('#m_datepicker_1_modal').prop('disabled',true);
  $('#m_datepicker_2').prop('disabled',true);
  $('#religionBenef').prop('disabled',true);
  $('#edoCivilBenef').prop('disabled',true);
  $('#sexoBenef').prop('disabled',true);
  $('#parentescoBenef').prop('disabled',true);
  $('#lugarDecesoBenef').prop('disabled',true);
  $('#motivoDecesoBenef').prop('disabled',true);
  $('#pesoBenef').prop('disabled',true);
  $('#tallaBenef').prop('disabled',true);
  $('#autopsiaBenef').prop('disabled',true);

  //----------cabia a los botones originales-----------//

  $('#botonAgregarB').prop('hidden',false);
  $('#botonModificarB').prop('hidden',true);
  $('#botonGuardarB').prop('hidden',true);
  $('#botonEditaB').prop('hidden',false);
  $('#botonEliminarB').prop('hidden',false);
  $('#botonDescartarB').prop('hidden',true);
  $('#botonCancelarEdicionB').prop('hidden',true);

}

function verDetalles(evt) {
  var target = evt.srcElement ? evt.srcElement : evt.target;
  var x = target.className;
  var respuesta = document.getElementById("registro_"+x).value;
  var tipoDoc = respuesta.split(",")[0];
  var numDoc = respuesta.split(",")[1];
  var apellPaterno = respuesta.split(",")[2];
  var apellMaterno = respuesta.split(",")[3];
  var nombre = respuesta.split(",")[4];
  var fechNac = respuesta.split(",")[5];
  var fechDec = respuesta.split(",")[6];
  var religion = respuesta.split(",")[7];
  var edoCivil = respuesta.split(",")[8];
  var sexo = respuesta.split(",")[9];
  var parentesco = respuesta.split(",")[10];
  var lugar = respuesta.split(",")[11];
  var motivo = respuesta.split(",")[12];
  var peso = respuesta.split(",")[13];
  var talla = respuesta.split(",")[14];
  var autopsia = respuesta.split(",")[15];

  document.getElementById("tipoDocBenef").setAttribute('value',tipoDoc);
  document.getElementById("tipoDocBenef").value = tipoDoc;
  $('#tipoDocBenef').prop('disabled',true);
  document.getElementById("numDocBenef").setAttribute('value',numDoc);
  document.getElementById("numDocBenef").value = numDoc;
  $('#numDocBenef').prop('disabled',true);
  document.getElementById("apellPaternoBenef").setAttribute('value',apellPaterno);
  document.getElementById("apellPaternoBenef").value = apellPaterno;
  $('#apellPaternoBenef').prop('disabled',true);
  document.getElementById("apellMaternoBenef").setAttribute('value',apellMaterno);
  document.getElementById("apellMaternoBenef").value = apellMaterno;
  $('#apellMaternoBenef').prop('disabled',true);
  document.getElementById("nombreBenef").setAttribute('value',nombre);
  document.getElementById("nombreBenef").value = nombre;
  $('#nombreBenef').prop('disabled',true);
  $('#m_datepicker_1_modal').datepicker('setDate', fechNac);
  $('#m_datepicker_1_modal').prop('disabled',true);
  $('#m_datepicker_2').datepicker('setDate', fechDec);
  $('#m_datepicker_2').prop('disabled',true);
  document.getElementById("religionBenef").setAttribute('value',religion);
  document.getElementById("religionBenef").value = religion;
  $('#religionBenef').prop('disabled',true);
  document.getElementById("edoCivilBenef").setAttribute('value',edoCivil);
  document.getElementById("edoCivilBenef").value = edoCivil;
  $('#edoCivilBenef').prop('disabled',true);
  document.getElementById("sexoBenef").setAttribute('value',sexo);
  document.getElementById("sexoBenef").value = sexo;
  $('#sexoBenef').prop('disabled',true);
  document.getElementById("parentescoBenef").setAttribute('value',parentesco);
  document.getElementById("parentescoBenef").value = parentesco;
  $('#parentescoBenef').prop('disabled',true);
  document.getElementById("lugarDecesoBenef").setAttribute('value',lugar);
  document.getElementById("lugarDecesoBenef").value = lugar;
  $('#lugarDecesoBenef').prop('disabled',true);
  document.getElementById("motivoDecesoBenef").setAttribute('value',motivo);
  document.getElementById("motivoDecesoBenef").value = motivo;
  $('#motivoDecesoBenef').prop('disabled',true);
  document.getElementById("pesoBenef").setAttribute('value',peso);
  document.getElementById("pesoBenef").value = peso;
  $('#pesoBenef').prop('disabled',true);
  document.getElementById("tallaBenef").setAttribute('value',talla);
  document.getElementById("tallaBenef").value = talla;
  $('#tallaBenef').prop('disabled',true);
  $('#autopsiaBenef').prop("checked", autopsia);
  $('#autopsiaBenef').prop('disabled',true);
  boton = document.getElementById("botonEditaB");
  boton.addEventListener("click", function(){activaEditaBenef(numDoc)}, false);
  boton2 = document.getElementById("botonEliminarB");
  boton2.addEventListener("click", function(){eliminaBenef(numDoc)}, false);
}

function toggleResumen(e){
    var elem = document.getElementById("resumen2"),
    style = window.getComputedStyle(elem),
    right = style.getPropertyValue("right");

    if(right == "0px"){
        elem.style.right = "-240px";
    }
    else{
        elem.style.right = "0px";
    }
}
$(document).ready( function () {
    $('#myTableServicios').DataTable();
} );

$("#codVendedor").change(function () {
    var valor = $(this).val();
    $.ajax({
        type: 'GET',
        url: 'extensiones/captcha/buscaNombre.php',
        dataType: 'text',
        data: { 'value' : valor },
        success : function(respuesta){
            $('#nomVendedor').val(respuesta);
        }
    });
});

$("#numDocCliente").change(function() {
    var valor = $(this).val();
    $.ajax({
        type: 'GET',
        url: 'extensiones/captcha/buscaCliente.php',
        dataType: 'text',
        data: { 'value' : valor },
        success : function(respuesta){
            //console.log(respuesta);
            var nombre = respuesta.split("/")[0];
            var tipodoc = respuesta.split("/")[1];
            var numdoc = respuesta.split("/")[2];
            var jur = respuesta.split("/")[3];
            $('#nombreCliente').val(nombre);
            document.getElementById("TipoDcoCliente").value = tipodoc;
            document.getElementById("numDocCliente").value = numdoc;
            if (jur == 'SI') {
                $('#juridico').prop("checked", true);
            }
            else{
                $('#juridico').prop("checked", false);
            }
        }
    });

});

function callProspecto(valor){
    $.ajax({
        type: 'GET',
        url: 'extensiones/captcha/buscaProspecto.php',
        dataType: 'text',
        data: { 'value' : valor },
        success : function(respuesta){
            //console.log(respuesta);
            var nombre = respuesta.split("/")[0];
            var tipodoc = respuesta.split("/")[1];
            var numdoc = respuesta.split("/")[2];
            var jur = respuesta.split("/")[3];
            var codP = respuesta.split("/")[4];
            $('#nombreCliente').val(nombre);
            document.getElementById("TipoDcoCliente").value = tipodoc;
            document.getElementById("numDocCliente").value = 1;
            if (jur == 'SI') {
                $('#juridico').prop("checked", true);
            }
            else{
                $('#juridico').prop("checked", false);
            }
        }
    });
}

function creaTablaCliente(){
    if ($('#myTableCliente').length) {
        $('#myTableCliente').DataTable();
    }
    else{
        $('#tablaCliente').html('<div class="loader"></div>');
        $.ajax({
            url: 'extensiones/captcha/creaTablaCliente.php',
            success : function(respuesta){
                $('#tablaCliente').html('')
                $("#tablaCliente").html(respuesta);
                $('#myTableCliente').DataTable();
            }
        });
    }
}

function creaTablaProspecto(){
    if ($('#myTableProspecto').length) {
        $('#myTableProspecto').DataTable();
    }
    else{
        $('#tablaProspecto').html('<div class="loader"></div>');
        $.ajax({
            url: 'extensiones/captcha/creaTablaProspecto.php',
            success : function(respuesta){
                $('#tablaProspecto').html('')
                $("#tablaProspecto").html(respuesta);
                $('#myTableProspecto').DataTable();
            }
        });
    }
}

function creaTablaVendedor(){
    if ($('#myTableVendedor').length) {
        $('#myTableVendedor').DataTable();
    }
    else{
        $('#tablaVendedor').html('<div class="loader"></div>');
        $.ajax({
            url: 'extensiones/captcha/creaTablaVendedor.php',
            success : function(respuesta){
                $('#tablaVendedor').html('')
                $("#tablaVendedor").html(respuesta);
                $('#myTableVendedor').DataTable();
            }
        });
    }
}

function validaEspacio(valor){
    $.ajax({
        type: 'GET',
        url: 'extensiones/captcha/validaEspacio.php',
        dataType: 'text',
        data: { 'value' : valor },
        success : function(respuesta){
            //alert(respuesta);
            //console.log(respuesta);
            var valida = respuesta.split("/")[0];
            var nuevoCtt = respuesta.split("/")[1];
            var flagInt = respuesta.split("/")[2];
            var tipoNecesidad = respuesta.split("/")[3];
            document.getElementById("flagIntegral").value = flagInt;
            if (valida == 'SI') {
                $('#tipoPlat').prop('disabled',false);
                $('#camposanto').prop('disabled',false);
                $('#ejex').prop('disabled',false);
                $('#ejey').prop('disabled',false);
                $('#plataforma').prop('disabled',false);
                $('#espacio').prop('disabled',false);
                $('#area').prop('disabled',false);
            }
            else{
                $('#tipoPlat').prop('disabled',true);
                $('#tipoPlat').val('');
                $('#camposanto').prop('disabled',true);
                $('#camposanto').val('');
                $('#ejex').prop('disabled',true);
                $('#ejex').val('');
                $('#ejey').prop('disabled',true);
                $('#ejey').val('');
                $('#plataforma').prop('disabled',true);
                $('#plataforma').val('');
                $('#espacio').prop('disabled',true);
                $('#espacio').val('');
                $('#area').prop('disabled',true);
                $('#area').val('');
            }
            if (nuevoCtt == 'NO') {
                $('#ctt').prop('disabled',false);
                document.getElementById("ctt").placeholder="Escriba el número de contrato";
                $('#modificaCtt').prop("checked", false);
                document.getElementById("modificaCtt").disabled = true;
            }
            else{
                $('#ctt').prop('disabled',true);
                document.getElementById("ctt").placeholder="";
                document.getElementById("modificaCtt").disabled = false;
            }
            if(tipoNecesidad == 'NI'){
                document.getElementById("tiponec").value = 'NI';
                $("#tiponec").change();
            }
            else{
                document.getElementById("tiponec").value = 'NF';
                $("#tiponec").change();
            }
        }
    });
}

function cambiaCodigo($cod){
    document.getElementById("codVendedor").value = $cod;
    $('#codVendedor').change();
}

function cambiaDocumento($cod){
    document.getElementById("numDocCliente").value = $cod;
    $('#numDocCliente').change();
}

function buscaSubtipo(valor){
    $.ajax({
        type: 'GET',
        url: 'extensiones/captcha/buscaSubtipo.php',
        dataType: 'text',
        data: { 'value' : valor },
        success : function(respuesta){
            $("#subServicio").html(respuesta);
        }
    });
}

function buscaPlataforma(valor){
    $.ajax({
        type: 'GET',
        url: 'extensiones/captcha/buscaPlataforma.php',
        dataType: 'text',
        data: { 'value' : valor },
        success : function(respuesta){
            $("#plataforma").html(respuesta);
        }
    });
}

function buscaDepartamento(valor){
    $.ajax({
        type: 'GET',
        url: 'extensiones/captcha/buscaDepartamento.php',
        dataType: 'text',
        data: { 'value' : valor },
        success : function(respuesta){
            $("#departamento").html(respuesta);
        }
    });
}

function buscaProvincia(valor){
    $.ajax({
        type: 'GET',
        url: 'extensiones/captcha/buscaProvincia.php',
        dataType: 'text',
        data: { 'value' : valor },
        success : function(respuesta){
            $("#provincia").html(respuesta);
        }
    });
}

function buscaDistrito(valor){
    $.ajax({
        type: 'GET',
        url: 'extensiones/captcha/buscaDistrito.php',
        dataType: 'text',
        data: { 'value' : valor },
        success : function(respuesta){
            $("#distrito").html(respuesta);
        }
    });
}

function buscaArea(valor){
    $.ajax({
        type: 'GET',
        url: 'extensiones/captcha/buscaArea.php',
        dataType: 'text',
        data: { 'value' : valor },
        success : function(respuesta){
            $("#area").html(respuesta);
        }
    });
}

function buscaEjex(valor){
    var plat = document.getElementById("plataforma").value;
    var campo = document.getElementById("camposanto").value;
    $.ajax({
        type: 'GET',
        url: 'extensiones/captcha/buscaEjex.php',
        dataType: 'text',
        data: { 'value' : valor, 'plat' : plat, 'campo' : campo },
        success : function(respuesta){
            $("#ejex").html(respuesta);
        }
    });
}

function buscaEjey(valor){
    var plat = document.getElementById("plataforma").value;
    var campo = document.getElementById("camposanto").value;
    var area = document.getElementById("area").value;
    $.ajax({
        type: 'GET',
        url: 'extensiones/captcha/buscaEjey.php',
        dataType: 'text',
        data: { 'value' : valor, 'plat' : plat, 'campo' : campo, 'area' : area },
        success : function(respuesta){
            $("#ejey").html(respuesta);
        }
    });
}

function buscaEspacio(valor){
    var plat = document.getElementById("plataforma").value;
    var campo = document.getElementById("camposanto").value;
    var area = document.getElementById("area").value;
    var ejex = document.getElementById("ejex").value;
    $.ajax({
        type: 'POST',
        url: 'ajax/wizard.ajax.php',
        dataType: 'json',
        data:{'value' : valor, 'plat' : plat, 'campo' : campo, 'area' : area, 'ejex' : ejex, 'edoEspacio' : 'mostrar'},
        success : function(respuesta){
            console.log('respuesta',respuesta);
            var edo = '';
            var texto = '"<option value = 0>Espacio.  </option>"';
            $.each(respuesta, function(key,value){
                if(value.cod_estado == 'E01'){
                    edo = 'LIBRE';
                }else if(value.cod_estado == 'E04'){
                    edo = 'BLOQUEADO';
                }else{
                    edo = 'OCUPADO';
                }
                texto += '<option value="'+value.cod_tipo_espacio+'/'+value.cod_estado+'">'+value.cod_espacio+' '+edo+'</option>';
            });//each  
            $("#espacio").html(texto);              
        }//success
    });
} 

function buscanomEspacio(valor){
    $.ajax({
        type: 'GET',
        url: 'extensiones/captcha/buscaNomEspacio.php',
        dataType: 'text',
        data: { 'value' : valor },
        success : function(respuesta){
            $("#tipo").val(respuesta);
        }
    });
    var aux = document.getElementById("espacio").value;
    var estado = aux.split("/")[1];
    if(estado == 'E01'){
        document.getElementById('estado').innerHTML='LIBRE';
        document.getElementById("estado").style.color = 'limegreen';
    }
    else if(estado == 'E04'){
        document.getElementById('estado').innerHTML='BLOQUEADO';
        document.getElementById("estado").style.color = 'gold';
    }
    else{
        document.getElementById('estado').innerHTML='OCUPADO';
        document.getElementById("estado").style.color = 'red';
    }
}
 function pasaAnumero(string){
    if(string == parseFloat(string)){
        valor = parseFloat(string);
    }
    else if(string.indexOf(',') != -1){
        var mil = string.split(',')[0];
        var cien = string.split(',')[1];
        var decenas = cien.split('.')[0];
        var decimal = cien.split('.')[1];
        valor = (parseInt(mil)*1000)+(parseInt(decenas))+(parseFloat(decimal)*0.01);
    }
    else if(string.indexOf('.') != -1){
        var decenas = string.split('.')[0];
        var decimal = string.split('.')[1];
        valor = (parseInt(decenas))+(parseFloat(decimal)*0.01);
    }
    else{
        valor = parseFloat(string);
    }
    return valor;
 }

function callTablaServiciosAdic(){
    var tipPro = document.getElementById("tipPro").value;
    var localidad = document.getElementById("localidad").value;
    var tiponec = document.getElementById("tiponec").value;
    var plat = document.getElementById("plataforma").value;
    var campo = document.getElementById("camposanto").value;
    var planSS = document.getElementById("subServicio").value;
    var flagInt = document.getElementById("flagIntegral").value;
    $('#tablaServiciosadic').html('<div class="loader"></div>');
    $.ajax({
        type: 'GET',
        url: 'extensiones/captcha/tablaServiciosadicionales.php',
        dataType: 'text',
        data:{'localidad':localidad, 'tiponec':tiponec, 'plat':plat, 'campo':campo, 'tipPro':tipPro, 'planSS':planSS, 'flagInt':flagInt},
        success : function(respuesta){
            $("#tablaServiciosadic").html(respuesta);
            $('#myTableServicios').DataTable();
        }
    });
}

function callTablaDscto(){
    var nFilas = $("#bodyServicio tr").length;
    if(nFilas == 0 ){
            swal({
                title: "Error",
                text: "Debe existir un servicio para hacerle un descuento, elija un servicio de la tabla anterior.",
                type: "error",
                confirmButtonText: "aceptar",
            })
        }
    else{   
            $('#m_modal_7').modal('show');
            $.ajax({
                type: 'GET',
                url: 'extensiones/captcha/tablaDescuentos.php',
                success : function(respuesta){
                    //console.log(respuesta);
                    $("#tablaDescuentos").html(respuesta);
                    $('#myTableDscto').DataTable();
                }
            });
        }
}

function callTablaEndoso(){
    var nFilas = $("#bodyServicio tr").length;
    if(nFilas == 0 ){
            swal({
                title: "Error",
                text: "Debe existir un servicio para añadirle el endoso, elija un servicio de la tabla de servicios.",
                type: "error",
                confirmButtonText: "aceptar",
            })
        }
    else{   
            $('#m_modal_8').modal('show');
            $.ajax({
                type: 'GET',
                url: 'extensiones/captcha/tablaEndosos.php',
                success : function(respuesta){
                    //console.log(respuesta);
                    $("#tablaEndosos").html(respuesta);
                    $('#myTableEndosos').DataTable();
                }
            });
        }
}

function cargaCui(){
    var aux = [];
    document.querySelectorAll('.numF').forEach(function (total) {
        var num = pasaAnumero(total.value);
        aux.push(num);
    });
    var min = Math.min.apply(null, aux);
     valor = Number(min).toLocaleString('en-US',{ style: 'decimal', maximumFractionDigits : 2, minimumFractionDigits : 2 });
    document.getElementById("importeCUI").value = valor;
    document.getElementById("cuitotal").value = valor;
}

function sumatabla(){
    document.querySelectorAll('.Total').forEach(function (total) {
        if (total.classList.length > 1) {
            var letra = total.classList[1];
            var suma = 0;
            document.querySelectorAll('.num' + letra).forEach(function (celda) {
                var valor = pasaAnumero(celda.value);
                suma += valor;
                valor1 = Number(suma).toLocaleString('en-US',{ style: 'decimal', maximumFractionDigits : 2, minimumFractionDigits : 2 });
            });
            total.innerHTML = valor1;
        }
    });
    var lde_total_dscto = document.getElementsByClassName("Total B")[0].innerHTML;
    document.getElementsByClassName("TotalD A")[0].innerHTML = lde_total_dscto;
    document.getElementById("imp_dscto").value = lde_total_dscto;
    var lde_total = document.getElementsByClassName("Total H")[0].innerHTML;
    document.getElementById("saldopagar").value = lde_total;
    document.getElementById("saldoFinanciar").value = lde_total;
    //cambiaTodo();
}

function totalizar(dato){
    var cui = document.getElementById("numF_"+dato).value;
    cui = pasaAnumero(cui);
    var endoso = document.getElementById("numG_"+dato).value;
    endoso = pasaAnumero(endoso);
    var monto = document.getElementById("numC1_"+dato).value;
    monto = pasaAnumero(monto);
    var pventa = document.getElementById("numA_"+dato).value;
    pventa = pasaAnumero(pventa);
    var dscto = document.getElementById("numB_"+dato).value;
    dscto = pasaAnumero(dscto);
    var ctd = document.getElementById("ctd_"+dato).value;
    ctd = pasaAnumero(ctd);

    var impTotal = pventa-dscto;
    var saldo = impTotal-cui-endoso;
    var valor0 = Number(impTotal).toLocaleString('en-US',{ style: 'decimal', maximumFractionDigits : 2, minimumFractionDigits : 2 }); 
    multiplica(ctd,pventa,dato);
    document.querySelectorAll('#numC_'+dato).forEach(function(importe){
    importe.innerHTML = valor0+"<input type='hidden' class='numC' value='"+valor0+"' id='numC1_"+dato+"'>";
    $("#numC1_"+dato).val(impTotal);
    });
    var valor1 = Number(saldo).toLocaleString('en-US',{ style: 'decimal', maximumFractionDigits : 2, minimumFractionDigits : 2 }); 
    document.querySelectorAll('#numH_'+dato).forEach(function(importe){
    importe.innerHTML = valor1+"<input type='hidden' class='numH' value='"+saldo+"' id='numH1_"+dato+"'>";
    $("#numH1_"+dato).val(saldo);
    });
    sumatabla();
}

function multiplica(cant,monto,id1){
  var total = parseFloat(cant)*parseFloat(monto);
  val = Number(total).toLocaleString('en-US',{ style: 'decimal', maximumFractionDigits : 2, minimumFractionDigits : 2 }); 
  id = id1.split('_')[1];
  prueba = "numC1_"+id;
  texto = '<input type="hidden" value="'+total+'" id="'+prueba+'">';
  document.querySelectorAll('#numC_'+id).forEach(function(resp){
    resp.innerHTML = val+texto;
    //totalizar(id);
   // sumatabla();
  });
}

function anadeServicio(cod){
    var existe = document.getElementById(cod);
    //console.log(existe);
        if (existe) {
            swal({
                title: "Error",
                text: "No se puede seleccionar el plan (paquete) y/o servicio mas de una vez, solo debe incrementar la cantidad.",
                type: "error",
                confirmButtonText: "aceptar",
            })
        }
        else{
            var tipo_necesidad = document.getElementById("tiponec").value;
            $.ajax({
            type: 'GET',
            url: 'extensiones/captcha/añadirServiciosadic.php',
            dataType: 'text',
            data:{'cod_servicio':cod, 'tipo_necesidad':tipo_necesidad},
            success : function(respuesta){
               document.getElementById("bodyServicio").insertAdjacentHTML("beforeEnd" ,respuesta);
               sumatabla();
               cargaCui();
               cambiaTodo();
               }
            });
        }
}
function anadeDscto(cod, nombre, flg, carencia){
    var existe = document.getElementById(cod);
    var total = document.getElementById("saldopagar").value;
    total = pasaAnumero(total);
    //console.log(existe);
        if(existe) {
            swal({
                title: "Error",
                text: "No se puede seleccionar el descuento mas de una vez, solo debe incrementar el monto.",
                type: "error",
                confirmButtonText: "aceptar",
            })
        }
        else{
            $.ajax({
            type: 'GET',
            url: 'extensiones/captcha/anadeDscto.php',
            dataType: 'text',
            data:{'cod_dscto':cod, 'nombre':nombre, 'libre':flg, 'carencia':carencia, 'total_servicio':total},
            success : function(respuesta){
               document.getElementById("bodyDscto").insertAdjacentHTML("beforeEnd" ,respuesta);
               //sumatablaDscto();
               
               cambiaTodo();
               }
            });
        }
}

function anadeEndoso(cod, nombre){
    var existe = document.getElementById(cod);
    var total = document.getElementById("saldopagar").value;
    var long = $("#bodyCobertura tr").length;
    total = pasaAnumero(total);
    //console.log(existe);
        if(existe) {
            swal({
                title: "Error",
                text: "No se puede seleccionar la cobertura mas de una vez, solo debe incrementar el monto.",
                type: "error",
                confirmButtonText: "aceptar",
            })
        }
        else{
            $.ajax({
            type: 'GET',
            url: 'extensiones/captcha/anadeEndoso.php',
            dataType: 'text',
            data:{'cod_dscto':cod, 'nombre':nombre},
            success : function(respuesta){
               document.getElementById("bodyCobertura").insertAdjacentHTML("beforeEnd" ,respuesta);
               var BootstrapDatepick = {
                    init: function() {
                        $("#m_datepicker_4_"+cod).datepicker({
                            todayHighlight: !0,
                            orientation: "bottom left",
                            autoclose: true,
                            templates: {
                                leftArrow: '<i class="la la-angle-left"></i>',
                                rightArrow: '<i class="la la-angle-right"></i>'
                            }
                        });
                    }
                }
               BootstrapDatepick.init()
               cambiaTodo();
               }
            });
        }
}

