	<div style="text-align:center; background-image: url('../img/f2.jpg');">
		<img src="../img/logo.png"  class="img-fluid imgslogan" style="width:500px;height:170px;">
	</div>

	<div class="menu_bar">
		<a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
	</div>

	<nav style="text-align: center">
		<ul>
			<li><a href="inicio.php"><i class="fa fa-home" aria-hidden="true" style="color:white;"></i> Home</a></li>

			<li class="submenu">
				<a href="#"><i class="fa fa-paw" aria-hidden="true"></i> Mascotas</a>
				<ul class="children">
					<li class="submenu"><a href="aves.php">Aves</a></li>
					<li><a href="caballo.php">Caballos</a></li>
					<li><a href="conejo.php">Conejos</a></li>
					<li><a href="gato.php">Gatos</a></li>
					<li><a href="perro.php">Perros</a></li>
					<li><a href="reptiles.php">Reptiles</a></li>
					<li><a href="roedores.php">Roedores</a></li>
					<li><a href="peces.php">Peces</a></li>
				</ul>
			</li>
			<li class="submenu">
				<a href="#"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['id_admin'];?></a>
				<ul class="children">
					<li class="submenu"><a href="../../modelo/cerrar_sesion.php">Cerrar sesión</a></li>
				</ul>
			</li>

		</ul>
	</nav>