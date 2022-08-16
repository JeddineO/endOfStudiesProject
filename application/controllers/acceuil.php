<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class acceuil extends CI_Controller {

	public function index()
	{
		$this->load->view('acceuil_view');
	}
	
}