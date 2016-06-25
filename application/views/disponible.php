<form class="col s8 push-s2 pull-s2" action="/fecha/pago" method="post">
	<br>
	<h5 class="center">Disponibilidad de Habitaciones</h5>
	<hr><br>
	<ul class="popout collapsible" data-collapsible="accordion">
		<li>
			<div class="collapsible-header teal-text"><i class="material-icons">local_hotel</i>Individual</div>
			<div class="collapsible-body">
				<p>Capacidad de Personas: 1<br>Precio:5000 Bs<br>Dotada con cama individual, cuarto de baño, con bañera y secador de pelo. Además de aire acondicionado integral, teléfono con discado directo, TV por cable, servicio de internet WI FI.</p>
			</div>
			<br>
			<div class="center">
				<?php
					$hab_este_tipo=0;
					foreach($hab_disp as $fila)
					{
						if($fila->tipo_hab=='individual'):
							$hab_este_tipo=1;
				?>
							<input type="checkbox" class="filled-in" id="<?=$fila->nro_hab?>" />
							<label for="<?=$fila->nro_hab?>"><?=$fila->nro_hab?></label>
				<?php 	endif;
					}
					if ($hab_este_tipo==0):	
				?>
						NO HAY HABITACIONES DISPONIBLES
				<?php endif;?>
			</div>
			<br>
		</li>
		<li>
			<div class="collapsible-header teal-text"><i class="material-icons">local_hotel</i>Matrimonial</div>
			<div class="collapsible-body">
				<p>Capacidad de Personas: 2<br>Precio:10000 Bs<br>Dotada con cama matrimonial, cuarto de baño, con bañera y secador de pelo. Además de aire acondicionado integral, teléfono con discado directo, TV por cable, servicio de internet WI FI.</p>
			</div>
			<br>
			<div class="center">
				<?php
					$hab_este_tipo=0;
					foreach($hab_disp as $fila)
					{
						if($fila->tipo_hab=='matrimonial'):
							$hab_este_tipo=1;
				?>
							<input type="checkbox" class="filled-in" id="<?=$fila->nro_hab?>" />
							<label for="<?=$fila->nro_hab?>"><?=$fila->nro_hab?></label>
				<?php 	endif;
					}
					if ($hab_este_tipo==0):	
				?>
						NO HAY HABITACIONES DISPONIBLES
				<?php endif;?>
			</div>
			<br>
		</li>
		<li>
			<div class="collapsible-header teal-text"><i class="material-icons">local_hotel</i>Mixta</div>
			<div class="collapsible-body">
				<p>Capacidad de Personas: 3<br>Precio:20000 Bs<br>Dotada con cama matrimonial y cama indivual, cuarto de baño con bañera y secador de pelo. Además de aire acondicionado integral, teléfono con discado directo, TV por cable, servicio de internet WI FI.</p>
			</div>
			<br>
			<div class="center">
				<?php
					$hab_este_tipo=0;
					foreach($hab_disp as $fila)
					{
						if($fila->tipo_hab=='mixta'):
							$hab_este_tipo=1;
				?>
							<input type="checkbox" class="filled-in" id="<?=$fila->nro_hab?>" />
							<label for="<?=$fila->nro_hab?>"><?=$fila->nro_hab?></label>
				<?php 	endif;
					}
					if ($hab_este_tipo==0):	
				?>
						NO HAY HABITACIONES DISPONIBLES
				<?php endif;?>
			</div>
			<br>
		</li>
		<li>
			<div class="collapsible-header teal-text"><i class="material-icons">local_hotel</i>Suite</div>
			<div class="collapsible-body">
				<p>Capacidad de Personas: 2<br>Precio:30000 Bs<br>Dotada con cama king 4x4, cuarto de baño con bañera y secador de pelo. Además de aire acondicionado integral, teléfono con discado directo, TV por cable, servicio de internet WI FI, caja de seguridad, servicio Room Service y Minibar.</p>
			</div>
			<br>
			<div class="center">
				<?php
					$hab_este_tipo=0;
					foreach($hab_disp as $fila)
					{
						if($fila->tipo_hab=='suite'):
							$hab_este_tipo=1;
				?>
							<input type="checkbox" class="filled-in" id="<?=$fila->nro_hab?>" />
							<label for="<?=$fila->nro_hab?>"><?=$fila->nro_hab?></label>
				<?php 	endif;
					}
					if ($hab_este_tipo==0):	
				?>
						NO HAY HABITACIONES DISPONIBLES
				<?php endif;?>
			</div>
			<br>
		</li>
	</ul>
	<br>

	<button class="btn waves-effect waves-light col s2 push-s5 pull-s5" type="button" onClick="window.location.href='/login/inicio'">Cancelar</button>

	<button class="btn waves-effect waves-light col s3 pull-s2" onClick="window.location.href='/fecha/disponible/1'" type="button">Atrás
		<i class="material-icons left">arrow_back</i>
	</button>
	

	<button class="btn col s3 push-s4" id="aceptar" type="button">Aceptar
		<i class="material-icons right">arrow_forward</i>
	</button>
	

</form>

<script type="text/javascript">
/*ocultando menu*/
	document.getElementById('menu_admin').style.display = 'none';
	document.getElementById('menu_gerente').style.display = 'none';
</script>