<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	public function __construct() { 
        parent::__construct(); 
        $this->load->helper(array('form', 'url')); 
     }

	public function index()
	{
		

		//connection

		if ($this->input->post('login')) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$row = $this->model->login($email, $password);
			$que = $this->model->read_data2($email, $password);
			//$row = $que->num_rows();

			if ($row > 0) {
				//redirect('Welcome/dashboard');
				foreach ($que as $resultat) $position = $resultat->position;
				$nom = $resultat->nom;
				$data['master'] = $que;


				if ($nom == '') {
					$this->load->view('insc_view', $data);
				} 
				elseif ($position == 'admin'){
					$this->load->view('admin_view');
					 
				} 
				else $this->load->view('esp_view', $data);
					
				
				
			} else {
				$data['error'] = "<h6 style='background:rgba(255, 0, 0, 0.19); color: rgba(255, 0, 0, 0.99);border-radius: 5px;width: fit-content;padding: 8px;'>Email ou password est incorrect !</h6>";
				$this->load->view('login_view', @$data);
		}
		}
		if ($this->input->post('ajouter')) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$position = $this->input->post('position');
			$this->db->query("insert into membre values ('','','','$position','$email','$password','','','','','','','','')");
			$data['error'] = "<h3 style='color:rgb(3, 102, 3); background: rgba(0, 240, 0, 0.39);border-radius: 5px;width: fit-content;padding: 8px;'>Membre ajouter !</h3>";
			$this->load->view('admin_view', @$data);

		}


		if ($this->input->post('ajouterE')) {
			$titre = $this->input->post('titre');
			$descr = $this->input->post('descr');
			$chef = $this->input->post('chef');
			$this->db->query("insert into equipe(titre,descr,chef) values ('$titre','$descr','$chef')");
			$data['error'] = "<h3 style='color:rgb(3, 102, 3); background: rgba(0, 240, 0, 0.39);border-radius: 5px;width: fit-content;padding: 8px;'>Equipe ajouter !</h3>";
			$this->load->view('admin_view', @$data);

		}

		if ($this->input->post('publier')) {
			$titre = $this->input->post('titre');
			$description = $this->input->post('description');
			$this->db->query("insert into news (titre,description) values ('$titre','$description')");
			$data['error'] = "<h3 style='color:rgb(3, 102, 3); background: rgba(0, 240, 0, 0.39);border-radius: 5px;width: fit-content;padding: 8px;'>Article publier !</h3>";
			$this->load->view('admin_view', @$data);

		}


		if($id = $this->input->get('id_membre'))
		{
			$response = $this->model->deleterecords($id);
			if ($response == true) {
				$data['error'] = "<h3 style='color:rgb(3, 102, 3); background: rgba(0, 240, 0, 0.39);border-radius: 5px;width: fit-content;padding: 8px;'>Membre supprimer !</h3>";
				$this->load->view('admin_view', @$data);
		}

		
	}
	if($this->input->post('editer'))
    {
        $nom=$this->input->post('nom');
        $prenom=$this->input->post('prenom');
        $date=$this->input->post('date');
        $tel=$this->input->post('tel');
        $adress=$this->input->post('adress');

        $diplome=$this->input->post('diplome');
        $spesialite=$this->input->post('spesialite');
        $promotion=$this->input->post('promotion');
        $email=$this->input->post('mail');
        $password=$this->input->post('password');
        $id=$this->input->post('id');

       
        
        
         $this->db->query("update membre set  password='$password',email='$email',promotion='$promotion',spesialite='$spesialite',diplome='$diplome',nom='$nom',prenom='$prenom',date='$date',tel='$tel',adresse='$adress' where id_membre='$id'");
         $data['error'] = "<h3 style='color:rgb(3, 102, 3); background: rgba(0, 240, 0, 0.39);border-radius: 5px;width: fit-content;padding: 8px;'>Modification effectué !</h3>";
	 $this->load->view('login_view', $data);


    }
		

		
	
	}
	
}
