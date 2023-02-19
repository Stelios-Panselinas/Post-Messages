<?php
class Admin extends CI_Controller {

        public function view($admin_id)
        {
            
        
                $data['admin_id'] = $admin_id; // Capitalize the first letter
        
                $this->load->view('templates/header_admin', $data);
                $this->load->view('pages/myProfile_admin', $data);
                $this->load->view('templates/footer', $data);

                
        }

        public function update_profile_admin($admin_id){

            $this->admin_model->update_profile_admin($admin_id);

            $this->load->view('templates/header');
            $this->load->view('admin/view');
            $this->load->view('templates/footer');

        }
    }
        ?>