<?php
class Lap3 extends MY_Controller{
	function __construct(){
		parent::__construct();
		
	}


	public function example_get(){
		$keyword = $this->input->get('search');
		$id = $this->input->get('id');
		if(!empty($keyword)){
			echo $keyword;
		}
		if(!empty($id)){
			echo $id;
		}
		$this->load->view('lap_3_get');
	}

	public function example_post(){
		$keyword = $this->input->post('search');
		$id = $this->input->post('id');
		if(!empty($keyword)){
		//	echo $keyword;
		}
		if(!empty($id)){
			//echo $id;
		}
		$data = array(
			'data' => 
				array(
				'keyword' => $keyword,
				'id' => $id,
				)
		);
		$this->load->view('lap_3_post',$data);
	}

	
}

//$this->load->model('global_model', 'GlobalMD');
//$this->parser->parse('default/header',$data);	
?>