<?php

	require_once './conexionbd.php';
	

	$hola = "hola";

	$ObserverClass =  new ObserverClass();
	
	// capturar información del formulario de busqueda
	if(isset($_GET['search'])){
		$obj = $_GET['search'];
		$ObserverClass->getUser($mysqli, $obj);
	}

	if(!empty($_POST)){
		$obj = (object) $_POST;
		$ObserverClass->insertUser($mysqli, $obj);
	}

	class ObserverClass {
		function getUser($mysqli, $obj){

			$queryRevista = $mysqli->query ("SELECT nombre, apellido FROM usuario WHERE id_usuario =".$obj."");

			$valores = mysqli_fetch_array($queryRevista);

			if($valores == NULL){
				echo "No estas registrado, por favor registrate antes de realizar una suscripción";
			}else{
				echo "Hola <b>".$valores['nombre']."</b> ya te encuentras registrado";
			}
		}

		function insertUser($mysqli, $obj){


				$valores = $mysqli->query("INSERT INTO usuario(id_usuario, nombre, apellido, edad, cod_ciudad) VALUES(".$obj->identification.",'".$obj->first_name."', '".$obj->last_name."', ".$obj->age.",".$obj->city.")");
			}
			//echo $valores;
		

	}

	

	function suscribeUser($mysqli, $obj){}
?>