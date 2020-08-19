<?php
require_once "../../modelo/conexion.php";
$conexion = conexion();
session_start();
@$ticket = $_SESSION['ticket'];
?>

<div class="container">
	<table class="table table-hover table-responsive-md mb-4">
		<thead>
			<tr>
				<th>Imagen</th>
				<th>Producto</th>
				<th>Cantidad</th>
				<th>Precio unitario</th>
				<th>Subtotal</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT p.imagen, p.nombre_producto, a.cantidad, p.precio_unitario, a.total_producto, a.sku FROM producto p, compra c, asocia a WHERE a.no_ticket= '$ticket' AND a.sku= p.sku AND a.no_ticket = c.no_ticket AND c.status LIKE '%espera%' ORDER BY p.nombre_producto ASC";
			
			$result= mysqli_query($conexion, $sql);
			$contador = 0;
			while ($ver= mysqli_fetch_array($result)){
				$contador= $contador + $ver['total_producto'];
				?>
				<tr>
					<td> <img src="../img/productos/<?php echo $ver['imagen']?>" style="width: 200px;"> </td>
					<td> <a href="producto.php?sku=<?php echo $ver['sku']?>"> <?php echo $ver['nombre_producto']?> </a></td>
					<td style="text-align: center;" ><?php echo $ver['cantidad']?></td>
					<td style="text-align: center;" >$<?php echo $ver['precio_unitario']?></td>
					<td style="text-align: center;" >$<?php echo $ver['total_producto']?></td>
					<td>
						<button class="btn btn-danger" data-toggle="modal" onclick="pregunta('<?php echo $ticket; ?>', '<?php echo $ver['sku']; ?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
					</td>
				</tr>
				<?php
			}
			$contador = number_format($contador, 2, '.','');
			?>
		</tbody>
	</table>
	<hr>
	<p>
		<h2>Procesar pago</h2><br>
		<h5 style="text-align: center;">Total a pagar: $<?php echo number_format($contador, 2, '.',','); ?> MXN</h5>	
		
		<div class="form-row mt-3">
			<div class="col-3"></div>
			<div class="col-4">
				<input type="number" class="form-control" id="tarjeta" placeholder="Ingrese su número de tarjeta" style="text-align: center;" required="">
			</div>
			<div class="col-2">
				<button class="btn form-control btn-success" onclick="pagar('<?php echo $contador; ?>', '<?php echo $ticket; ?>')"><i class="fa fa-credit-card" aria-hidden="true"></i> Pagar ahora</button>
			</div>
			<div class="col">
			</div>
		</div>
		
	</p>
</div>
<!--  -->
