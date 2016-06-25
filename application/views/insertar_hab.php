<br>
<div class="col s6 push-s3 pull-s3 z-depth-3">
	<form id="login" action="/admin/confirmacion_insertar_hab" method="post">
		<h5 class="center teal-text"><b>Insertar Habitación</b></h5>
		<hr>
		<div class="input-field col s8 push-s2 pull-s2">
			<select name="tipo_hab">
				<option value="" disabled selected>Seleccione un tipo</option>
				<option value="individual">Individual</option>
				<option value="matrimonial">Matrimonial</option>
				<option value="mixta">Mixta</option>
				<option value="suite">Suite</option>
			</select>
			<label>Tipo de Habitación</label>
		</div>
		<div class="input-field col s8 push-s2 pull-s2">
			<select name="estado">
				<option value="" disabled selected>Seleccione un estado</option>
				<option value="habilitada">Habilitada</option>
				<option value="deshabilitada">Deshabilitada</option>
			</select>
			<label>Estado</label>
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