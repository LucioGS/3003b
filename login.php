<?php

	include "modelos/bbdd/usuario.php"; 
	
	$un_array = listado_usuarios();
		
	$entrada = "ko";
		
	foreach($un_array as $usuario){		
		if($_POST["user"] == $usuario["user"] && $_POST["password"] == $usuario["password"]){			
			$entrada = "ok";				
		}		
	}	
		
	if($entrada == "ok"){
		header('Location: filtro.php');
	}else{
		header('Location: index.php');
	}

	
?>
