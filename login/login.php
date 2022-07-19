<?php
	include('claseconexion.php');	

	$nombre = $_POST['txtNombre'];
	$apellido= $_POST['txtApellido'];
	$email = $_POST['txtEmail'];
	$password = $_POST['txtPassword'];
	$confirmarpassword = $_POST['txtConfirmarPassword'];
	$grupo= $_POST['txtGrupo'];
	$ingenieria = $_POST ['txtCarrera'];
	$usuario = $_POST ['txtUsuario'];

	$sql = "INSERT INTO Usuarios (nombre, apellido, email, password, grupo, ingenieria, usuario) VALUES ('$nombre','$apellido','$email','$password','$grupo','$ingenieria','$usuario')"; 

	$resultado =mysqli_query($mysqli, $sql) or die("Hubo un error al Insertar este Usuario. ".$sql);

	header("Location: login.html");

?>

<?php 
mail("rafael.alba.is@unipolidgo.edu.mx,camacamafg@gmail.com","Welcome","Welcome back students") 
?>

