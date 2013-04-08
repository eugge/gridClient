<?php

class Inicio extends CI_Controller 
{

	function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		
	}
	
	function clientes()
	{
		$this->load->view('header');
		$datos ['clientes'] = $this->clientes->tablacliente();
		$this->load->view('clientes/index',$datos);
	}
	
	function nuevo_cliente()
	{
		$this->load->view('header');
		$this->load->view('clientes/nuevo_cliente');
	}	
	
	function success()
	{	
		$this->clientes();
		$this->load->library('success');
		$this->success->send_success();
	}
	
	function success_delete()
	{
		
		$this->clientes();
		$this->load->view('mensajes/success_delete');
	}
	
	function select_error()
	{
		$this->clientes();
		$this->load->view('mensajes/select_error');
	}
	
	function agregar_cliente()
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

		$this->clientes->agregar_cliente($cliente);
		$this->success();
		
	}
	
	
	function editar_cliente()
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

		$this->clientes->editar_cliente($cliente);
		$this->success();
	}
	
	function eliminar_cliente()
	{
	$id = $this->input->post('id_cliente');
	if (isset($_POST['editar'])){
	$this->load->view('header');	
	$this->load->view('clientes/editar_cliente');
	}
	
	elseif(isset($_POST['eliminar'])){
		
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
	
}	
