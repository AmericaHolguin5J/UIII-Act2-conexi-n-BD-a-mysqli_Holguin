<?php
    $miservidor = "127.0.0.1";
    $miusuario = "root";
    $contra = "";
    $mibasededatos = "cereso";
    //create connection 
    $miconexion = new mysqli($miservidor, $miusuario, $contra, $mibasededatos);
    //check connection 
    if ($miconexion->connect_error) {
        die("Fallo la conexion revisa tus datos de conexion !!!: " . $miconexion->connect_error);
    }
    echo "Bienvenido al servidor de base de datos";
    //construir base de datos 
    $laconsulta="SELECT * FROM guardia";
    //mostrar resultads em tabla html
    print("<table>");
    //Realizar la consulta 
    $resultado = $miconexion->query($laconsulta);
    foreach ( $resultado as $rows) {
        print("<tr>");
        print("<td>".$rows["Nombre"]."</td>");
        print("<td>".$rows["Apellido"]."</td>");
        print("<td>".$rows["Edad"]."</td>");
        print("</tr>");
    } 
    print("</table>");
?>