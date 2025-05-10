<?php
$res = $_POST['res'];
$conexion = mysqli_connect("localhost", "root", "", "krysta") or die("Problemas con la conexión");
$registro = mysqli_query($conexion, "UPDATE respuesta SET Res = '$res'") or die("Problemas en el select: " . mysqli_error($conexion));
header("Location: Carta2.html");
mysqli_close($conexion);
?>