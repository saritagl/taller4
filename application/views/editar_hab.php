<br>
<div class="col s6 push-s3 pull-s3 z-depth-3">
	<form id="login" action="/admin/confirmacion_editar_hab" method="post">
		<h5 class="center teal-text"><b>Editar Habitación</b></h5>
		<hr>
		<?php
			foreach($hab as $fila)
			{	
		?>
		<div class="input-field col s8 push-s2 pull-s2">
			<input disabled id="nro_hab" type="number" class="validate black-text" value="<?=$fila->nro_hab?>">
			<label for="nro_hab" class="black-text">Número de Habitación</label>
		</div>
		<div class="input-field col s8 push-s2 pull-s2">
			<select name="tipo_hab">
				<option value="individual" <?php if($fila->tipo_hab=="individual") echo "selected";?>>Individual</option>
				<option value="matrimonial" <?php if($fila->tipo_hab=="matrimonial") echo "selected";?>>Matrimonial</option>
				<option value="mixta" <?php if($fila->tipo_hab=="mixta") echo "selected";?>>Mixta</option>
				<option value="suite" <?php if($fila->tipo_hab=="suite") echo "selected";?>>Suite</option>
			</select>
			<label>Tipo de Habitación</label>
		</div>
		<div class="input-field col s8 push-s2 pull-s2">
			<select name="estado">
				<option value="habilitada" <?php if($fila->estatus=="habilitada") echo "selected";?>>Habilitada</option>
				<option value="deshabilitada" <?php if($fila->estatus=="deshabilitada") echo "selected";?>>Deshabilitada</option>
			</select>
			<label>Estado</label>
		</div>
		<input type="hidden" name="nro_hab" value="<?=$fila->nro_hab?>">
		<?php
			}				
		?>
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