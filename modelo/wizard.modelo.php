<?php
require_once "conexion.php";
require_once "../funciones.php";
class ModeloWizard{
	static public function mdlEdoEspacio($tabla,$camps,$plat,$area,$x,$y){
		$db = new Conexion();
		$sql = $db->consulta("SELECT distinct cod_espacio, cod_tipo_espacio, cod_estado  FROM vtaca_espacio where cod_camposanto = '$camps' and cod_plataforma = '$plat' and cod_area_plataforma = '$area' and cod_eje_horizontal = '$x' and cod_eje_vertical = '$y'");
		$datos = array();
    	while($key = $db->recorrer($sql)){
	    		$datos[] = arrayMapUtf8Encode($key);
			}
		return $datos;
		$db->liberar($sql);
        $db->cerrar();
	}

}//class ModeloWizard
?>