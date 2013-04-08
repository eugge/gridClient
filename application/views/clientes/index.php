<?php echo form_open('altas/gestion_cliente'); ?>

<div id='toolbar'> <!-- toolbar -->
	
	<div id='tooltitle'>
	<img src='<?php echo base_url()?>img/clientes.png'/>
			<h1>Clientes</h1>
</div>		<!-- end toobar -->

	
			<table> <!-- table toolbar -->
			
				<tr>
					<td><a href='nuevo_cliente'><img src='<?php echo base_url()?>img/agregar.png'></a></td>
					
					<td><button name="editar" value="editar" type="submit">
					<a href="#"><img src='<?php echo base_url()?>img/editar.png'></a></button></td>
					
					<td><button name="eliminar" value="eliminar" type="submit">
					<a href="#"><img src='<?php echo base_url()?>img/eliminar.png'></a></button></td>
					
					<td><img src='<?php echo base_url()?>img/ayuda.png'></td>
				</tr>
						
						
				<tr>
					<td>Agregar</td>
					<td>Ver/Editar</td>	
					<td>Eliminar</td>
					<td>Ayuda</td>
				</tr>
				
		   </table>	<!-- end table toolbar -->
</div>

<!-- begin table entrys -->

<div id='footer'>

	<div id='filter'>
		Filtro:<input type='text' id="FilterTextBox">
	</div>
	
	

	<table id="tabletitles">

		<tr id='titles_table'>
			<td id='check'></td>
			<td id='check'>N.Cliente</td>
			<td id='info'>Nombre</td>
			<td id='info'>RFC</td>
			<td id='info'>Telefono</td>
		</tr>
		
	</table>	

		<div id="overflow">

	<table class="filterclient">

<?php foreach ($clientes as $cliente):?>
	
		<tr id="content_table">
			<td id='check'><input type='checkbox' name='id_cliente' value='<?php echo $cliente->id;?>'></td>
			<td><?php echo $cliente->id;?></td>
			<td><?php echo $cliente->nombre;?></td>
			<td><?php echo $cliente->rfc;?></td>
			<td><?php echo $cliente->telefono;?></td>
		</tr>
		
		</div>
		
<?php endforeach;?>		


	
	</table>	

</div> <!-- end table entrys -->
<?php echo form_close();?> <!-- end form inicio/eliminar_cliente -->
</div> <!-- end frame -->
</body>
</html>