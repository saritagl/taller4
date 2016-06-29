<br>
<div class="col s6 push-s3 pull-s3 z-depth-3">
	<form id="login" action="/admin/confirmacion_editar_tipo_hab" method="post">
		<h5 class="center teal-text"><b>Editar Tipo de Habitación</b></h5>
		<hr>
		<?php
			foreach($hab as $fila)
			{	
		?>
		<div class="input-field col s8 push-s2 pull-s2">
			<input disabled id="tipo_hab" type="text" class="validate black-text" value="<?=$fila->tipo?>">
			<label for="tipo_hab" class="black-text">Tipo de Habitación</label>
		</div>
		<div class="input-field col s8 push-s2 pull-s2">
			<input id="costo" name="costo" type="number" class="validate" value="<?=$fila->costo?>">
			<label for="costo">Costo de Habitación</label>
		</div>
		<div class="input-field col s8 push-s2 pull-s2">
			<textarea id="info" name="info"class="materialize-textarea"><?=$fila->info?></textarea>
			<label for="info">Descripción</label>
		</div>
		<input type="hidden" name="tipo_hab" value="<?=$fila->tipo?>">
		<?php
			}				
		?>
		<div class="col s6 push-s3 pull-s3">
			<span class="red-text"><?php echo form_error('tipo_hab');?></span>
		</div>
		<div class="col s12">
		<br>
		<button class="btn waves-effect waves-light right" type="submit">Aceptar
			<i class="material-icons right">arrow_forward</i>
		</button>
	
		<button class="btn waves-effect waves-light left" onClick="window.location.href='/admin/habitaciones'" type="button">Atrás
			<i class="material-icons left">arrow_back</i>
		</button>
		</div>
	</form>
</div>

<script type="text/javascript">
/*ocultando menu*/
	document.getElementById('menu').style.display = 'none';
	document.getElementById('menu_gerente').style.display = 'none';
</script>