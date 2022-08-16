<?php
defined('BASEPATH') or exit('No direct script access allowed');

class projects extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        if ($this->input->post('projetR')) {
            $sujet = $this->input->post('sujet');
            $descr = $this->input->post('descr');

            $this->db->query("insert into projetrechercher values('','$sujet','$descr')");
            $data['error'] = "<h3 style='color:rgb(3, 102, 3); background: rgba(0, 240, 0, 0.39);border-radius: 5px;width: fit-content;padding: 8px;'>Projet ajouté !</h3>";
        }

        if ($this->input->post('sujetR')) {
            $sujet = $this->input->post('sujet');
            $descr = $this->input->post('descr');

            $this->db->query("insert into sujetrecerche values('','$sujet','$descr')");
            $data['error'] = "<h3 style='color:rgb(3, 102, 3); background: rgba(0, 240, 0, 0.39);border-radius: 5px;width: fit-content;padding: 8px;'>Projet ajouté !</h3>";
        }


        if ($this->input->post('sujetT')) {
            $sujet = $this->input->post('sujet');
            $descr = $this->input->post('descr');

            $this->db->query("insert into sujetthese values('','','$sujet','$descr')");
            $data['error'] = "<h3 style='color:rgb(3, 102, 3); background: rgba(0, 240, 0, 0.39);border-radius: 5px;width: fit-content;padding: 8px;'>Projet ajouté !</h3>";
        }

        if ($this->input->post('membreST')) {
            $sujet = $this->input->post('sujet');
            $prof = $this->input->post('prof');
            
           

            if (!empty($prof)) {
                foreach ($prof as $w)  $w=str_replace(' ', '', $w)  ;$this->db->query("insert into prof (id_membre,id_sujetT) select id_membre,id_sujetT from membre,sujetthese where sujet='$sujet' and (nom,prenom)='$w' ");
            }
        }






        $this->load->view('operation_view', @$data);
    }
}
