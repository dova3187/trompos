<!DOCTYPE html>
<html lang="en">
  <head>
<?php
include 'header.php';
?>
<script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
  </head>

  <body id="eventos">
<?php
include 'menu.php';
?>  
 
<div class="container" style="margin-left:auto;">
	
		<form method="post" action="eventos-correo.php" autocomplete="off">
				<label>Nombre</label>
			    <input type="text" placeholder="Nombre" name="nombre" value="" required autofocus></br>
			    
			    <label>Telefono</label>
			    <input type="text" placeholder="Telefono" name="telefono" value="" required ></br>
			    
			    <label>Correo Electronico</label>
			    <input type="email" placeholder="Dirección de correo" name="email" value="" required></br>
			    
			    <label>Numero de Personas</label>
			    <select name="numero-personas">
			    	<option value="1-50"> 1 a 50 Personas</option>
			    	<option value="51-99"> 51 a 99 Personas</option>
			    	<option value="100-200"> 100 a 200 Personas</option>
			    	<option value="Mas de 200"> Mas de 200 Personas</option>
			    </select></br>
			    
			 	<label>Tipo de Evento</label>
			 	<select name="tipo-evento">
			 		<option value="cumpleaños">Cumplea&ntilde;os</option>
			 		<option value="boda">Boda</option>
			 		<option value="xv años">XV A&ntilde;os</option>
			 		<option value="Bautizo">Bautizo</option>
			 		<option value="1ra Comunion">1ra Comuni&oacute;n</option>
			 		<option value="Aniversario>">Aniversario</option>
			 	</select></br>
			 	<input type="text" placeholder="Otro" name="otro-evento" value="" required ></br>
			    
			    
			    <label>Fecha del Evento</label>
			   <input name="fecha-evento" type="text" class="datepicker" ></br>
			    
			    <label></label>
			    <input="text" placeholder="Hora del Evento" name="observaciones"></br>
			    
			    <label>Carne a Elegir</label><br>
			    <input type="checkbox" name="tipoCarne[]" value="Pastor"> Pastor<br>
			    <input type="checkbox" name="tipoCarne[]" value="Poc-Chuc"> Poc-Chuc<br>
			    <input type="checkbox" name="tipoCarne[]" value="Asado"> Asado<br>
			    <input type="checkbox" name="tipoCarne[]" value="Chuleta de Cerdo"> Chuleta de Cerdo<br>
			    <input type="checkbox" name="tipoCarne[]" value="Pollo"> Pollo<br>
			    <input type="checkbox" name="tipoCarne[]" value="Bistec"> Bistec<br>
			    <input type="checkbox" name="tipoCarne[]" value="Arrachera"> Arrachera<br>
			    <input type="checkbox" name="tipoCarne[]" value="Chuleta de Res"> Chuleta de Res<br>
			    
			    <label>Botanas a Elegir</label><br>
			    <input type="checkbox" name="tipoBotana[]" value="Queso"> Queso<br>
			    <input type="checkbox" name="tipoBotana[]" value="Frijoles Charros"> Frijoles Charros<br>
			    <input type="checkbox" name="tipoBotana[]" value="Guacamole"> Guacamole<br>
			    <input type="checkbox" name="tipoBotana[]" value="Papa Enchorizadas"> Papa Enchorizadas<br>
			    <input type="checkbox" name="tipoBotana[]" value="Salchicha Toscana"> Salchicha Toscana<br>
			    <input type="checkbox" name="tipoBotana[]" value="Chicharron de Queso"> Chicharron de Queso<br>
			    <input type="checkbox" name="tipoBotana[]" value="Frijol Refrito"> Frijol Refrito<br>
			    <input type="checkbox" name="tipoBotana[]" value="Dzikilpac"> Dzikilpac<br>
			    <input type="checkbox" name="tipoBotana[]" value="Champiñoreo al Ajillo"> Champiñoreo al Ajillo<br>
			    
			
			    <textarea placeholder="Observaciones" name="observaciones" maxlength="200"></textarea></br>
			    
			    <input type="submit" name="enviar" value="Enviar">
			</form>

	
</div> <!-- /container -->

<?php
include 'footer.php';
?>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script src="js/jquery.timer.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="js/jquery.dwdinanews.0.1.js" type="text/javascript"></script>   

    <script>
	$(document).ready(function () {
	  $('#myCarousel').carousel({
	  	interval: 5000
	  })
	})
    </script> 
	<script language="javascript">
	/*$(document).ready(function(){
		$("#noticias").dwdinanews({
			retardo: 5000,
			tiempoAnimacion: 1000,
			funcionAnimacion: 'easeOutBack' //'easeInOutElastic'
		});
		$("#noticias-ceri").dwdinanews({
			retardo: 5000,
			tiempoAnimacion: 1000,
			funcionAnimacion: 'easeInOutElastic' //'easeInOutElastic'
		});
	})*/
	</script>

  </body>
</html>
