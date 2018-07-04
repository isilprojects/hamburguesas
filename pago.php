<?php
	include('includes/header.php');
?>
<?php 
	// Bebidas
	$cocacola = $_GET['cocacola'];
	$pepsi = $_GET['pepsi'];
	$sprite = $_GET['sprite'];

	// Adicionales
	$ensalada = $_GET['ensalada'];
	$papitas = $_GET['papitas'];
	$huevo = $_GET['huevo'];
?>
	<div class="container">
		<div class="resumen-pedido">
			<h1>Resumen del pedido</h1>
			<div class="box-confirm">
				<?php
				   echo "Muchas gracias por la compra.<br>"; 
				   echo ".<br>"; 
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
				   		echo "Gaseosa Papitas:     S/.". $papitas . "<br>";
					}
					if (isset($huevo)) {
				   		echo "Gaseosa Huevo:     S/.". $huevo . "<br>";
					}
				?>
			</div>
		</div>
		<div class="datos-pago">
			<h1>Ingresa tus datos de pago</h1>
			<br>
			<form action="" id="form-confir">
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
	
