<?php 

include ("conexion.php");

class usuarios{

	  private $Id;
      private $email;
      private $Nombre;
      private $apellido;    
      private $estado;
      

      public function listarUsuariosActivos(){        
          $listar="SELECT * FROM usuarios where estado = 1";
          $con=new Conectar();
          $consul=mysqli_query($con->conectar(), $listar);
          return $consul;
          mysqli_close($con->conectar());
         }

      public function listarUsuariosInactivos(){        
          $listar="SELECT * FROM usuarios where estado = 2";
          $con=new Conectar();
          $consul=mysqli_query($con->conectar(), $listar);
          return $consul;
          mysqli_close($con->conectar());
         }


      public function listarUsuariosEspera(){        
          $listar="SELECT * FROM usuarios where estado = 3";
          $con=new Conectar();
          $consul=mysqli_query($con->conectar(), $listar);
          return $consul;
          mysqli_close($con->conectar());
         }

}


?>