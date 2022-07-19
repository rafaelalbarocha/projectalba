<?php
	include('claseconexion.php');	
	$nombre = null;
	$creditos = null;
	$usuario = null;
	function setvariables()
	{
		$usuario = $_SESSION['usuario'];

		$sql = "SELECT DISTINCT * FROM usuarios WHERE usuario = '$usuario'"; 
		$dbcon = new DBconnection();
		$mysqli = $dbcon->getConnection();
		$result = $mysqli->query($sql);

		if($f = $result->fetch_object()) { 
			$_SESSION["creditos"] = $f->creditos;	
			$nombre = $_SESSION["nombre"];
		 	$_SESSION["apellidos"]=$f->apellido;
		    $_SESSION["email"]=$f->email;
		    $_SESSION["ingenieria"]=$f->ingenieria;
		    $_SESSION["grupo"]=$f->grupo;
		    $_SESSION["pg"]=$f->pg;
		    $_SESSION["ps"]=$f->ps;
		    $_SESSION["pb"]=$f->pb;
		} else {
			echo "Usuario no Encontrado";
		}
	}
?>