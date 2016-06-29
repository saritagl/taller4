<br>


<ul class="col s8 push-s2 pull-s2 z-depth-2">
	<li>
		<div class="collapsible-header cyan darken-4 white-text center"><b>Administradores</b></div>
		<br>
		<div>
			<?php
				$user_este_tipo=0;
				foreach($usuarios as $fila)
				{	
					if($fila->tipo=='administrador'):
						$user_este_tipo=1;
			?>
						<a class="modal-trigger" href="#<?=$fila->usuario?>"><?=$fila->nombre?> <?=$fila->apellido?></a>	
						<br>
			<?php 	endif;
				}
				if ($user_este_tipo==0):	
			?>
					<p class="center">NO HAY USUARIOS DE ESTE TIPO</p>
			<?php endif;?>	
		</div>
		<br>
	</li>
	<li>
		<div class="collapsible-header cyan darken-4 white-text  center"><b>Gerentes</b></div>
		<br>
		<div>
			<?php
				$user_este_tipo=0;
				foreach($usuarios as $fila)
				{	
					if($fila->tipo=='gerente'):
						$user_este_tipo=1;
			?>
						<div>
						<a class="modal-trigger" href="#<?=$fila->usuario?>"><?=$fila->nombre?> <?=$fila->apellido?></a>	
						</div>
			<?php 	endif;
				}
				if ($user_este_tipo==0):	
			?>
				<p class="center">NO HAY USUARIOS DE ESTE TIPO</p>
			<?php endif;?>	
		</div>
		<br>
	</li>
	<li>
		<div class="collapsible-header cyan darken-4 white-text center"><b>Recepcionistas</b></div>
		<br>
		<div>
			<?php
				$user_este_tipo=0;
				foreach($usuarios as $fila)
				{	
					if($fila->tipo=='recepcionista'):
						$user_este_tipo=1;
			?>
						<a class="modal-trigger" href="#<?=$fila->usuario?>"><?=$fila->nombre?> <?=$fila->apellido?></a>	
			<?php 	endif;
				}
				if ($user_este_tipo==0):	
			?>
				<p class="center">NO HAY USUARIOS DE ESTE TIPO</p>
			<?php endif;?>	
		</div>
		<br>
	</li>
</ul>
<br>
<div class="col s8 push-s2 pull-s2 ">
<button class="btn waves-effect waves-light col s4 push-s4 pull-s4" type="button" onClick="window.location.href='/login'">Salir del Sistema
	<i class="material-icons right">close</i>
</button>
</div>

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
<?php
	}				
?>

<script type="text/javascript">
	/*ocultando menu*/
	document.getElementById('menu_admin').style.display = 'none';
	document.getElementById('menu').style.display = 'none';
</script>