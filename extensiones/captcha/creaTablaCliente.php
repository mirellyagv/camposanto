<?php
require_once "../../modelo/conexion.php";
        $db = new Conexion();                                             

                $sql = $db->consulta("SELECT cod_calificacion, cod_cliente, dsc_cliente, dsc_documento, dsc_telefono_1 FROM vtama_cliente");

                $datos = array();
                echo'
                <div class="m-scrollable" data-scrollbar-shown="true" data-scrollable="true" data-max-height="480">
                    <div class="table-responsive">
                    <table id="myTableCliente" cellpadding="0" cellspacing="0" border="0" display="block" >
                            <thead>
                                <tr>
                                    <th width="58" align="left">Codigo</th>
                                    <th width="274" align="left">Cliente</th>
                                    <th width="124" align="left">N° Documento</th>
                                    <th width="119" align="left">Teléfono</th>
                                    <th width="103" align="left">Calificación</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>';

                while($key = $db->recorrer($sql)){
                    $datos[] =  $key;
                    if($key['cod_calificacion'] == 'CA001'){
                        $tipoCal = 'REGULAR';
                    }
                    elseif ($key['cod_calificacion'] == 'CA002') {
                        $tipoCal = '<p style = "color:gold;"><b>VIP</b></p>';
                    }
                    else{
                        $tipoCal = '<p style = "color:red;"><b>NEGATIVO</b></p>';
                    }
                    $cod = "'".$key['dsc_documento']."'";
                   echo 
                   '<tr style="height: 60px;">
                        <td>
                            '.$key['cod_cliente'].'
                        </td>
                        <td>
                            '.$key['dsc_cliente'].'
                        </td>
                        <td style="text-align: center;">
                            '.$key['dsc_documento'].'
                        </td>
                        <td style="text-align: center;">
                            '.$key['dsc_telefono_1'].'
                        </td>
                        <td style="text-align: center;">
                            '.$tipoCal.'
                        </td>
                        <td>
                            <button type="button" onclick = "cambiaDocumento('.$cod.')" class="m-btn btn btn-danger" data-dismiss="modal">
                                <i class="la la-plus"></i>
                            </button>
                        </td>
                    </tr>';

                } 

                echo '
                    </tbody>
                    </table>
                    </div>
                    </div>';          

        $db->liberar($sql);
        $db->cerrar();

        return $datos;

?>