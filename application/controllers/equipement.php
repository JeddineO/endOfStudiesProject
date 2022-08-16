<?php
defined('BASEPATH') or exit('No direct script access allowed');

class equipement extends CI_Controller
{


	public function index()
	{
		if ($this->input->post('recherche')) {
			$recherche = $this->input->post('x');
			$que = $this->db->query("select * from publication where titre like '%$recherche%' or wrt like '%$recherche%'  ");
			$data['pubs'] = $que->result();
		} else {
			$que = $this->model->read_data("equipement");
			$data['pubs'] = $que;
		}
		$this->load->view('equipement_vieW', $data);
	}
}
