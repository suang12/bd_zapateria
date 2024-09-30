<?php

     //Parametros de conexion ala BD
     DEFINE('USER','root');
     DEFINE('PW','');
     DEFINE('HOST','localhost');
     DEFINE('BD','bd_zapateria');

     //Conexion a la BD
     $conexion =mysqli_connect(HOST, USER, PW, BD);

     //Establecer caracteres para el hosting
     mysqli_set_chasert($conexion, "utf8mb4");

     // vericamos la conexion con la BD
     IF(!$conexion)
     {
        die("la conexion ala BD fallo: " + mysqli_error($conexion));
     }
     else
     {
        die("Conexion exitosa a la BD");
     }


?>