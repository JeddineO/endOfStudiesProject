<?php
defined('BASEPATH') or exit('No direct script access allowed');

class operation extends CI_Controller
{
    public function __construct() { 
        parent::__construct(); 
        $this->load->helper(array('form', 'url')); 
     }
    public function index()
	{
		

        if($this->input->post('submit'))
        {
            $titre=$this->input->post('titre');
            $date=$this->input->post('date');
            $journal=$this->input->post('journal');
            $ref=$this->input->post('ref');
            $w=$this->input->post('wrt');
            $wrt='';
            foreach ($w as $selectedOption)  $wrt =$wrt.$selectedOption.",";
            
             $this->db->query("insert into publication(titre,journal,date,ref,wrt) values ('$titre','$journal','$date','$ref','$wrt') ");
             $data['error'] = "<h3 style='color:rgb(3, 102, 3); background: rgba(0, 240, 0, 0.39);border-radius: 5px;width: fit-content;padding: 8px;'>Publication publier !</h3>";

        }


        
        //Ajouter Equipement

        if($this->input->post('equiper'))
        {
            $autoload['helper'] = array('form', 'url');
            $config['upload_path'] = 'C:\wamp64\www\uiz\links';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']  = '0';
            $config['max_width']  = '0';
            $config['max_height']  = '0';
            $config['$min_width'] = '0';
            $config['min_height'] = '0';


            if (!is_dir($config['upload_path'])) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('image')) {
                
                $file_name="logo.png";
            } else {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
            }

            $model=$this->input->post('model');
            $desc=$this->input->post('desc');
           
            
            
             $this->db->query("insert into equipement(model,tag,image) values ('$model','$desc','$file_name') ");
             $data['error'] = "<h3 style='color:rgb(3, 102, 3); background: rgba(0, 240, 0, 0.39);border-radius: 5px;width: fit-content;padding: 8px;'>Equipement Ajouté !</h3>";

        }


        //appel a projet


        if($this->input->post('projet'))
        {
            $titre=$this->input->post('titre');
            $tag=$this->input->post('tag');
            $date=$this->input->post('date');
             $this->db->query("insert into projet values ('$titre','$tag','$date') ");
             $data['error'] = "<h3 style='color:rgb(3, 102, 3); background: rgba(0, 240, 0, 0.39);border-radius: 5px;width: fit-content;padding: 8px;'>Projet Publier !</h3>";

        }


         //Event



    
    if($this->input->post('event'))
    {
        $autoload['helper'] = array('form', 'url');
        $config['upload_path'] = 'C:\wamp64\www\uiz\links';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']  = '0';
        $config['max_width']  = '0';
        $config['max_height']  = '0';
        $config['$min_width'] = '0';
        $config['min_height'] = '0';


        if (!is_dir($config['upload_path'])) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            
            $file_name="logo.png";
        } else {
            $upload_data = $this->upload->data();
            $file_name = $upload_data['file_name'];
        }

        $type=$this->input->post('type');
        $desc=$this->input->post('desc');
        $sujet=$this->input->post('sujet');
        $date=$this->input->post('date');
        $lieu=$this->input->post('lieu');

       
        
        
         $this->db->query("insert into event(sujet,type,descr,date,image,lieu) values ('$sujet','$type','$desc','$date','$file_name','$lieu') ");
         $data['error'] = "<h3 style='color:rgb(3, 102, 3); background: rgba(0, 240, 0, 0.39);border-radius: 5px;width: fit-content;padding: 8px;'>Evénement publié !</h3>";

    }



        $this->load->view('operation_view',@$data);
	}




    

   

}