<?php
defined('BASEPATH') or exit('No direct script access allowed');

class publication extends CI_Controller
{

	public function index()
	{
		if ($this->input->post('recherche')) 
		{
			$recherche = $this->input->post('x');
			$date = $this->input->post('date');
			echo $date;
			
			
			if ( $date!='tous'  and isset($recherche))
				$que = $this->db->query("select * from publication where  year(date) ='$date' ");
			elseif($date == 'tous' and $recherche != '')
				$que = $this->db->query("select * from publication where titre like '%$recherche%' or wrt like '%$recherche%'  ");
			if($date!='tous' and $recherche != '')
			{
			$que = $this->db->query("select * from publication where (titre like '%$recherche%' or wrt like '%$recherche%' )and year(date)='$date'  ");
			
			}
			
			$data['pubs'] = $que->result();
		} 
		else
		{
			$que = $this->model->read_data("publication");
			$data['pubs'] = $que;
		}
		$this->load->view('publication_view', $data);
	}
}
