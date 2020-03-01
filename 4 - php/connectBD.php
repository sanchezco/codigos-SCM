<?php

function conectarBD(){ 
		require_once("config.php");	
		//variable que guarda la conexi�n de la base de datos
		$conexion = mysqli_connect($server, $usuario, $pass, $bd);
		//Comprobamos si la conexi�n ha tenido exito
		if(!$conexion){ 
		   echo 'Ha sucedido un error inexperado en la conexion de la base de datos<br>'; 
		} 
		//devolvemos el objeto de conexi�n para usarlo en las consultas  
		return $conexion; 
}  
/*Desconectar la conexion a la base de datos*/
function desconectarBD($conexion){
		//Cierra la conexi�n y guarda el estado de la operaci�n en una variable
		$close = mysqli_close($conexion); 
		//Comprobamos si se ha cerrado la conexi�n correctamente
		if(!$close){  
		   echo 'Ha sucedido un error inexperado en la desconexion de la base de datos<br>'; 
		}    
		//devuelve el estado del cierre de conexi�n
		return $close;         
}
?>

