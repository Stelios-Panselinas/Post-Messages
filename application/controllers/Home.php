<?php 
    class Home extends CI_Controller{
        public function register(){
            
            $data['title'] = 'Sign Up';

            $this->form_validation->set_rules('first_name', 'First Name', 'required');
            $this->form_validation->set_rules('last_name', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header_home');
                $this->load->view('home/sign_in', $data);
                $this->load->view('templates/footer');
            }else {
                $enc_password = md5($this->input->post('password'));
                $this->home_model->register($enc_password);
 
                $this->session->set_flashdata('user_registered','You are now registered and you can log in');
                redirect('pages/view');
            }
        }

        public function login(){
            $data['title'] = 'Sign In';

            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header_home');
                $this->load->view('home/login_user', $data);
                $this->load->view('templates/footer');
            }else {
                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));
                $user_id = $this->home_model->login($email, $password);
                if($user_id){
                    //create_session
                    $user_data = array(
                        'user_id' => $user_id,
                        'email' => $email,
                        'logged_in' => true
                    );

                    $this->session->set_userdata($user_data);
                    //SEt message
                    $this->session->set_flashdata('user_loggedin','You are now logged in');
                redirect('pages/view');

                }else{
                    $this->session->set_flashdata('login_failed','Login is invlaid');
                redirect('home/login');
                }

                
            }
        }

        public function logout(){
            $this->session->unset_userdata('logged_in');
            $this->session->unset_userdata('user_id');
            $this->session->unset_userdata('email');

            $this->session->set_flashdata('user_loggedout','You have been logged out');
                redirect('home/login');
        }

        public function login_admin(){
            $data['title'] = 'Sign In';

            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header_home');
                $this->load->view('home/login_admin', $data);
                $this->load->view('templates/footer');
            }else {
                $email = $this->input->post('email');
                $password = md5($this->input->post('password'));
                $admin_id = $this->home_model->login_admin($email, $password);
                if($admin_id){
                    //create_session
                    $user_data = array(
                        'admin_id' => $admin_id,
                        'email' => $email,
                        'logged_in' => true
                    );

                    $this->session->set_userdata($user_data);
                    //SEt message
                    $this->session->set_flashdata('admin_loggedin','You are now logged in');
                redirect('pages/admin/myProfile_admin');

                }else{
                    $this->session->set_flashdata('login_failed','Login is invlaid');
                redirect('home/login_admin');
                }

                
            }
        }

        public function lost_pass(){

        $data['title'] = 'Lost Password'; // Capitalize the first letter

        $this->load->view('templates/header_home');
        $this->load->view('home/lost_pass', $data);
        $this->load->view('templates/footer');
        }

        public function reset_pass(){

            $this->load->library('email');

            $config['protocol'] = 'smtp';
            $config['mailpath'] = '/usr/sbin/sendmail';
            $config['smtp_host'] = 'mail1.upatras.gr';
            $config['smtp_user'] = 'up1072526@upnet.gr';
            $config['smtp_pass'] = 'criacriapr';
            $config['smtp_posrt'] = 465;
            $config['charset'] = 'utf-8';
            $config['wordwrap'] = TRUE;

            $this->email->initialize($config);

            $from_email = "up1072526@upnet.gr";
            $to_email = $this->input->post('email');
            
            $this->email->from($from_email,'Test');
            $this->email->to($to_email);
            $this->email->subject('Test subject');
            $this->email->message('Click the link to reset your password');
            $this->email->send();

            
        }

        public function check_email_exists($email){
            $this->form_validation->set_message('check_email_exists', 'That email is taken. Please use a different one');
            if($this->home_model->check_email_exists($email)){
                return true;
            }else{
                return false;
            }
        }
}