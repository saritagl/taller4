<form class="col s8 push-s2 pull-s2">
	<br>
	<a href="/admin/insertar_hab" class="btn-floating right"><i class="material-icons">add</i></a>
	<h5 class="center-align teal-text"><b>Habitaciones</b></h5>
	<hr><br>
	<ul class="collection">

		<li class="collection-item teal">
			<a class="white-text center"><b>Individual</b></a>
			<a class="secondary-content white-text" href="/admin/editar_tipo_hab?tipo=individual"><i class="material-icons">mode_edit</i></a>
		</li>
		<?php
			$hab_este_tipo=0;
			foreach($habitaciones as $fila)
			{	
				if($fila->tipo_hab=='individual'):
					$hab_este_tipo=1;
		?>	
				<li class="collection-item">
				<div>
					<a class="modal-trigger" href="#<?=$fila->nro_hab?>">Habitación <?=$fila->nro_hab?></a>

					<?php
						$esta_reservada=0;
						foreach ($hab_reservadas as $reservadas) {
							if ($fila->nro_hab==$reservadas->nro_hab){	
								$esta_reservada=1;
							}
						}	
					?>			
								
					<?php
						if ($esta_reservada==1) {
					?>
							<a class="secondary-content grey-text"><i class="material-icons">mode_edit</i></a>
							<a class="grey-text secondary-content"><i class="material-icons">delete</i></a>
					<?php		
						}else{
					?>
							<a href="/admin/editar_hab?nro=<?=$fila->nro_hab?>" class="secondary-content"><i class="material-icons">mode_edit</i></a>
							<a class="modal-trigger teal-text secondary-content" href="#h<?=$fila->nro_hab?>"><i class="material-icons">delete</i></a>
					<?php
						}	
					?>

					
				</div>
				</li>	
	
		<?php 	endif;
			}
			if ($hab_este_tipo==0):	
		?>
				NO HAY HABITACIONES DE ESTE TIPO
		<?php endif;?>	
		
		<li class="collection-item teal">
			<a class="white-text center"><b>Matrimonial</b></a>
			<a class="secondary-content white-text" href="/admin/editar_tipo_hab?tipo=matrimonial"><i class="material-icons">mode_edit</i></a>
		</li>
		<?php
			$hab_este_tipo=0;
			foreach($habitaciones as $fila)
			{	
				if($fila->tipo_hab=='matrimonial'):
					$hab_este_tipo=1;
		?>	
				<li class="collection-item">
				<div>
					<a class="modal-trigger" href="#<?=$fila->nro_hab?>">Habitación <?=$fila->nro_hab?></a>
					<?php
						$esta_reservada=0;
						foreach ($hab_reservadas as $reservadas) {
							if ($fila->nro_hab==$reservadas->nro_hab){	
								$esta_reservada=1;
							}
						}	
					?>			
								
					<?php
						if ($esta_reservada==1) {
					?>
							<a class="secondary-content grey-text"><i class="material-icons">mode_edit</i></a>
							<a class="grey-text secondary-content"><i class="material-icons">delete</i></a>
					<?php		
						}else{
					?>
							<a href="/admin/editar_hab?nro=<?=$fila->nro_hab?>" class="secondary-content"><i class="material-icons">mode_edit</i></a>
							<a class="modal-trigger teal-text secondary-content" href="#h<?=$fila->nro_hab?>"><i class="material-icons">delete</i></a>
					<?php
						}	
					?>
				</div>
				</li>	
	
		<?php 	endif;
			}
			if ($hab_este_tipo==0):	
		?>
				NO HAY HABITACIONES DE ESTE TIPO
		<?php endif;?>	
		<li class="collection-item teal">
			<a class="white-text center"><b>Mixta</b></a>
			<a class="secondary-content white-text" href="/admin/editar_tipo_hab?tipo=mixta"><i class="material-icons">mode_edit</i></a>
		</li>
		<?php
			$hab_este_tipo=0;
			foreach($habitaciones as $fila)
			{	
				if($fila->tipo_hab=='mixta'):
					$hab_este_tipo=1;
		?>	
				<li class="collection-item">
				<div>
					<a class="modal-trigger" href="#<?=$fila->nro_hab?>">Habitación <?=$fila->nro_hab?></a>
					<?php
						$esta_reservada=0;
						foreach ($hab_reservadas as $reservadas) {
							if ($fila->nro_hab==$reservadas->nro_hab){	
								$esta_reservada=1;
							}
						}	
					?>			
								
					<?php
						if ($esta_reservada==1) {
					?>
							<a class="secondary-content grey-text"><i class="material-icons">mode_edit</i></a>
							<a class="grey-text secondary-content"><i class="material-icons">delete</i></a>
					<?php		
						}else{
					?>
							<a href="/admin/editar_hab?nro=<?=$fila->nro_hab?>" class="secondary-content"><i class="material-icons">mode_edit</i></a>
							<a class="modal-trigger teal-text secondary-content" href="#h<?=$fila->nro_hab?>"><i class="material-icons">delete</i></a>
					<?php
						}	
					?>
				</div>
				</li>	
	
		<?php 	endif;
			}
			if ($hab_este_tipo==0):	
		?>
				NO HAY HABITACIONES DE ESTE TIPO
		<?php endif;?>
		<li class="collection-item teal">
			<a class="white-text center"><b>Suite</b></a>
			<a class="secondary-content white-text" href="/admin/editar_tipo_hab?tipo=suite"><i class="material-icons">mode_edit</i></a>
		</li>
		<?php
			$hab_este_tipo=0;
			foreach($habitaciones as $fila)
			{	
				if($fila->tipo_hab=='suite'):
					$hab_este_tipo=1;
		?>	
				<li class="collection-item">
				<div>
					<a class="modal-trigger" href="#<?=$fila->nro_hab?>">Habitación <?=$fila->nro_hab?></a>
					<?php
						$esta_reservada=0;
						foreach ($hab_reservadas as $reservadas) {
							if ($fila->nro_hab==$reservadas->nro_hab){	
								$esta_reservada=1;
							}
						}	
					?>			
								
					<?php
						if ($esta_reservada==1) {
					?>
							<a class="secondary-content grey-text"><i class="material-icons">mode_edit</i></a>
							<a class="grey-text secondary-content"><i class="material-icons">delete</i></a>
					<?php		
						}else{
					?>
							<a href="/admin/editar_hab?nro=<?=$fila->nro_hab?>" class="secondary-content"><i class="material-icons">mode_edit</i></a>
							<a class="modal-trigger teal-text secondary-content" href="#h<?=$fila->nro_hab?>"><i class="material-icons">delete</i></a>
					<?php
						}	
					?>
				</div>
				</li>	
	
		<?php 	endif;
			}
			if ($hab_este_tipo==0):	
		?>
				NO HAY HABITACIONES DE ESTE TIPO
		<?php endif;?>
		
	</ul>

	<?php foreach($habitaciones as $fila){?>
	<div id="<?=$fila->nro_hab?>" class="modal">
		<div class="modal-header">
			<a class=" modal-action modal-close btn-floating red right"><i class="material-icons">close</i></a>
		</div>
		<div class="modal-content">
			<h5 class="center">Estado de la Habitación</h5><hr>
			<p class="center">
				<?php
					if ($fila->estatus == 'habilitada') {
				?>
						<b>Habilitada</b>
				<?php
					}
				?>
				<?php
					if ($fila->estatus == 'deshabilitada') {
				?>
						<b>Deshabilitada</b>
				<?php
					}
				?>
				
			</p>
		</div>
	</div>
	<div id="h<?=$fila->nro_hab?>" class="modal">
		<div class="modal-content">
			<h5 class="center">¿Está seguro que desea eliminar esta habitación?</h5><hr>
			<p class="center">
				Número: <?=$fila->nro_hab?> <br>
				Tipo: <?=$fila->tipo_hab?> <br>
				Estado: <?=$fila->estatus?>
			</p>
		</div>
		<div class="modal-footer">
			<a class=" modal-action modal-close btn red left">Cancelar</a>
			<a class="btn green right" href="/admin/confirmacion_eliminar_hab?nro=<?=$fila->nro_hab?>">Confirmar</a>
		</div>
	</div>
	<?php }?>
	
	<button class="btn waves-effect waves-light col s2 push-s5 pull-s5" type="button" onClick="window.location.href='/login/inicio_admin'">Salir</button>
	
</form>

<script type="text/javascript">
/*ocultando menu*/
	document.getElementById('menu').style.display = 'none';
	document.getElementById('menu_gerente').style.display = 'none';
</script>