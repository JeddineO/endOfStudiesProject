<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class evenement extends CI_Controller {

	public function index()
	{
		$que = $this->model->read_data("event");
			$data['pubs'] = $que;
		$this->load->view('evenement_view',$data);
	}
	
}