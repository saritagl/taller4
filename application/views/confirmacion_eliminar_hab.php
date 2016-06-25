<div class="card col s6 push-s3 pull-s3 z-depth-4">
	<div class="center"><i class="large material-icons teal-text">done_all</i></div>
	<div class="card-content">
		<h5 class="card-title center-align teal-text"><b>Habitación Eliminada</b></h5>
			<?php
				foreach($hab as $fila)
				{	
			?>
				<p class="center">
					Número: <?=$fila->nro_hab?> <br>
					Tipo: <?=$fila->tipo_hab?> <br>
					Estado: <?=$fila->estatus?>
				</p>
			<?php
				}				
			?>
	</div>
	<div class="card-action">
		<a class="waves-effect waves-light btn col s8 push-s2 pull-s2 center-align" href="/admin/habitaciones">Volver a Habitaciones
		</a>
	</div>
</div>
<script type="text/javascript">
/*ocultando menu*/
	document.getElementById('menu').style.display = 'none';
	document.getElementById('menu_admin').style.display = 'none';//
	document.getElementById('menu_gerente').style.display = 'none';
</script>