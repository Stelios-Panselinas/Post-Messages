<?php
class Pages extends CI_Controller {

        public function view()
        {
                if(!$this->session->userdata('logged_in')){
                        redirect('home/login');
                }
        
                
        
                $this->load->view('templates/header');
                $this->load->view('pages/myProfile_user');
                $this->load->view('templates/footer');

                
        }

        public function admin($page)
        {
                if(!$this->session->userdata('logged_in')){
                       redirect('home/login');
                }
        
                $data['title'] = ucfirst($page); // Capitalize the first letter
        
                $this->load->view('templates/header_admin');
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer');

        }

}