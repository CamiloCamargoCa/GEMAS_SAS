<?php 

  class conectar{
       function conectar(){
           $s="localhost";
           $bd="gema_sas";
           $u="root";
           $p="";
           
           $conexion=new mysqli($s,$u,$p,$bd);
           if ($conexion->connect_errno) {
               echo 'no conectado';
               
           }else
               
               return $conexion;
        }
        }












 ?>