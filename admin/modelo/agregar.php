<?php
	require_once "conexion.php";
	require_once "guarda_img.php";
	$conexion=conexion();
	session_start();


if (isset($_POST['registrar'])) {
	if (strcmp($_REQUEST['cod'],"registro")==0) {

		$producto = $_POST['producto'];
		$sku = $_POST['sku'];
		$desc = $_POST['desc'];
		$precio = $_POST['precio'];
		$disp = $_POST['disp'];
		$categoria = $_POST['categoria'];
		$mascota = $_POST['mascota'];		

		$usuario= $_SESSION['id_admin'];

		if($_FILES['img']['error']>0){
			echo "<script language='javascript'>alert('Debe elegir una imagen'); window.history.back(); </script>";
		}else{
			$imagen = $_FILES['img']['name'];
			
			$sql = "INSERT INTO producto VALUES ('$sku', '$producto', '$desc', '$precio', '$categoria', '$mascota', '$disp', '$imagen', '$usuario')";

			if(saveImage($_FILES['img'])==1){
				$result= mysqli_query($conexion,$sql);
				echo "<script language='javascript'>alert('El producto ha sido agregado exitosamente');
					window.location.href='../vista/php/inicio.php';</script>";
			}else{
				/*echo "<script language='javascript'>alert('Ha ocurrido un error'); 
					window.history.back(); 
				</script>"; */
			}
		}
	}
}

?>