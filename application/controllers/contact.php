<?php
defined('BASEPATH') or exit('No direct script access allowed');

class contact extends CI_Controller
{

	public function index()
	{
		if ($this->input->post('envoyer')) {
			$this->load->library('email');
			$config['protocol'] = 'sendmail';
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE;

			$this->email->initialize($config);

			$this->email->from('x@gmail.com', 'Your Name');
			$this->email->to('x@gmail.com');


			$this->email->subject('Email Test');
			$this->email->message('Testing the email class.');

			$this->email->send();
			$data['error'] = "<h3 style='color:rgb(3, 102, 3); background: rgba(0, 240, 0, 0.39);border-radius: 5px;width: fit-content;padding: 8px;'>Message envoyer !</h3>";
		}
		$this->load->view('contact_view', @$data);
	}
}
