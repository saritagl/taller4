<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Hotel</title>
	<link rel="stylesheet" href="<?php echo base_url().'assets/materialize/material-design-icons/iconfont/material-icons'?>.css" /> 
	<link rel="stylesheet" href="<?php echo base_url().'assets/materialize/css/materialize.min'?>.css" /> 
	<link rel="stylesheet" href="<?php echo base_url().'css/hotel'?>.css" /> 
</head>
<body>
<div class="container row">
	<div class="col s12">
			<h3 class="center">Sistema del Hotel</h3>
			<hr><br>
			<nav id="menu">
				<div class="nav-wrapper teal lighten-3 z-depth-1">
					<ul id="nav-mobile" class="left hide-on-med-and-down text-white">
						<li><a href="/login/inicio" id="inicio">Inicio</a></li>
						<li><a href="/fecha/disponible/1" id="reservacion">Reservación</a></li>
						<li><a href="/fecha/hab_reservadas/2" id="hab_reservadas">Habitaciones Reservadas</a></li>
						<li><a href="/fecha/eliminar_reserva" id="eliminar_reserva">Eliminar Reservación</a></li>
					</ul>
				</div>
			</nav>
			<nav id="menu_gerente">
				<div class="nav-wrapper teal lighten-3 z-depth-1">
					<ul id="nav-mobile" class="left hide-on-med-and-down text-white">
						<li><a href="/login/inicio_gerente">Usuarios</a></li>
						<li><a href="/gerente/disponible">Habitaciones Disponibles</a></li>
						<li><a href="/gerente/detalle_hab">Estatus Habitaciones</a></li>
					</ul>
				</div>
			</nav>
			<nav id="menu_admin">
				<div class="nav-wrapper teal lighten-3 z-depth-1">
					<ul id="nav-mobile" class="left hide-on-med-and-down text-white">
						<li><a href="/login/inicio_admin">Usuarios</a></li>
						<li><a href="/admin/habitaciones">Habitaciones</a></li>
					</ul>
				</div>
			</nav>