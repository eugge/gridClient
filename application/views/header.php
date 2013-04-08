<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
	
	<title>Factura 2.0</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/menu/menu_style.css" />
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/tablefilter.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/main.js"></script>
	

	

</head>

<body>
	
		<div class="menu">
			<ul>
				<li><?php echo anchor('inicio','Inicio');?></li>
				<li><a href="#" target="_self" >Alta</a>
					<ul>
						<li><?php echo anchor('altas/clientes','Cliente');?></li>
						<li><?php echo anchor('','Proveedores');?></li>
					</ul>
				</li>
				<li><a href="" target="_self" >Productos/Servicios</a>
				</li>
				<li><a href="" target="_self" >Ventas</a>
					<ul>
						<li><a href="" target="_self">Remisión</a></li>
						<li><a href="" target="_self">Factura</a></li>
					</ul>
				</li>
				<li><a href="" target="_self" >Gastos</a>
					<ul>
						<li><a href="" target="_self">Factura</a></li>
					</ul>
				</li>
			</ul>
		</div> 	<!-- end Menu -->
	
	<div id='frame'>	