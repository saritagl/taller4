<div class="card col s6 push-s3 pull-s3 z-depth-4">
	<div class="center"><i class="large material-icons teal-text">done_all</i></div>
	<div class="card-content">
		<h5 class="card-title center-align teal-text"><b>Reservación Eliminada</b></h5>
			<?php
				foreach($reserva as $fila)
				{	
			?>
				<p class="center">
					Nombre y Apellido: <?=$fila->nombre?> <?=$fila->apellido?><br>
					Correo: <?=$fila->correo?> <br>
					Teléfono: <?=$fila->tlf?> <br>
					Fecha: <?=$fila->fecha_ini?> / <?=$fila->fecha_fin?>
				</p>
			<?php
				}				
			?>
	</div>
	<div class="card-action">
		<a class="waves-effect waves-light btn col s8 push-s2 pull-s2 center-align" href="/fecha/eliminar_reserva">Volver
		</a>
	</div>
</div>
<script type="text/javascript">
/*ocultando menu*/
	document.getElementById('menu').style.display = 'none';
	document.getElementById('menu_admin').style.display = 'none';//
	document.getElementById('menu_gerente').style.display = 'none';
</script>