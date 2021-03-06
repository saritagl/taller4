<br>
<div class="col s8 push-s2 pull-s2 z-depth-3">
	<form id="login" action="/admin/confirmacion_insertar" method="post">
		<h5 class="center teal-text"><b>Insertar Usuario</b></h5>
		<hr>
		<div class="input-field col s6">
			<input id="nombre" name="nombre" type="text" class="validate" value="<?php if (isset($_POST['nombre'])) echo $_POST['nombre']; ?>">
			<label for="nombre">Nombre</label>
		</div>
		<div class="input-field col s6">
			<input id="apellido" name="apellido" type="text" class="validate" value="<?php if (isset($_POST['apellido'])) echo $_POST['apellido']; ?>">
			<label for="apellido">Apellido</label>
		</div>
		<div class="input-field col s6">
			<input id="user" name="user" type="text" class="validate" maxlength="10" value="<?php if (isset($_POST['user'])) echo $_POST['user']; ?>">
			<label for="user">Usuario</label>
		</div>
		<div class="input-field col s6">
			<input id="psw" name="psw" type="text" class="validate" value="<?php if (isset($_POST['psw'])) echo $_POST['psw']; ?>">
			<label for="psw">Contraseña</label>
		</div>	
		<div class="input-field col s6">
			<select name="tipo_user">
				<option value="" disabled selected>Seleccione un tipo</option>
				<option value="administrador">Administrador</option>
				<option value="gerente">Gerente</option>
				<option value="recepcionista">Recepcionista</option>
			</select>
			<label>Tipo de usuario</label>
		</div>
		
		<div class="col s12 push-s4 pull-s4">
			<span class="red-text"><?php echo form_error('nombre');?></span>
		</div>
		
		<div class="col s12">
		<br>
		<button class="btn waves-effect waves-light right" type="submit">Aceptar
			<i class="material-icons right">arrow_forward</i>
		</button>
	
		<button class="btn waves-effect waves-light left" onClick="window.location.href='/login/inicio_admin'" type="button">Atrás
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