<form class="col s8 push-s2 pull-s2">
	<br>
	<ul class="collapsible">
		<li>
			<div class="collapsible-header teal white-text center"><b>Habitaciones Habilitadas</b></div>
			<br>
			<!-- Modal Trigger -->
			<div class="center">
				<?php
					$hab_este_edo=0;
					foreach($detalle_hab as $fila)
					{	
						if($fila->estatus=='habilitada'):
							$hab_este_edo=1;
				?>
							<a class="btn-floating modal-trigger green black-text " href="#hab<?=$fila->nro_hab?>"><?=$fila->nro_hab?></a>	
				<?php 	endif;
					}
					if ($hab_este_edo==0):	
				?>
						NO HAY HABITACIONES RESERVADAS
				<?php endif;?>	
			</div>
			<br>
		</li>
		<li>
			<div class="collapsible-header teal white-text center"><b>Habitaciones Deshabilitadas</b></div>
			<br>
			<!-- Modal Trigger -->
			<div class="center">
				<?php
					$hab_este_edo=0;
					foreach($detalle_hab as $fila)
					{
						if($fila->estatus=='deshabilitada'):
							$hab_este_edo=1;
				?>
							<a class="btn-floating modal-trigger red black-text" href="#hab<?=$fila->nro_hab?>"><?=$fila->nro_hab?></a>	
				<?php 	endif;
					}
					if ($hab_este_edo==0):	
				?>
						NO HAY HABITACIONES RESERVADAS
				<?php endif;?>	
			</div>
			<br>
		</li>
	</ul>

	<!-- Modal Structure -->
	<?php foreach($detalle_hab as $fila){?>
	<div id="hab<?=$fila->nro_hab?>" class="modal">
		<div class="modal-header">
			<a class=" modal-action modal-close btn-floating red right"><i class="material-icons">close</i></a>
		</div>
		<div class="modal-content">
			<h5 class="center">Tipo de la Habitación</h5><hr>
			<p class="center">
				<?php
					if ($fila->tipo_hab == 'individual') {
				?>
						<b>Individual</b>
				<?php
					}
				?>
				<?php
					if ($fila->tipo_hab == 'matrimonial') {
				?>
						<b>Matrimonial</b>
				<?php
					}
				?>
				<?php
					if ($fila->tipo_hab == 'mixta') {
				?>
						<b>Mixta</b>
				<?php
					}
				?>
				<?php
					if ($fila->tipo_hab == 'suite') {
				?>
						<b>Suite</b>
				<?php
					}
				?>
				
			</p>
		</div>
	</div>
	<?php }?>
	
	<button class="btn waves-effect waves-light col s2 push-s5 pull-s5" type="button" onClick="window.location.href='/login/inicio_gerente'">Salir</button>
	
</form>

<script type="text/javascript">
	/*ocultando menu*/
	document.getElementById('menu_admin').style.display = 'none';
	document.getElementById('menu').style.display = 'none';
</script>