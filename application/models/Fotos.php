<?php 
class Fotos extends CI_Model{

    public function __construct(){
        parent::__construct();
            
    }

	public function getFotos(){
		    $this->db->select('*');
        $this->db->from('galeria');
        $results=$this->db->get();
        if($results->num_rows()>0){
            return $results->result();
        }else{
            return FALSE;
        }
		
	}	
		
}


?>