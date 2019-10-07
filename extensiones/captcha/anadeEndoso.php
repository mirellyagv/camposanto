<?php
require_once "../../modelo/conexion.php";
   $cod = $_GET['cod_dscto'];
   $nombre = $_GET['nombre'];
   //var_dump($cod);
    $cod1='"'.$cod.'"';
    $db = new Conexion();                                             

       	$sql = $db->consulta("SELECT cod_entidad, dsc_entidad, dsc_direccion, flg_activo FROM vtama_entidad WHERE cod_entidad = '$cod'");
       // var_dump($db->recorrer($sql));
        $datos = array();
        while($key = $db->recorrer($sql)){
          $datos[] =  $key; 
          echo "<tr height='50' name='".$cod."' id='".$cod."' >
                  <td width='260' style='padding-left:30px;'>
                    ".$nombre."
                  </td>
                  <td style='text-align: center; padding-top:15px;' width='250'>
                    <input type='text' class='form-control m-input' id='m_datepicker_4_".$cod."' data-date-format='dd/mm/yyyy'>
                  </td>
                  <td style='text-align: center;' width='100'>
                    <select class='form-control m-input' name='mon_".$cod."' id='mon_".$cod."' disabled style='padding-right:1rem;'>
                      <option value='SOL' selected>S/.</option>
                      <option value='DOLAR'>$</option>
                    </select>
                  </td>
                  <td style='text-align: right;' width='180'>                  
                      <input type='text'  id='vEndoso_".$cod."' name='vEndoso_".$cod."' class='form-control m-input' placeholder='0,00' onchange='cambiaTodo();' style='text-align: right; padding-right:15px;'>
                  </td>
                  <td style='text-align: center; vertical-align: sub; padding-top:18px;' width='100'>
                    <input type='checkbox' class='m-checkbox eliminaEndoso' id='eliminaEndoso_".$cod."'>
                  </td>
                </tr>";  
        }
             
    $db->liberar($sql);
 		$db->cerrar();  
?>