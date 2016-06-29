<form class="col s8 push-s2 pull-s2" action="/fecha/confirmacion_pago" method="post">
	<br>			
	<h5 class="center">Datos de Facturación</h5>
	<hr><br>
	<div class="input-field col s6">
		<input id="first_name" type="text" class="validate" name="nombre" value="<?php if (isset($_POST['nombre'])) echo $_POST['nombre']; ?>">
		<label for="first_name">Nombre</label>
	</div>
	<div class="input-field col s6">
		<input id="last_name" type="text" class="validate" name="apellido" value="<?php if (isset($_POST['apellido'])) echo $_POST['apellido']; ?>">
		<label for="last_name">Apellido</label>
	</div>			
	<div class="input-field col s6">
		<input id="email" type="email" class="validate" name="correo" value="<?php if (isset($_POST['correo'])) echo $_POST['correo']; ?>">
		<label for="email">Correo</label>
	</div>
	<div class="input-field col s6">
		<input id="telef" type="text" class="validate" name="tlf" maxlength="11" length="11" value="<?php if (isset($_POST['tlf'])) echo $_POST['tlf']; ?>">
		<label for="telef">Teléfono</label>
	</div>
	<div class="input-field col s8">
		<input id="tarj" type="text" class="validate" name="tarj" maxlength="16" length="16" value="<?php if (isset($_POST['tarj'])) echo $_POST['tarj']; ?>">
		<label for="tarj">Número de Tarjeta</label>
	</div>
	<div class="input-field col s4">
		<input id="cod-tarj" type="text" class="validate" name="cod-tarj" length="3" maxlength="3" value="<?php if (isset($_POST['cod-tarj'])) echo $_POST['cod-tarj']; ?>">
		<label for="cod-tarj">Código de Validación</label>
	</div>
	
	<div class="col s6 push-s3 pull-s3">
		<span class="red-text"><?php echo form_error('nombre');?></span>
	</div>
	
	<div class="col s12">
		<br>
		<button class="btn waves-effect waves-light col s2 push-s5 pull-s5" type="button" onClick="window.location.href='/login/inicio'">Cancelar</button>
	
		<button class="btn waves-effect waves-light col s3 pull-s2" onClick="window.location.href='/fecha/disponible/1'" type="button">Atrás
			<i class="material-icons left">arrow_back</i>
		</button>
		<button class="btn waves-effect waves-light col s3 push-s4" type="submit">Confirmar
			<i class="material-icons right">done</i>
		</button>
	</div>
</form>		

<script type="text/javascript">
/*ocultando menu*/
	document.getElementById('menu_admin').style.display = 'none';
	document.getElementById('menu_gerente').style.display = 'none';
</script>