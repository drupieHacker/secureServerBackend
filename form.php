<?php
$nombre=$_REQUEST[nombre];
$correo=$_REQUEST[correo];
$pregunta=$_REQUEST[pregunta];

 /*  $conexion = mysqli_connect("localhost", "root", "", "secure") or
    die("Problemas con la conexión"); */
    $conexion = mysqli_connect("localhost", "seguri29_leads", "qjOT!t46Q8v9", "seguri29_leads") or
    die("Problemas con la conexión");
  mysqli_query($conexion, "insert into registros(nombre,correo,pregunta) values 
                       ('$nombre','$correo','$pregunta')")
    or die("Problemas en el select" . mysqli_error($conexion));

  mysqli_close($conexion);
  header("Location:feed.html");
 
  ?>