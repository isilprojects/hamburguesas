<?php
	include('includes/header.php');
?>


	<section id="about" class="py-5">
		<div class="container">
			<h1 class="text-center">Nosotros</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et totam quisquam aspernatur rerum ut ipsum, tempore eius repellat non sunt amet ea. Consequuntur omnis dolore fugit veniam aspernatur natus, quod?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et totam quisquam aspernatur rerum ut ipsum, tempore eius repellat non sunt amet ea. Consequuntur omnis dolore fugit veniam aspernatur natus, quod?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et totam quisquam aspernatur rerum ut ipsum, tempore eius repellat non sunt amet ea. Consequuntur omnis dolore fugit veniam aspernatur natus, quod?</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et totam quisquam aspernatur rerum ut ipsum, tempore eius repellat non sunt amet ea. Consequuntur omnis dolore fugit veniam aspernatur natus, quod?</p>
		</div>
	</section>

	<section id="form">
			<form action="pago.html">
				<span class="close">X</span>
				<h5>Producto elegido: </h5>
				<img src="img/producto/hamburguesa.jpg" alt="Hamburguesa combo 1">
				<p id="hTitle"></p>
				<div class="canHamb">
					<label>Hamburguesa x: </label>
					<input id="cHambuguesa" type="number" value="1">
				</div>

				<div class="bebidas col-md-6">
					<label>Agregar bebida</label>
					<input type="checkbox" name="bebida" value="Cocacola"> Cocacola<br>
  					<input type="checkbox" name="bebida" value="Pepsi" checked> Pepsi<br>
  					<input type="checkbox" name="bebida" value="Sprite"> Sprite<br>
				</div>

				<div class="adicionales col-md-6">
					<label>Agregar Adicionales</label>
					<input type="checkbox" name="adicional" value="Ensalada" checked> Ensalada<br>
  					<input type="checkbox" name="adicional" value="Papitas"> Papitas<br>
  					<input type="checkbox" name="adicional" value="Huevo"> Huevo<br>
				</div>
				<div class="pagar">
					<p>Total a pagar: <b>s/. 600.00</b></p>
					<input type="submit" value="Pagar">
				</div>

			</form>
	</section>
<?php
	include('includes/footer.php');
?>
	