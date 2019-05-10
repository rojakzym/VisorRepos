<?php
class ModelController{
	//la funcion para registrar una busqueda
	public static function save($keyword,$host){
		$db=BdController::conn($host);
		$sql = "INSERT INTO logbusquedas (keyword) VALUES('$keyword')";
		mysqli_query($db,$sql);
		mysqli_close($db);
		}
	}