<?php
	include('includes/header.php');
?>
<?php 
	// Bebidas
	$hamburguesa = $_POST['p#hTitle'];
	$cocacola = $_POST['cocacola'];
	$pepsi = $_POST['pepsi'];
	$sprite = $_POST['sprite'];

	// Adicionales
	$ensalada = $_POST['ensalada'];
	$papitas = $_POST['papitas'];
	$huevo = $_POST['huevo'];

	//Precio total
	$precio = $_POST['pTotal'];



?>
	<div class="container">
		<div class="resumen-pedido">
			<h1>Resumen del pedido</h1>
			<div class="box-confirm">
				<?php
				   echo "Muchas gracias por la compra.<br>"; 
				   echo "<br>"; 
				    if (isset($cocacola)) {
				   		echo "Gaseosa Cocacola:     S/.". $cocacola . "<br>";
					}
					if (isset($pepsi)) {
				   		echo "Gaseosa Pepsi:     S/.". $pepsi . "<br>";
					}
					if (isset($sprite)) {
				   		echo "Gaseosa Sprite:     S/.". $sprite . "<br>";
					}
					if (isset($ensalada)) {
				   		echo "Adicinal Ensalada:     S/.". $ensalada . "<br>";
					}
					if (isset($papitas)) {
				   		echo "Adicinal Papitas:     S/.". $papitas . "<br>";
					}
					if (isset($huevo)) {
				   		echo "Adicinal Huevo:     S/.". $huevo . "<br>";
					}
					echo "<div class='precioTotal'><h3>Precio total de la compra</h3><b>S/. " .$precio."</b></div>";
				?>
			</div>
		</div>
		<div class="datos-pago">
			<h1>Ingresa tus datos de pago</h1>
			<br>
			<form action="gracias.php" id="form-confir">
				<label for="txtNombre">Tarjeta</label>
				<input id="txtNombre" placeholder="" type="text">
				<br>
				<br>
				<label for="txtApellido">Clave</label>
				<input id="txtApellido" placeholder="" type="text">
				<br>
				<br>
				<label for="txtApellido">Nombre</label>
				<input id="txtApellido" placeholder="" type="text">
				<br>
				<br>
				<label for="txtApellido">Dirección</label>
				<input id="txtApellido" placeholder="" type="text">
				<br>
				<br>
				<input type="submit" value="Pagar">
			</form>
		</div>
	</div>
<?php
	include('includes/footer.php');
?>
	
