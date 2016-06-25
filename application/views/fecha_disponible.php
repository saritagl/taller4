<form id="login" action="/gerente/disponible" method="post">
	<br><br>
	<div class="col s6 push-s3 pull-s3">
		<div class="input-field col s8 push-s2 pull-s2">
			<input class="datepicker" type="date" name="date_ini" id="date_ini"/>
			<label class="active" for="date_ini">Fecha Inicial</label>	
		</div>
		<div class="input-field col s8 push-s2 pull-s2">
			<input class="datepicker" type="date" name="date_fin" id="date_fin"/>
			<label class="active" for="date_fin">Fecha Final</label>	
		</div>
		
		<span class="red-text col s12"><?php echo form_error('date_ini'); ?></span>

		<button class="btn waves-effect waves-light right" type="submit">Aceptar
			<i class="material-icons right">arrow_forward</i>
		</button>
	
		<button class="btn waves-effect waves-light left" onClick="window.location.href='/login/inicio_gerente'" type="button">Cancelar
			<i class="material-icons left">arrow_back</i>
		</button>
	</div>
</form>
 
<script type="text/javascript">
	/*ocultando menu*/
	document.getElementById('menu_admin').style.display = 'none';
	document.getElementById('menu').style.display = 'none';
</script>