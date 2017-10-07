<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mylove extends CI_Controller {
	private $a;
	private $b;
	function __construct(){
		header('Content-Type: text/html; charset=utf-8');
		parent::__construct();
	}
	
	public function boiduyenso($x=null,$a=null,$b=null)
	{	
	
		if(!empty($x)){
			if(!empty($a) || !empty($b) || $a != null ||  $b != null ){
				$this->a = $a;
				$this->b = $b;
				echo $this->a . " YEU ".$this->b;
			}else{
				echo "BAN CHUA CO NGUOI YEU";
				
			}
			
		}else{
			echo "BAN CHUA CO NGUOI YEU";
		}
		
		//$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */