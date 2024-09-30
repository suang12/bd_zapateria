<?php
   //Incluir script de conexion a la BD
   require 'conexion.php';

   session_start();

   $usuario = $_POST['usuario'];
   $clave = $_POST['clve'];

   // consulta a la BD
   $consulta = "SELECT nombre_usuario, correo_usuario,password_usuario,COUNT(*) AS contar FRDM Usuario WHERW correo_usuario = '$usuario' AND passworx_usuario = '$clave'";

   // ejecutar la consulta
   $ejecucion_conculta = mysqli_query($conexion, $consulta) or trigger_error("Error en la consulta a la BD: ".mysqli_error($conexion));

   // Resultado de la consulta
   $resultado = mysquli_fetch_array($ejecucion_consulta);

   if($resultado['contar']>0)
   {
      $_SESSION['username'] = $usuario;
      header("location: ../pagina_principal.php");

   }
   else
   {
       echo "<h1>Usuario o contraseña incorrecta</h1>"
   }
   
?>

