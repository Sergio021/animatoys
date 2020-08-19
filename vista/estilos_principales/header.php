<?php
session_start();
?>
	<div style="text-align:center; background-image: url('vista/img/f2.jpg');">
			<img src="vista/img/logo.png"  class="img-fluid imgslogan" style="width:500px;height:170px;">
		</div>

		<div class="menu_bar">
			<a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
		</div>
		<nav>
			<ul>
				<li><a href="index.php"><i class="fa fa-home" aria-hidden="true" style="color:white;"></i> Home</a></li>
				
				<li class="submenu">
					<a href="#"><i class="fa fa-paw" aria-hidden="true"></i> Mascotas</a>
					<ul class="children">
						<li class="submenu"><a href="vista/php/aves.php">Aves</a></li>
						<li><a href="vista/php/caballo.php">Caballos</a></li>
						<li><a href="vista/php/conejo.php">Conejos</a></li>
						<li><a href="vista/php/gato.php">Gatos</a></li>
						<li><a href="vista/php/peces.php">Peces</a></li>
						<li><a href="vista/php/perro.php">Perros</a></li>
						<li><a href="vista/php/reptiles.php">Reptiles</a></li>
						<li><a href="vista/php/roedores.php">Roedores</a></li>
					</ul>
				</li>
				<li class="submenu">
					<a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Productos</a>
					<ul class="children">
						<li class="submenu"><a href="vista/php/productos.php?categoria=0">Alimento</a></li>
						<li><a href="vista/php/productos.php?categoria=1">Collares y Correas</a></li>
						<li><a href="vista/php/productos.php?categoria=2">Higiene</a></li>
						<li><a href="vista/php/productos.php?categoria=3">Hogar</a></li>
						<li><a href="vista/php/productos.php?categoria=4">Juguetes</a></li>
						<li><a href="vista/php/productos.php?categoria=5">Ropa</a></li>
						<li><a href="vista/php/productos.php?categoria=6">Salud</a></li>
					</ul>
				</li>
				
				<?php
					if (isset($_SESSION['id_usuario'])) {
				?>	
						<li class="submenu">
							<a href="#"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['nombre_cliente'];?></a>
							<ul class="children">
								<li class="submenu"><a href="modelo/cerrar_sesion.php">Cerrar sesión</a></li>
							</ul>
						</li>
				<?php
					}
					else{
						echo "<li><a href='vista/php/iniciar_sesion.php'><i class='fa fa-user' aria-hidden='true'></i> Acceder</a></li>";
					}
				?>
				
				<li><a href="<?php echo (isset($_SESSION['id_usuario']) ? 'vista/php/carrito.php' : 'vista/php/carrito_conectarse.php' ); ?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Carrito</a></li>
				<li class="submenu">
					<a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i> Acerca de...</a>
					<ul class="children">
						<li class="submenu"><a href="vista/php/asociaciones.php">Asociaciones Solidarias</a></li>
						<li><a href="vista/php/nosotros.php">Nosotros(AnimaToys)</a></li>
					</ul>
				</li>
					<li style="hover:none"><form class="form-inline">
						<input class="form-control mr-sm-2" id="buscar" name="buscar" type="text" placeholder="Buscar producto" >
						<button class="btn btn-primary" type="submit" style="color:cyan;"><i class="fa fa-search" aria-hidden="true"></i></button></li>

						<label id="resultado-q" ></label>
					</form>

				</ul>
			</nav>