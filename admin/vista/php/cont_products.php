<?php
require_once "../../modelo/conexion.php";
$conexion=conexion();
$mascota= $_GET['mascota'];
?>

<div id="Alimento" class="mt-3">
	<div style="text-align: right;">
		<a href="agregar_nuevo.php" class="btn btn-primary">
			<span class="fa fa-plus-circle"></span> Agregar nuevo producto
		</a>
	</div>
	<h3>Alimento</h3>
	<table class="table-responsive-lg table table-hover table-bordered mb-2">
		<thead>
			<tr>
				<th scope="col">Quien agregó</th>
				<th scope="col">SKU</th>
				<th scope="col">Nombre del producto</th>
				<th scope="col">Descripción</th>
				<th scope="col">Precio unitario</th>
				<th scope="col">Disponibilidad</th>
				<th scope="col">Imagen</th>
				<th scope="col">Editar</th>
				<th scope="col">Eliminar</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$sql="SELECT sku, nombre_producto, descripcion, precio_unitario, disponibilidad, imagen, mascota, categoria, administrador FROM producto WHERE mascota LIKE '%$mascota%' AND categoria='Alimento' ORDER BY nombre_producto ASC";
			$result = mysqli_query($conexion, $sql);
			while ($ver= mysqli_fetch_array($result)){
				$datos = $ver[0].'||'.$ver[1].'||'.$ver[2].'||'.$ver[3].'||'.$ver[4].'||'.$ver[5].'||'.$ver[6].'||'.$ver[7];
				$dis = $ver[0].'||'.$ver[1].'||'.$ver[6];
				?>
				
			<tr>
				<td><?php echo $ver['administrador'] ?></td>
				<td><?php echo $ver['sku'];?></td>
				<td><?php echo $ver['nombre_producto'];?></td>
				<td><?php echo $ver['descripcion'];?></td>
				<td>$<?php echo $ver['precio_unitario'];?></td>
				<td><?php echo $ver['disponibilidad'];?> 
					<button class="btn btn-primary" data-toggle="modal" data-target='#modalagrega' onclick="disponibilidad('<?php echo $dis; ?>')"><i class="fa fa-plus" aria-hidden="true"></i></button>
				</td>
				<td><img style="width: 130px; height: auto;" src="../../../vista/img/productos/<?php echo $ver['imagen'];?>"></td>
				<td>
					<button class="btn btn-warning" data-toggle="modal" data-target='#modalEdicion' onclick="agregaform('<?php echo $datos ?>')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
				</td>
				<td>
					<button class="btn btn-danger" data-toggle="modal" onclick="pregunta('<?php echo $ver[0] ?>', '<?php echo $ver[6]?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
				</td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>
<hr>


<div id="Collares" class="mt-3">
	<div style="text-align: right;">
		<a href="agregar_nuevo.php" class="btn btn-primary">
			<span class="fa fa-plus-circle"></span> Agregar nuevo producto
		</a>
	</div>
	<h3>Collares y correas</h3>
	<table class="table-responsive-lg table table-hover mb-2">
		<thead>
			<tr>
				<th scope="col">Quien agregó</th>
				<th scope="col">SKU</th>
				<th scope="col">Nombre del producto</th>
				<th scope="col">Descripción</th>
				<th scope="col">Precio unitario</th>
				<th scope="col">Disponibilidad</th>
				<th scope="col">Imagen</th>
				<th scope="col">Editar</th>
				<th scope="col">Eliminar</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$sql="SELECT sku, nombre_producto, descripcion, precio_unitario, disponibilidad, imagen, mascota, categoria, administrador FROM producto WHERE mascota LIKE '%$mascota%' AND categoria='Collares y correas' ORDER BY nombre_producto ASC";
			$result = mysqli_query($conexion, $sql);
			while ($ver= mysqli_fetch_array($result)){
				$datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6]."||".$ver[7];
				$dis = $ver[0].'||'.$ver[1].'||'.$ver[6];
				?>
			
			<tr>
				<td><?php echo $ver['administrador'] ?></td>
				<td><?php echo $ver['sku'];?></td>
				<td><?php echo $ver['nombre_producto'];?></td>
				<td><?php echo $ver['descripcion'];?></td>
				<td>$<?php echo $ver['precio_unitario'];?></td>
				<td><?php echo $ver['disponibilidad'];?>
					<button class="btn btn-primary" data-toggle="modal" data-target='#modalagrega' onclick="disponibilidad('<?php echo $dis; ?>')"><i class="fa fa-plus" aria-hidden="true"></i></button>
				</td>
				<td><img style="width: 130px; height: auto;" src="../../../vista/img/productos/<?php echo $ver['imagen'];?>"></td>
				<td>
					<button class="btn btn-warning" data-toggle="modal" data-target='#modalEdicion' onclick="agregaform('<?php echo $datos ?>')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
				</td>
				<td>
					<button class="btn btn-danger" data-toggle="modal" onclick="pregunta('<?php echo $ver[0] ?>', '<?php echo $ver[6]?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
				</td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>
<hr>

<div id="Higiene" class="mt-3">
	<div style="text-align: right;">
		<a href="agregar_nuevo.php" class="btn btn-primary">
			<span class="fa fa-plus-circle"></span> Agregar nuevo producto
		</a>
	</div>
	<h3>Higiene</h3>
	<table class="table-responsive-lg table table-hover mb-2">
		<thead>
			<tr>
				<th scope="col">Quien agregó</th>
				<th scope="col">SKU</th>
				<th scope="col">Nombre del producto</th>
				<th scope="col">Descripción</th>
				<th scope="col">Precio unitario</th>
				<th scope="col">Disponibilidad</th>
				<th scope="col">Imagen</th>
				<th scope="col">Editar</th>
				<th scope="col">Eliminar</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$sql="SELECT sku, nombre_producto, descripcion, precio_unitario, disponibilidad, imagen, mascota, categoria, administrador FROM producto WHERE mascota LIKE '%$mascota%' AND categoria='Higiene' ORDER BY nombre_producto ASC";
			$result = mysqli_query($conexion, $sql);
			while ($ver= mysqli_fetch_array($result)){
				$datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6]."||".$ver[7];
				$dis = $ver[0].'||'.$ver[1].'||'.$ver[6];
				?>
			
			<tr>
				<td><?php echo $ver['administrador'] ?></td>
				<td><?php echo $ver['sku'];?></td>
				<td><?php echo $ver['nombre_producto'];?></td>
				<td><?php echo $ver['descripcion'];?></td>
				<td>$<?php echo $ver['precio_unitario'];?></td>
				<td><?php echo $ver['disponibilidad'];?>
					<button class="btn btn-primary" data-toggle="modal" data-target='#modalagrega' onclick="disponibilidad('<?php echo $dis; ?>')"><i class="fa fa-plus" aria-hidden="true"></i></button>
				</td>
				<td><img style="width: 130px; height: auto;" src="../../../vista/img/productos/<?php echo $ver['imagen'];?>"></td>
				<td>
					<button class="btn btn-warning" data-toggle="modal" data-target='#modalEdicion' onclick="agregaform('<?php echo $datos ?>')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
				</td>
				<td>
					<button class="btn btn-danger" data-toggle="modal" onclick="pregunta('<?php echo $ver[0] ?>', '<?php echo $ver[6]?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
				</td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>
<hr>


<div id="Hogar" class="mt-3">
	<div style="text-align: right;">
		<a href="agregar_nuevo.php" class="btn btn-primary">
			<span class="fa fa-plus-circle"></span> Agregar nuevo producto
		</a>
	</div>
	<h3>Hogar</h3>
	<table class="table-responsive-lg table table-hover mb-2">
		<thead>
			<tr>
				<th scope="col">Quien agregó</th>
				<th scope="col">SKU</th>
				<th scope="col">Nombre del producto</th>
				<th scope="col">Descripción</th>
				<th scope="col">Precio unitario</th>
				<th scope="col">Disponibilidad</th>
				<th scope="col">Imagen</th>
				<th scope="col">Editar</th>
				<th scope="col">Eliminar</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$sql="SELECT sku, nombre_producto, descripcion, precio_unitario, disponibilidad, imagen, mascota, categoria, administrador FROM producto WHERE mascota LIKE '%$mascota%' AND categoria='Hogar' ORDER BY nombre_producto ASC";
			$result = mysqli_query($conexion, $sql);
			while ($ver= mysqli_fetch_array($result)){
				$datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6]."||".$ver[7];
				$dis = $ver[0].'||'.$ver[1].'||'.$ver[6];
				?>
			
			<tr>
				<td><?php echo $ver['administrador'] ?></td>
				<td><?php echo $ver['sku'];?></td>
				<td><?php echo $ver['nombre_producto'];?></td>
				<td><?php echo $ver['descripcion'];?></td>
				<td>$<?php echo $ver['precio_unitario'];?></td>
				<td><?php echo $ver['disponibilidad'];?>
					<button class="btn btn-primary" data-toggle="modal" data-target='#modalagrega' onclick="disponibilidad('<?php echo $dis; ?>')"><i class="fa fa-plus" aria-hidden="true"></i></button>
				</td>
				<td><img style="width: 130px; height: auto;" src="../../../vista/img/productos/<?php echo $ver['imagen'];?>"></td>
				<td>
					<button class="btn btn-warning" data-toggle="modal" data-target='#modalEdicion' onclick="agregaform('<?php echo $datos ?>')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
				</td>
				<td>
					<button class="btn btn-danger" data-toggle="modal" onclick="pregunta('<?php echo $ver[0] ?>', '<?php echo $ver[6]?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
				</td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>
<hr>


<div id="Juguetes" class="mt-3">
	<div style="text-align: right;">
		<a href="agregar_nuevo.php" class="btn btn-primary">
			<span class="fa fa-plus-circle"></span> Agregar nuevo producto
		</a>
	</div>
	<h3>Juguetes</h3>
	<table class="table-responsive-lg table table-hover mb-2">
		<thead>
			<tr>
				<th scope="col">Quien agregó</th>
				<th scope="col">SKU</th>
				<th scope="col">Nombre del producto</th>
				<th scope="col">Descripción</th>
				<th scope="col">Precio unitario</th>
				<th scope="col">Disponibilidad</th>
				<th scope="col">Imagen</th>
				<th scope="col">Editar</th>
				<th scope="col">Eliminar</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$sql="SELECT sku, nombre_producto, descripcion, precio_unitario, disponibilidad, imagen, mascota, categoria, administrador FROM producto WHERE mascota LIKE '%$mascota%' AND categoria='Juguete' ORDER BY nombre_producto ASC";
			$result = mysqli_query($conexion, $sql);
			while ($ver= mysqli_fetch_array($result)){
				$datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6]."||".$ver[7];
				$dis = $ver[0].'||'.$ver[1].'||'.$ver[6];
				?>
			
			<tr>
				<td><?php echo $ver['administrador'] ?></td>
				<td><?php echo $ver['sku'];?></td>
				<td><?php echo $ver['nombre_producto'];?></td>
				<td><?php echo $ver['descripcion'];?></td>
				<td>$<?php echo $ver['precio_unitario'];?></td>
				<td><?php echo $ver['disponibilidad'];?>
					<button class="btn btn-primary" data-toggle="modal" data-target='#modalagrega' onclick="disponibilidad('<?php echo $dis; ?>')"><i class="fa fa-plus" aria-hidden="true"></i></button>
				</td>
				<td><img style="width: 130px; height: auto;" src="../../../vista/img/productos/<?php echo $ver['imagen'];?>"></td>
				<td>
					<button class="btn btn-warning" data-toggle="modal" data-target='#modalEdicion' onclick="agregaform('<?php echo $datos ?>')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
				</td>
				<td>
					<button class="btn btn-danger" data-toggle="modal" onclick="pregunta('<?php echo $ver[0] ?>', '<?php echo $ver[6]?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
				</td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>
<hr>


<div id="Ropa" class="mt-3">
	<div style="text-align: right;">
		<a href="agregar_nuevo.php" class="btn btn-primary">
			<span class="fa fa-plus-circle"></span> Agregar nuevo producto
		</a>
	</div>
	<h3>Ropa</h3>
	<table class="table-responsive-lg table table-hover mb-2">
		<thead>
			<tr>
				<th scope="col">Quien agregó</th>
				<th scope="col">SKU</th>
				<th scope="col">Nombre del producto</th>
				<th scope="col">Descripción</th>
				<th scope="col">Precio unitario</th>
				<th scope="col">Disponibilidad</th>
				<th scope="col">Imagen</th>
				<th scope="col">Editar</th>
				<th scope="col">Eliminar</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$sql="SELECT sku, nombre_producto, descripcion, precio_unitario, disponibilidad, imagen, mascota, categoria, administrador FROM producto WHERE mascota LIKE '%$mascota%' AND categoria='Ropa' ORDER BY nombre_producto ASC";
			$result = mysqli_query($conexion, $sql);
			while ($ver= mysqli_fetch_array($result)){
				$datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6]."||".$ver[7];
				$dis = $ver[0].'||'.$ver[1].'||'.$ver[6];
				?>
			
			<tr>
				<td><?php echo $ver['administrador'] ?></td>
				<td><?php echo $ver['sku'];?></td>
				<td><?php echo $ver['nombre_producto'];?></td>
				<td><?php echo $ver['descripcion'];?></td>
				<td>$<?php echo $ver['precio_unitario'];?></td>
				<td><?php echo $ver['disponibilidad'];?>
					<button class="btn btn-primary" data-toggle="modal" data-target='#modalagrega' onclick="disponibilidad('<?php echo $dis; ?>')"><i class="fa fa-plus" aria-hidden="true"></i></button>
				</td>
				<td><img style="width: 130px; height: auto;" src="../../../vista/img/productos/<?php echo $ver['imagen'];?>"></td>
				<td>
					<button class="btn btn-warning" data-toggle="modal" data-target='#modalEdicion' onclick="agregaform('<?php echo $datos ?>')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
				</td>
				<td>
					<button class="btn btn-danger" data-toggle="modal" onclick="pregunta('<?php echo $ver[0] ?>', '<?php echo $ver[6]?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
				</td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>
<hr>

<div id="Salud" class="mt-3">
	<div style="text-align: right;">
		<a href="agregar_nuevo.php" class="btn btn-primary">
			<span class="fa fa-plus-circle"></span> Agregar nuevo producto
		</a>
	</div>
	<h3>Salud</h3>
	<table class="table-responsive-lg table table-hover mb-2">
		<thead>
			<tr>
				<th scope="col">Quien agregó</th>
				<th scope="col">SKU</th>
				<th scope="col">Nombre del producto</th>
				<th scope="col">Descripción</th>
				<th scope="col">Precio unitario</th>
				<th scope="col">Disponibilidad</th>
				<th scope="col">Imagen</th>
				<th scope="col">Editar</th>
				<th scope="col">Eliminar</th>
			</tr>
		</thead>
		<tbody>

			<?php
			$sql="SELECT sku, nombre_producto, descripcion, precio_unitario, disponibilidad, imagen, mascota, categoria, administrador FROM producto WHERE mascota LIKE '%$mascota%' AND categoria='Salud' ORDER BY nombre_producto ASC";
			$result = mysqli_query($conexion, $sql);
			while ($ver= mysqli_fetch_array($result)){
				$datos=$ver[0]."||".$ver[1]."||".$ver[2]."||".$ver[3]."||".$ver[4]."||".$ver[5]."||".$ver[6]."||".$ver[7];
				$dis = $ver[0].'||'.$ver[1].'||'.$ver[6];
				?>
			
			<tr>
				<td><?php echo $ver['administrador'] ?></td>
				<td><?php echo $ver['sku'];?></td>
				<td><?php echo $ver['nombre_producto'];?></td>
				<td><?php echo $ver['descripcion'];?></td>
				<td>$<?php echo $ver['precio_unitario'];?></td>
				<td><?php echo $ver['disponibilidad'];?>
					<button class="btn btn-primary" data-toggle="modal" data-target='#modalagrega' onclick="disponibilidad('<?php echo $dis; ?>')"><i class="fa fa-plus" aria-hidden="true"></i></button>
				</td>
				<td><img style="width: 140px; height: auto;" src="../../../vista/img/productos/<?php echo $ver['imagen'];?>"></td>
				<td>
					<button class="btn btn-warning" data-toggle="modal" data-target='#modalEdicion' onclick="agregaform('<?php echo $datos ?>')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
				</td>
				<td>
					<button class="btn btn-danger" data-toggle="modal" onclick="pregunta('<?php echo $ver[0] ?>', '<?php echo $ver[6]?>')"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
				</td>
			</tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>
<hr>