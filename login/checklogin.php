<?php
	include('claseconexion.php');	

$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];

$sql = "SELECT DISTINCT * FROM usuarios WHERE email = '$email' AND password = '$password'"; 
$dbcon = new DBconnection();
$mysqli = $dbcon->getConnection();
$result = $mysqli->query($sql);

if($f = $result->fetch_object()) { 
	session_start();
	$_SESSION["usuario"] = $f->usuario;
	$_SESSION["nombre"] = $f->nombre;
	
	header("Location: ../index2.php");
} else {
	echo "Usuario no Encontrado";
	header("Location: login.html");
}

?>