<?php
require_once'../../modelo/conexion.php';
require_once'../../controlador/busca_categoria.php';
$conexion = conexion();

$categorias = $_GET['categoria'];
$categoria= busca_categoria($categorias);
$nombre_cat = nombre_categoria($categorias);
$mascota = $_GET['mascota']; 

$sqlcat= "SELECT sku, imagen, nombre_producto, precio_unitario FROM producto WHERE categoria= '$categoria' AND mascota LIKE '%$mascota%'";
$resultcat= mysqli_query($conexion, $sqlcat);

echo "<h2>$nombre_cat para $mascota</h2> <br>";
$contar_cat = mysqli_num_rows($resultcat);

if ($contar_cat == 0) {
	echo "<p style='text-align: center;'>No se encontraron resultados</p>";
	return false;
}
?>

<div class="row">
	<?php
		while ($producto= mysqli_fetch_array($resultcat)){
		?>

		<div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-3">
			<div style="height: 200px; overflow: hidden;">
				<img class="img-container" src="../img/productos/<?php echo $producto['imagen']?>">
			</div>
			<div style="height: 50px; overflow: hidden;">
				<p style="text-align: center;">
					<strong><?php echo $producto['nombre_producto']; ?></strong><br>
				</p>
			</div>
			<div style="text-align: center; margin-bottom: 15px;">
				<strong>$<?php echo $producto['precio_unitario'];?> MXN</strong><br>
				<a href="producto.php?sku=<?php echo $producto['sku']?>" class="btn btn-primary">Ver información</a>
			</div>
		</div>

		<?php
		}
	?>
	
</div>

