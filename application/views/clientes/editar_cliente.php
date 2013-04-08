<!-- Edit Client --> 

<!-- toolbar -->

<?php echo form_open('altas/editar_cliente'); ?>

<div id='toolbar'>
	
	<div id='tooltitle'>
	<img src='<?php echo base_url()?>img/agregar.png'/>
			<h1>Editar Cliente</h1>
</div> 

<!-- end toobar -->

			<table>
				<tr>
					<td><button name="button" type="submit"><a href="#"><img src='<?php echo base_url()?>img/guardar.png'></a></button><td>
					<td><a href=""><button name="button" type="reset"><img src='<?php echo base_url()?>img/limpiar.png'></a></button><td>
					<td><a href=""><a href='clientes'><img src='<?php echo base_url()?>img/cancelar.png' onclick=""></a><td>
					<td><a href=""><img src='<?php echo base_url()?>img/ayuda.png'></a><td>
				</tr>
						<tr>
							<td>Guardar<td> 
							<td>Limpiar<td>
							<td>Cancelar<td>
							<td>Ayuda<td>
						</tr>
		   </table>	<!-- end table toolbar -->
</div>



<?php foreach ($clientes as $cliente):?>


<div id='content'>

	<div id="block">
		Nº de Cliente:<input type='text' name='id_cliente' value='<?php echo set_value('id').$cliente->id;?>' readonly>
		Nombre:<input type='text' name='nombre' value='<?php echo set_value('nombre').$cliente->nombre;?>'>
		RCF:<input type='text' name='rfc' value='<?php echo set_value('rfc').$cliente->rfc;?>'>
		Direccion:<input type='text' name='direccion' value='<?php echo set_value('direccion').$cliente->direccion;?>'>
		Estado:<input type='text' id="estados" name='estado' value='<?php echo set_value('estado').$cliente->estado;?>'>
		Codigo Postal:<input type='text' name='codp' value='<?php echo set_value('codp').$cliente->codp;?>'>
	</div>
	
	<div id="block2">
		Telefono:<input type='text' name='telefono' value='<?php echo set_value('telefono').$cliente->telefono;?>'>
		Celular:<input type='text' name='celular' value='<?php echo set_value('celular').$cliente->celular;?>'>
		Mail:<input type='text' id="estados" name='mail' value='<?php echo set_value('mail').$cliente->mail;?>'>
		Pagina Web:<input type='text' name='web' value='<?php echo set_value('web').$cliente->web;?>'>
	</div>

</div>

<?php endforeach;?>	

<?php echo form_close();?> <!-- end editar/clientes -->

</body>
</html>