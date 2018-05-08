<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {
	
	    public function __construct() {
        parent::__construct();
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
	public function verFotos(){
		
		
	}
} 