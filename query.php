<?php 
	$base = new PDO('mysql:host=localhost; dbname=animatoys','root','');
	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$base->exec("SET CHARACTER SET utf8");

	$buscar='';
	if(isset($_POST['buscar'])){
		$buscar = $_POST['buscar'];
	}
	$sql="SELECT * FROM producto WHERE nombre_producto  LIKE '%".$buscar."%'";

	
	$resultado = $base->query($sql);
	$fila = $resultado->fetch(PDO::FETCH_ASSOC);
	$total = array($fila);

?>
<?php 
	if($total>0 && $buscar != ''){ ?>
	<div class="resultado">
<?php do{ ?>
<div class="resultado-q" style= "background:#5E8BB9;color:white;font-size=23px;font-weight:bold;width:50%;display: block;padding: 10;">
<?php 
		
		
                echo'
                
             <a href="vista/php/producto.php?sku='.$fila['sku'].'" tittle="ver producto" style="color:white;">  
               <br>'.$fila['nombre_producto'].'  <br>$'.$fila['precio_unitario'].'
               <br> 
               <img style="width:20%;"src="vista/img/productos/'.$fila['imagen'].'"</a><hr> 
                ';
?>
	</div>
<?php 
	}while($fila=$resultado->fetch(PDO::FETCH_ASSOC));
?>

<?php
	}
	elseif($total>0 && $buscar=='') echo "<div class='resultado' style='width:50%;'></div>";
	else echo "<div class='resultado'><h6>No se encontraron resultados</h6></div>";
?>

