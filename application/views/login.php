<div>
	<div class="card-panel col s6 push-s3 pull-s3 z-depth-4">
		<form id="login" action="/login" method="post">
			<h4 class="center">Bienvenido</h4>
			<hr>
			<div class="input-field col s12">
				<input id="user" name="user" type="text" class="validate">
				<label class="active" for="user">Usuario</label>
			</div>
			<!--name se convierte en una variable que contiene el post
				id es para las propiedades de css-->
			<div class="input-field col s12">
				<input name="password" id="password" type="password" class="validate">
				<label class="active" for="password">Contraseña</label>
			</div>
			<br>
			<span class="red-text"><?php echo form_error('user');?></span>
			<br>
			<br>
			<button class="btn waves-effect waves-light col s4 push-s4 pull-s4" type="submit">entrar
 				<i class="material-icons right">send</i>
  			</button>
		</form>
	</div>
</div>
<script type="text/javascript">
/*ocultando menu*/
	document.getElementById('menu').style.display = 'none';
	document.getElementById('menu_gerente').style.display = 'none';
	document.getElementById('menu_admin').style.display = 'none';
</script>