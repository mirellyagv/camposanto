<?php
class ControladorWizard{
	static public function ctrEdoEspacio(){
		$tabla = "vtaca_espacio";
		$y = $_POST['value'];
	    $x = $_POST['ejex'];
	    $area = $_POST['area'];
	    $plat = $_POST['plat'];
	    $camps = $_POST['campo'];
		$respuesta = ModeloWizard::mdlEdoEspacio($tabla,$camps,$plat,$area,$x,$y);
		return $respuesta;
	}//function ctrMostrarAnio

}//class ControladorWizard
?>