<br>
<div class="col s8 push-s2 pull-s2 z-depth-3">
	<form id="login" action="/admin/confirmacion_editar" method="post">
		<h5 class="center teal-text"><b>Editar Usuario</b></h5>
		<hr>
		<?php
			foreach($usuario as $fila)
			{	
		?>
		<div class="input-field col s6">
			<input id="nombre" name="nombre" type="text" class="validate" value="<?=$fila->nombre?>">
			<label for="nombre">Nombre</label>
		</div>
		<div class="input-field col s6">
			<input id="apellido" name="apellido" type="text" class="validate" value="<?=$fila->apellido?>">
			<label for="apellido">Apellido</label>
		</div>
		<div class="input-field col s6">
			<input id="user" name="user" type="text" class="validate" value="<?=$fila->usuario?>">
			<label for="user">Usuario</label>
		</div>
		<div class="input-field col s6">
			<input id="psw" name="psw" type="text" class="validate" value="<?=$fila->clave?>">
			<label for="psw">Contraseña</label>
		</div>	
		<div class="input-field col s6">
			<select name="tipo_user">
				<option value="administrador" <?php if($fila->tipo=="administrador") echo "selected";?>>Administrador</option>
				<option value="gerente" <?php if($fila->tipo=="gerente") echo "selected";?>>Gerente</option>
				<option value="recepcionista" <?php if($fila->tipo=="recepcionista") echo "selected";?>>Recepcionista</option>
			</select>
			<label>Tipo de Usuario</label>
		</div>
		<input type="hidden" name="id" value="<?=$fila->id?>">
		<?php
			}				
		?>
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