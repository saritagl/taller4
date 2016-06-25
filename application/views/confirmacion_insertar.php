<div class="card col s6 push-s3 pull-s3 z-depth-4">
	<div class="center"><i class="large material-icons teal-text">done_all</i></div>
	<div class="card-content">
		<h5 class="card-title center-align teal-text"><b>Usuario Insertado</b></h5>
			<p class="center">
				Nombre y Apellido: <?php echo $_POST["nombre"];?> <?php echo $_POST["apellido"];?><br>
				Usuario: <?php echo $_POST["user"];?><br>
				Contraseña: <?php echo $_POST["psw"];?><br>
				Tipo: <?php echo $_POST["tipo_user"];?>
			</p>
	</div>
	<div class="card-action">
		<a class="waves-effect waves-light btn col s4 push-s4 pull-s4 center-align" href="/login/inicio_admin">Inicio
		<i class="material-icons right">home</i>
		</a>
	</div>
</div>
<script type="text/javascript">
/*ocultando menu*/
	document.getElementById('menu').style.display = 'none';
	document.getElementById('menu_admin').style.display = 'none';
	document.getElementById('menu_gerente').style.display = 'none';
</script>