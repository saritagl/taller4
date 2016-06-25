<div class="card col s6 push-s3 pull-s3 z-depth-4">
	<div class="center"><i class="large material-icons teal-text">done_all</i></div>
	<div class="card-content">
		<h5 class="card-title center-align teal-text"><b>Datos de Reservación</b></h5>
			<p class="center">
				Nombre y Apellido: <?php echo $_POST["nombre"];?> <?php echo $_POST["apellido"];?><br>
				Correo: <?php echo $_POST["correo"];?><br>
				Teléfono: <?php echo $_POST["tlf"];?><br>
				Habitaciones:
				<?php
					$hab = $_SESSION["hab"];
					for ($i=0; $i < $_SESSION["cant"]; $i++) { 
						echo $hab[$i] ;
						if ($_SESSION["cant"] > 1 && $i < $_SESSION["cant"]-1) {
							echo " - ";
						}
					}
				?>
				<br>
				Fecha: <?php echo $_SESSION["fecha_ini"];?> / <?php echo $_SESSION["fecha_fin"];?>
			</p>
	</div>
	<div class="card-action">
		<a class="waves-effect waves-light btn col s5" href="/fecha/disponible/1">Nueva Reserva
		<i class="material-icons left">add</i>
		</a>

		<a class="waves-effect waves-light btn col s5 push-s2" href="/login/inicio">Inicio
		<i class="material-icons right">home</i>
		</a>
	</div>
</div>
<script type="text/javascript">
/*ocultando menu*/
	document.getElementById('menu_admin').style.display = 'none';
	document.getElementById('menu_gerente').style.display = 'none';
	document.getElementById('menu').style.display = 'none';
</script>