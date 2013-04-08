<?php

// Models link altas

class Altas extends CI_Controller 
{

		// Alertas //
	
		function success()
	{	
		$this->clientes();
		$this->load->library('alertas');
		$this->alertas->send_success();
	}
	
	function success_delete()
	{
		$this->clientes();
		$this->load->library('alertas');
		$this->alertas->success_delete();
	}
	
	function select_error()
	{
		$this->clientes();
		$this->load->library('alertas');
		$this->alertas->select_error();
	}
	
	
	// Alta clientes  //
	
	function clientes()
	{
		$datos ['clientes'] = $this->clientes->tablacliente();
		
		if(isset($datos['clientes'])) 
		{
		$this->load->view('header');
		$this->load->view('clientes/index',$datos);
		}
		else
		{
		$this->load->view('header');
		$this->load->view('clientes/sindatos');
		
		}
	}
	
		function arreglo($cliente) // esto es una variable de arreglo, para enviar datos de alta y actualizacion de clientes.
	{
	
		$cliente = array(
			'nombre' => $this->input->post('nombre'),
			'rfc' => $this->input->post('rfc'),
			'direccion' => $this->input->post('direccion'),
			'estado' => $this->input->post('estado'),
			'codp' => $this->input->post('codp'),
			'telefono' => $this->input->post('telefono'),
			'celular' => $this->input->post('celular'),
			'mail' => $this->input->post('mail'),
			'web' => $this->input->post('web'));
			
		return $cliente;
	}
	
	
	function nuevo_cliente()
	{
		$this->load->view('header');
		$this->load->view('clientes/nuevo_cliente');
	}
	
	function agregar_cliente()
	{ 
		$cliente = $this->arreglo('cliente');
		$this->clientes->agregar_cliente($cliente);
		$this->success();	
	}
		
	
	function editar_cliente()
	{	
		$id = $this->input->post('id_cliente');
		$cliente = $this->arreglo('cliente');
		$this->clientes->editar_cliente($id,$cliente);
		$this->success();
	}

	function gestion_cliente() // gestion clientes "elminar" y "editar".
	{
	
	$id = $this->input->post('id_cliente'); // envio de variable por metodo POST // uso de checkbox
	
	if (isset($_POST['editar']))
	{
	
	if (isset($id) && $id!="")
		{
			$this->load->view('header');
			$datos ['clientes'] = $this->clientes->ver_cliente($id);
			$this->load->view('clientes/editar_cliente',$datos);	
		}
	else
		{
			$this->select_error();
		}
	}
	
	elseif(isset($_POST['eliminar']))
	
	{
		
	if (isset($id) && $id!="")
		{
			$this->clientes->eliminar_cliente($id);
			$this->success_delete();
		}
	else
		{
			$this->select_error();
		}
	
	};

	}

	
	// Alta proveedores  //
	
	// AQUI VA EL DESAMDRE PARA PROVEEDORES 
}