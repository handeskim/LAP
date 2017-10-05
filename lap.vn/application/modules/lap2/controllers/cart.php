<?php
class Cart extends MY_Controller{
	function __construct(){
		parent::__construct();
		
	}
	
	public function index(){
		echo "HMVC Cart";
	}

	
}

//$this->load->model('global_model', 'GlobalMD');
//$this->parser->parse('default/header',$data);	
?>