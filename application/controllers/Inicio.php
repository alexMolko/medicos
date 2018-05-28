<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	
	    public function __construct() {
        parent::__construct();
    }
	public function index()
	{
            $this->load->view("template");
	}
	public function galeria()
	{
		
		 $this->load->view('head');
		 $this->load->view('header');
		 $this->load->model('Fotos');
		 $fotos=$this->Fotos->getFotos();
		 $data=array ('fotos'=>$fotos	 
		 );
		 $this->load->view('galeria',$data);
		 $this->load->view("footer"); 
		// $this->load->view("temp");
	}
	public function AgendarCita(){
		
		if($this->input->post()){
			$this->load->library('email');
            $config = Array(
                            'protocol' => 'pop3',
                            'smtp_host' => 'drangelcano.com',
                            'smtp_port' => 110,
                            'smtp_user' => 'info@drangelcano.com',
                            'smtp_pass' => 'l9?p3l]M1z5)',//my valid email password
                            'mailtype' => 'html',
                            'charset' => 'iso-8859-1',
                            'wordwrap' => TRUE
                            );			
		}
		  $this->email->initialize($config);
      //Enviar correo...desde prosolutionsdc.com...
			
			$this->email->from('info@drangelcano.com', 'Prueba');
			$this->email->to($this->input->post('email'));
			$this->email->cc('nowoscmexico@gmail.com');
			//$this->email->cc('info@prosolutionsdc.com.mx');
			//$this->email->cc('Djuarez@prosolutionsdc.com.mx');

			$this->email->subject('Pedido realizado');
			$data = array(
       'cliente'=>$this->input->post('name'),
			 'mensaje'=>$this->input->post('message'),
			 'numero'=>$this->input->post('phone'),
			 'correo'=>$this->input->post('email')
       );			
			$datos=$this->load->view("email-template",$data,TRUE); 
			$this->email->message($datos);	
      $this->email->send();
			redirect('Inicio','refresh');
	}
} //l9?p3l]M1z5)