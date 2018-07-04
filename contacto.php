<?php
	include('includes/header.php');
?>
	<div class="container">
		<div class="row">
			<div class="marketing">
	            <div class="text-center">
	                <h3>queremos conocer tus opiniones</h3>
	                <p>
	                    Te invitamos a que nos cuentes tu experienia en nuestros restaurantes
	                    </p><div id="confirmationMessage" class="alert alert-success hide">Tu mensaje ha sido enviado, gracias</div>
	                <p></p>

	                <form action="#" method="post" id="contactForm" class="contact-form">
	                    <input type="text" name="name" id="name" required="" placeholder="Nombre y apellido">
	                    <input type="integer" name="phone" id="phone" required="" placeholder="teléfono">
	                    <input type="email" name="email" id="email" required="" placeholder="correo electrónico">
	                    <input type="text" name="subject" id="subject" required="" placeholder="asunto">
	                    <textarea name="messageContent" id="messageContent" cols="24" rows="6" required="" placeholder="¿Qué quieres decirnos?"></textarea>
	                    <input type="submit" value="Enviar" class="btn btn-primary">
	                </form>
	            </div>
	        </div>
        </div>
	</div>
<?php
	include('includes/footer.php');
?>
	