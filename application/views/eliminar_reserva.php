<br>
<ul class="collection with-header col s8 push-s2 pull-s2 z-depth-1">
	<li class="collection-header">
		<h5 class="center-align teal-text"><b>Reservaciones</b></h5>
	</li>
	
	<?php
		foreach($reservaciones as $fila)
		{	
	?>
			<li class="collection-item">
				<div>
					<a class="black-text"><?=$fila->nombre?> <?=$fila->apellido?> - HAB <?=$fila->nro_hab?></a>
					<a class="modal-trigger teal-text secondary-content" href="#<?=$fila->id?>"><i class="material-icons">delete</i></a>
				</div>
			</li>	
	<?php
		}				
	?>

	<br>
	<button class="btn waves-effect waves-light col s4 push-s4 pull-s4" type="button" onClick="window.location.href='/login/inicio'">Inicio
		<i class="material-icons right">home</i>
	</button>
</ul>

<?php
	foreach($reservaciones as $fila)
	{	
?>
<div id="<?=$fila->id?>" class="modal">
	<div class="modal-content">
		<h5 class="center">¿Está seguro que desea eliminar esta reservación?</h5><hr>
		<p class="center">
			Nombre y Apellido: <?=$fila->nombre?> <?=$fila->apellido?><br>
			Fecha: <?=$fila->fecha_ini?> / <?=$fila->fecha_fin?>
		</p>
	</div>
	<div class="modal-footer">
		<a class=" modal-action modal-close btn red left">Cancelar</a>
		<a class="btn green right" href="/fecha/confirmacion_eliminar_reserva?id=<?=$fila->id?>">Confirmar</a>
	</div>
</div>
<?php
	}				
?>

<script type="text/javascript">
/*ocultando menu*/
	document.getElementById('menu_admin').style.display = 'none';
	document.getElementById('menu_gerente').style.display = 'none';
</script>