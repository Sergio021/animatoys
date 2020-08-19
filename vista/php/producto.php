<?php
require_once("../../modelo/conexion.php");
$conexion = conexion();
$sku=$_GET['sku'];
?>
<!DOCTYPE html>
<html>
<head>
	<?php
	require_once('../estilos_principales/head_pages.php');
	?>
	<title>Producto</title>
    <script type="text/javascript" src="../../controlador/js/funciones.js"></script>
</head>
<body style="background-image: url('../img/f3.jpg');">
	<header>
		<?php
		require_once('../estilos_principales/header_pages.php');
		?>
	</header>
	 <main class="container wow fadeInUp animated">
        <div class="row">
            <?php
            $sql="SELECT sku,nombre_producto,descripcion, precio_unitario,disponibilidad, imagen,mascota from producto WHERE sku='$sku'";
            $result = mysqli_query($conexion, $sql);
            $ver= mysqli_fetch_row($result);

            ?>

            <div class="col-sm-6 wow fadeInLeft">
                <center>
                    <br>
                    <img src="../img/productos/<?php echo $ver[5];?>" style="width:75%; height:500px">
                </center>
            </div>

            <div class="col-sm-6 wow fadeInRight">
                <h1 class="title" style="text-align: center;color:black;"> Producto para : <label style="color: rgb(59,145,231);"><strong><u><?php echo"<font size=6.5>$ver[6]</font>";?> </u></strong></label>
                   
                </h1>
                <hr>
                <p style="background-color: #D2E4FC;  border: 3px rgb(59,145,231) double;text-align:center;">
                     <br>
                     <label style="font-weight:bold;font-size:20px;color:black;text-align:center;">SKU:</label>
                	 <?php echo"<b><font size=4.5>$ver[0]</font></b>";?>
                	 <br>
                	 
                	</p>
                	<hr>
                <p style="background-color: #D2E4FC;  border: 3px rgb(59,145,231) double;text-align:center;">
                     <br>
                     <label style="font-weight:bold;font-size:22px;color:black;text-align:center;">Nombre del producto:</label>
                     <br>
                	 <?php echo"<b><font size=4.5>$ver[1]</font></b>";?>
                	 <br>
                	 
                	</p>
                	<hr>
					<p style="background-color: #D2E4FC;  border: 3px rgb(59,145,231) double;text-align:center;">
                    <label style="font-weight:bold;font-size:22px;color:black;">Descripción del producto:</label>
                    <br>
                    <?php echo "<b><font size=4.5>$ver[2]</font></b>";?>
                    <br>
                </p>
                </p>
                	<hr>
					<p style="background-color: #D2E4FC;  border: 3px rgb(59,145,231) double;text-align:center;">
                    <label style="font-weight:bold;font-size:22px;color:black;">Disponibilidad:</label>
                    <br>
                    <?php echo "<b><font size=4.5>$ver[4]</font></b>";?>
                    <br>
                </p>
                    <hr>
                    <p style="background-color: #D2E4FC;  border: 3px rgb(59,145,231) double;text-align:center;">
                    <label style="font-weight:bold;font-size:22px;color:black;">Precio unitario:</label> 
                    <br>
                    <b>$<?php echo"<font size=4.5>$ver[3]</font>";?> MXN. </b><br>
                <?php
                    if (isset($_SESSION['id_usuario'])) {
                ?>
                
                    <div class="form-row">
                        <div class="col-auto my-1">
                            <input type="number" id="cantidad" class="form-control" value="1" min="1" max="<?php echo $ver[4]; ?>">
                      </div>
                      <div class="col-auto my-1">
                        <button class='btn btn-primary' id="click_producto"><i class='fa fa-shopping-cart' aria-hidden='true'></i> Agregar al carrito</button>   
                        </div>
                    </div>
                
                

                <?php
                    }
                    else{
                        echo "<p class='text-center m-5 font-weight-bold'>
                        Ingrese con una cuenta para poder realizar una compra
                        </p>";
                    }
                ?>
                  
                </p>
                <hr>

                            </ul>
                        </div>
                    </div>
                </center>
                <br>
            </div>

        </div>
        <br><br>
    </main>





	<footer>
			<?php
		require_once('../estilos_principales/footer_pages.php');
		?>
	</footer>
<script type="text/javascript">
    $(document).ready(function(){
        $("#click_producto").click(function(){
            codigo = '<?php echo $ver[0]; ?>';
            cantidad = $('#cantidad').val();
            agregaprod(codigo, cantidad);
        })
    })
</script>


</body>
</html>