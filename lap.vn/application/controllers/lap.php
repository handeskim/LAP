<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lap extends CI_Controller {

	public function index()
	{
		
		echo "";
		echo "----------------------------<br>";
		$a = 1;
		$b = 2;
		$c = $a * $b;
		print_r($c);
		//$this->load->view('welcome_message');
	}
	
	public function cart(){
		echo "day la gio hang";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */