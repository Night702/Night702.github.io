  <?php
include("config.php");
session_start();

$nom = $_POST['nom'];
$con = $_POST['con'];

$nom = $mysqli->real_escape_string($nom);

$query = "SELECT Nombre, Contraseña FROM login WHERE Nombre = '$nom' AND Contraseña = '$con';";
$result = $mysqli->query($query);
 
if($result->num_rows == 1) 
{
  $_SESSION['nom'] = $nom;
  header('Location: Feliz cumpleaños.html');  
}
else{ 
  header('Location: login.html');
}
?>