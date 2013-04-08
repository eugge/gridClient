<?php


/**
* 
*/
class Clientes extends CI_Model
{
	
	function agregar_cliente($cliente) // agrega un cliente a la base de datos
	{
		$this->db->insert('clientes',$cliente);
	}
	
	function editar_cliente($id,$cliente) //update clientes
	{
		$this->db->where('id',$id);
		$this->db->update('clientes',$cliente);
	}
	
	function eliminar_cliente($id) // eliminar cliente
	{
		$this->db->delete('clientes', array('id' => $id));
	}
	
	function ver_cliente($id) // obtiene datos para editar cliente regresa clientes  "id"
	{
		
		$this->db->where('id',$id);

		$q = $this->db->get('clientes');

		if ($q->num_rows() > 0)
		{
		foreach ($q->result() as $row)
		{		
			$cliente[] = $row;
		}	
			return $cliente;
		}
	}
	
	function tablacliente() //obtiene datos para la tabla clientes regresa clientes
	{

		$q = $this->db->get('clientes');
		
		if ($q->num_rows() > 0) 
		{
		foreach ($q->result() as $row)
		{
			$clientes[] = $row;
		}
		
		return $clientes;
		
		}
		
	}
}
