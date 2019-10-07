<?php
   $res = $_GET['res'];
   var_dump( $_SESSION['captcha']['code']);

       if( $_SESSION['captcha']['code'] == $res){
        echo 'true';
       }
       else{
        echo 'false';
       } 
?>