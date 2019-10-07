<?php
require_once "../funciones.php";
require_once "../controlador/wizard.controlador.php";
require_once "../modelo/wizard.modelo.php";
class AjaxWizard{
	public function ajaxEdoEspacio(){
		$respuesta = ControladorWizard::ctrEdoEspacio();
		echo json_encode($respuesta);
	}//function ajaxEdoEspacio
}//class AjaxWizard
/*=============================================
ACCIONES
=============================================*/
if(isset($_POST["edoEspacio"]) && $_POST["edoEspacio"] == 'mostrar'){
	$cliente = new AjaxWizard();
	$cliente -> ajaxEdoEspacio();
}