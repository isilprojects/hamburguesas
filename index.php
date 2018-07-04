<?php
	include('includes/header.php');
?>

	<section id="list">
		<div class="container">
			<div class="row p-5 r-0 l-0 productos">
				<div  id="itemPro" class="views-row text-center col-md-3 col-sm-6 col-xs-12">
					<img src="img/producto/hamburguesa.jpg" alt="Hamburguesa combo 1">
					<h2>Combo pechuga</h2>
					<div class="precio-box">
						<span class="labelprecio">Precio: </span>
					    <span class="precio">S/. <b id="pCosto">9.90</b></span>
        			</div>
				</div>
				<div  id="itemPro" class="views-row text-center col-md-3 col-sm-6 col-xs-12">
					<img src="img/producto/hamburguesa.jpg" alt="Hamburguesa combo 1">
					<h2>Combo doble pechuga</h2>
					<div class="precio-box">
						<span class="labelprecio">Precio: </span>
					    <span class="precio">S/. <b id="pCosto">10.90</b></span>
        			</div>
				</div>
				<div  id="itemPro" class="views-row text-center col-md-3 col-sm-6 col-xs-12">
					<img src="img/producto/hamburguesa.jpg" alt="Hamburguesa combo 1">
					<h2>Combo pollo apanado</h2>
					<div class="precio-box">
						<span class="labelprecio">Precio: </span>
					    <span class="precio">S/. <b id="pCosto">9.90</b></span>
        			</div>
				</div>
				<div  id="itemPro" class="views-row text-center col-md-3 col-sm-6 col-xs-12">
					<img src="img/producto/hamburguesa.jpg" alt="Hamburguesa combo 1">
					<h2>Combo del rodeo duo</h2>
					<div class="precio-box">
						<span class="labelprecio">Precio: </span>
					    <span class="precio">S/. <b id="pCosto">11.90</b></span>
        			</div>
				</div>
				<div  id="itemPro" class="views-row text-center col-md-3 col-sm-6 col-xs-12">
					<img src="img/producto/hamburguesa.jpg" alt="Hamburguesa combo 1">
					<h2>Combo pareja</h2>
					<div class="precio-box">
						<span class="labelprecio">Precio: </span>
					    <span class="precio">S/. <b id="pCosto">9.90</b></span>
        			</div>
				</div>
				<div  id="itemPro" class="views-row text-center col-md-3 col-sm-6 col-xs-12">
					<img src="img/producto/hamburguesa.jpg" alt="Hamburguesa combo 1">
					<h2>Combo rodeo mix</h2>
					<div class="precio-box">
						<span class="labelprecio">Precio: </span>
					    <span class="precio">S/. <b id="pCosto">12.90</b></span>
        			</div>
				</div>
				<div  id="itemPro" class="views-row text-center col-md-3 col-sm-6 col-xs-12">
					<img src="img/producto/hamburguesa.jpg" alt="Hamburguesa combo 1">
					<h2>Combo hamburguesa vaquera</h2>
					<div class="precio-box">
						<span class="labelprecio">Precio: </span>
					    <span class="precio">S/. <b id="pCosto">14.90</b></span>
        			</div>
				</div>
				<div  id="itemPro" class="views-row text-center col-md-3 col-sm-6 col-xs-12">
					<img src="img/producto/hamburguesa.jpg" alt="Hamburguesa combo 1">
					<h2>Combo hamburgesa vacana</h2>
					<div class="precio-box">
						<span class="labelprecio">Precio: </span>
					    <span class="precio">S/. <b id="pCosto">16.90</b></span>
        			</div>
				</div>
			</div>
		</div>
	</section>

	<section id="form">
			<form name="miform" id="miform" action="pago.php" method="get">
				<span class="close">X</span>
				<h5>Producto elegido: </h5>
				<img src="img/producto/hamburguesa.jpg" alt="Hamburguesa combo 1">
				<p id="hTitle"></p>
				<div class="canHamb">
					<label>Cantidad:</label>
					<input id="cHambuguesa" type="number" value="1">
				</div>

				<div class="bebidas col-md-6">
					<label>Agregar bebida</label>
					<input id="ad" type="checkbox" name="cocacola"  onclick="calcularPrecio()" value="1.00"> Cocacola (S/. 1.00)<br>
  					<input id="ad" type="checkbox" name="pepsi"  onclick="calcularPrecio()" value="1.50"> Pepsi (S/. 1.50)<br>
  					<input id="ad" type="checkbox" name="sprite"  onclick="calcularPrecio()" value="1.00"> Sprite (S/. 1.00)<br>
				</div>

				<div class="adicionales col-md-6">
					<label>Agregar Adicionales</label>
					<input id="ad" type="checkbox" name="ensalada"  onclick="calcularPrecio()" value="4.00"> Ensalada (S/. 4.00)<br>
  					<input id="ad" type="checkbox" name="papitas" onclick="calcularPrecio()"  value="2.50"> Papitas (S/. 2.50)<br>
  					<input id="ad" type="checkbox" name="huevo"  onclick="calcularPrecio()" value="1.00"> Huevo (S/. 1.00)<br>
				</div>
				<div class="pagar">
					<p>Total a pagar: S/.  <b id="pTotal"></b></p>
					<input type="submit" value="Pagar">
				</div>

			</form>
	</section>
	
<?php
	include('includes/footer.php');
?>
	