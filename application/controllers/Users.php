<?php
class Users extends CI_Controller {

        public function view($page = 'customers')
        {

            if(!$this->session->userdata('logged_in')){
                redirect('home/login');
         }

            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    show_404();
            }
        
                //$data['title'] = ucfirst($page); // Capitalize the first letter
        
                $data['users'] = $this->user_model->get_all_users();

                $this->load->view('templates/header_admin', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer', $data);     
        }

        public function delete($id){
            if(!$this->session->userdata('logged_in')){
                redirect('home/login');
         }

            $this->user_model->delete_user($id);
            redirect('users/view/customers');
        }

        public function edit($user_id){  
            if(!$this->session->userdata('logged_in')){
                redirect('home/login');
         }
            
            $data['user_id'] = $user_id;
            $this->load->view('templates/header_admin', $data);
            $this->load->view('users/edit_user', $data);
            $this->load->view('templates/footer', $data);
            
        }

        public function update($user_id){
            if(!$this->session->userdata('logged_in')){
                redirect('home/login');
         }

            $this->user_model->edit_user($user_id);
            
            $data['user_id'] = $user_id;
            $this->load->view('templates/header_admin', $data);
            $this->load->view('users/edit_user', $data);
            $this->load->view('templates/footer', $data);
            
        }

        public function update_profile_user($user_id){

            $this->user_model->update_profile_user($user_id);

            $this->load->view('templates/header');
            $this->load->view('pages/view');
            $this->load->view('templates/footer');
        }

        public function show_messages($user_id){

            if(!$this->session->userdata('logged_in')){
                redirect('home/login');
         }
            $data['messages'] = $this->user_model->show_users_mess($user_id);

            $this->load->view('templates/header_admin', $data);
            $this->load->view('users/user_message', $data);
            $this->load->view('templates/footer', $data);
        }
    }
        ?>