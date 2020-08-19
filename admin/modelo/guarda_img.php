<?php

function saveImage($imagen){
	$permitidos = array("image/png", "image/jpg", "image/jpeg");
	$limite_kb = 600; //cantidad en bits

	if(in_array($imagen["type"],$permitidos) && $imagen["size"] <= ($limite_kb*1024) ){ //extrae formato y lo compara con los permitidos, extrae tamaño y lo compara con el limite
		$ruta = '../../vista/img/productos/'; //se selecciona ruta
		$archivo = $ruta.$imagen['name']; //se extrae el nombre del archivo

		if (!file_exists(($ruta))){
			mkdir($ruta);
		}
		
		if (!file_exists($ruta.$archivo)){
			$resultado = @move_uploaded_file($imagen["tmp_name"],$archivo);
			if ($resultado){
				//echo "Ya se guardo";
				return 1;
			}else{
				//echo "ya fue";
			}
		}
		else{
			echo "<script language='javascript'>alert('El nombre del archivo ya existe'); 
				window.history.back(); </script>";
			//echo "El archivo ya existe";
		}
	}
	else{
		echo "<script language='javascript'>alert('El archivo supera el tamaño'); 
				window.history.back(); </script>";
	}
}


?>