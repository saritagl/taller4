<br>
<ul class="collection with-header col s8 push-s2 pull-s2 z-depth-1">
	<li class="collection-header">
		<a href="/admin/insertar" class="btn-floating right"><i class="material-icons">add</i></a>
		<h5 class="center-align teal-text"><b>Usuarios</b></h5>
	</li>
	
	<?php
		foreach($usuarios as $fila)
		{	
	?>
			<li class="collection-item">
				<div>
					<a class="modal-trigger" href="#<?=$fila->usuario?>"><?=$fila->nombre?> <?=$fila->apellido?></a>
					<a href="/admin/editar?id=<?=$fila->id?>" class="secondary-content"><i class="material-icons">mode_edit</i></a>
					<a class="modal-trigger teal-text secondary-content" href="#<?=$fila->id?>"><i class="material-icons">delete</i></a>
				</div>	
			</li>	
	<?php
		}				
	?>

	<br>
	<button class="btn waves-effect waves-light col s4 push-s4 pull-s4" type="button" onClick="window.location.href='/login'">Salir del Sistema
		<i class="material-icons right">close</i>
	</button>
</ul>

<?php
	foreach($usuarios as $fila)
	{	
?>
<div id="<?=$fila->usuario?>" class="modal">
	<div class="modal-header">
		<a class=" modal-action modal-close btn-floating red right"><i class="material-icons">close</i></a>
	</div>
	<div class="modal-content">
		<h5 class="center">Datos de Usuario</h5><hr>
		<p class="center">
			Nombre y Apellido: <?=$fila->nombre?> <?=$fila->apellido?><br>
			Usuario: <?=$fila->usuario?><br>
			Tipo usuario: <?=$fila->tipo?>
		</p>
	</div>
</div>
<div id="<?=$fila->id?>" class="modal">
	<div class="modal-content">
		<h5 class="center">¿Esta seguro que desea eliminar este usuario?</h5><hr>
		<p class="center">
			Nombre y Apellido: <?=$fila->nombre?> <?=$fila->apellido?><br>
			Usuario: <?=$fila->usuario?><br>
			Tipo usuario: <?=$fila->tipo?>
		</p>
	</div>
	<div class="modal-footer">
		<a class=" modal-action modal-close btn red left">Cancelar</a>
		<a class="btn green right" href="/admin/confirmacion_eliminar?id=<?=$fila->id?>">Confirmar</a>
	</div>
</div>
<?php
	}				
?>

<script type="text/javascript">
/*ocultando menu*/
	document.getElementById('menu').style.display = 'none';
	document.getElementById('menu_gerente').style.display = 'none';
</script>