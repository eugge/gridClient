<?php if ( ! defined('BASEPATH')) exit('No se permite el acceso directo al script');

class Alertas  extends CI_Controller 

 {


   function send_success()
   {
   		$this->load->view('mensajes/success');
 
   }
   
   function success_delete()
   {
   		$this->load->view('mensajes/success_delete');
   }
   
   function select_error()
   {
   		$this->load->view('mensajes/select_error');
   }
}

?>