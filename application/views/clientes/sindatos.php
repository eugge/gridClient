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
					<td>Editar</td>	
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

	<table class="tabletitles">

		<tr id='titles_table'>
			<td id='check'></td>
			<td id='check'>N.Cliente</td>
			<td id='info'>Nombre</td>
			<td id='info'>RFC</td>
			<td id='info'>Telefono</td>
		</tr>
		
	</table>
	
	
</div> <!-- end table entrys -->
</div> <!-- end frame -->
</body>
</html>	
	
	
	
		