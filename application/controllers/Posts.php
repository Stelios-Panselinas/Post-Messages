<?php
class Posts extends CI_Controller {

public function index()
{
        if(!$this->session->userdata('logged_in')){
                redirect('home/login');
        }
        $data['title'] = "Posts";

        $data['posts'] = $this->post_model->get_posts();

        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');

        
}

public function all_posts()
{
        if(!$this->session->userdata('logged_in')){
               redirect('home/login');
        }
        $data['title'] = "Posts";

        $data['posts'] = $this->post_model->get_all_posts();

        $this->load->view('templates/header_admin');
        $this->load->view('posts/all_posts', $data);
        $this->load->view('templates/footer');

        
}

public function create(){
        //check loggin
        if(!$this->session->userdata('logged_in')){
                redirect('home/login');
        }

        $data['title'] = "Create Post";

        $this->form_validation->set_rules('message', 'Message', 'required');
        
        if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('posts/create', $data);
                $this->load->view('templates/footer');
        }else {
             $this->post_model->create_post();
             redirect('posts');
        }

        
}
}
