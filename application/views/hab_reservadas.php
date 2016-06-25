<form class="col s8 push-s2 pull-s2">
	<br>
	<h5 class="center">Habitaciones Reservadas</h5>
	<hr><br>
	<ul class="collapsible">
		<li>
			<div class="collapsible-header teal-text"><i class="material-icons">local_hotel</i>Individual</div>
			<br>
			<!-- Modal Trigger -->
			<div class="center">
				<?php
					$hab_este_tipo=0;
					foreach($hab_ocup as $fila)
					{	
						if($fila->tipo_hab=='individual'):
							$hab_este_tipo=1;
				?>
							<a class="btn modal-trigger grey accent-3 black-text" href="#hab<?=$fila->nro_hab?>">HAB<?=$fila->nro_hab?></a>	
				<?php 	endif;
					}
					if ($hab_este_tipo==0):	
				?>
						NO HAY HABITACIONES RESERVADAS
				<?php endif;?>	
			</div>
		</li>
		<li>
			<div class="collapsible-header teal-text"><i class="material-icons">local_hotel</i>Matrimonial</div>
			<br>
			<!-- Modal Trigger -->
			<div class="center">
				<?php
					$hab_este_tipo=0;
					foreach($hab_ocup as $fila)
					{
						if($fila->tipo_hab=='matrimonial'):
							$hab_este_tipo=1;
				?>
							<a class="btn modal-trigger grey accent-3 black-text" href="#hab<?=$fila->nro_hab?>">HAB<?=$fila->nro_hab?></a>	
				<?php 	endif;
					}
					if ($hab_este_tipo==0):	
				?>
						NO HAY HABITACIONES RESERVADAS
				<?php endif;?>	
			</div>
		</li>
		<li>
			<div class="collapsible-header teal-text"><i class="material-icons">local_hotel</i>Mixta</div>
			<br>
			<!-- Modal Trigger -->
			<div class="center">
				<?php
					$hab_este_tipo=0;
					foreach($hab_ocup as $fila)
					{
						if($fila->tipo_hab=='mixta'):
							$hab_este_tipo=1;
				?>
							<a class="btn modal-trigger grey accent-3 black-text" href="#hab<?=$fila->nro_hab?>">HAB<?=$fila->nro_hab?></a>	
				<?php 	endif;
					}
					if ($hab_este_tipo==0):	
				?>
						NO HAY HABITACIONES RESERVADAS
				<?php endif;?>
			</div>
		</li>
		<li>
			<div class="collapsible-header teal-text"><i class="material-icons">local_hotel</i>Suite</div>
			<br>
			<!-- Modal Trigger -->
			<div class="center">
				<?php
					$hab_este_tipo=0;
					foreach($hab_ocup as $fila)
					{
						if($fila->tipo_hab=='suite'):
							$hab_este_tipo=1;
				?>
							<a class="btn modal-trigger grey accent-3 black-text" href="#hab<?=$fila->nro_hab?>">HAB<?=$fila->nro_hab?></a>	
				<?php 	endif;
					}
					if ($hab_este_tipo==0):	
				?>
						NO HAY HABITACIONES RESERVADAS
				<?php endif;?>
			</div>
			<br>
		</li>
	</ul>

	<!-- Modal Structure -->
	<?php foreach($hab_ocup as $fila){?>
	<div id="hab<?=$fila->nro_hab?>" class="modal">
		<div class="modal-header">
			<a class=" modal-action modal-close btn-floating red right"><i class="material-icons">close</i></a>
		</div>
		<div class="modal-content">
			<h5 class="center">Datos de Reservación</h5><hr>
			<p class="center">
				Nombre: <?=$fila->nombre?><br>
				Apellido: <?=$fila->apellido?> <br>
				Correo: <?=$fila->correo?> <br>
				Teléfono: <?=$fila->tlf?> <br>
				Fecha: <?=$fila->fecha_ini?> / <?=$fila->fecha_fin?>
			</p>
		</div>
	</div>
	<?php }?>
	
	<button class="btn waves-effect waves-light col s2 push-s5 pull-s5" type="button" onClick="window.location.href='/login/inicio'">Salir</button>
	
</form>

<script type="text/javascript">
/*ocultando menu*/
	document.getElementById('menu_admin').style.display = 'none';
	document.getElementById('menu_gerente').style.display = 'none';
</script>