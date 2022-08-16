<?php
class insertion extends CI_Controller
{
    public function __construct() { 
        parent::__construct(); 
        $this->load->helper(array('form', 'url')); 
     }
    function index()
    {
        if ($this->input->post('envoyer')) {
            $autoload['helper'] = array('form', 'url');

            $config['upload_path'] = 'C:\wamp64\www\uiz\links\profile';
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
                echo 'error';
            } else {
                $upload_data = $this->upload->data();
                $file_name = $upload_data['file_name'];
            }


                $mail =  $_SESSION['mail'];
                $password =  $_SESSION['password'];
                $id = $_SESSION['id_membre'];
                $position = $_SESSION['position'];

                $name = $this->input->post('nom');
                $prenom = $this->input->post('prenom');
                $adresse = $this->input->post('adresse');
                $tel = $this->input->post('tel');
                $date = $this->input->post('date');
                $diplome = $this->input->post('diplome');
                $spesialite = $this->input->post('spesialite');
                $promotion = $this->input->post('promotion');

                if ($position == 'master') $this->db->query("insert into master(id_membre) values ('$id')");





                $this->db->query("update membre set image='$file_name',diplome='$diplome',spesialite='$spesialite',promotion='$promotion',tel='$tel',date='$date',diplome='$diplome',nom='$name',prenom='$prenom',adresse='$adresse' where email='$mail' and password='$password'");
                $data['error'] = "<h6 style='background: rgba(0, 255, 0, 0.19);color: rgba(0, 255, 0, 0.99);border-radius: 5px;width: fit-content;padding: 8px;'>Votre compte a été créé avec succès</h6>";
                $this->load->view('login_view', $data);
            
            }
        }
        function prj()
        {
            $id = $_SESSION['id_membre'];
            $data['projet'] = $this->db->query("select * from master natural join sujetrecherche where id ='$id'");
            $this->load->view('projet', $data);
        }
    }

