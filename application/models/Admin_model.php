<?php 
    class Admin_model extends CI_Model{

        public function update_profile_admin($admin_id){

            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            if(!empty($first_name)){
                $data = array(
                    'first_name' => $first_name
                );
                $this->db->where('admin_id', $admin_id);
                $this->db->update('admin',$data);
                
            }
            if(!empty($last_name)){
                $data = array(
                    'last_name' => $last_name
                );
                $this->db->where('admin_id', $admin_id);
                $this->db->update('admin',$data);
                
            }
            if(!empty($last_name)){
                $data = array(
                    'email' => $email
                );
                $this->db->where('admin_id', $admin_id);
                $this->db->update('admin',$data);
                
            }
            if(!empty($password)){
                $enc_password = md5($password);
                
                    $data = array(
                        'password' => $enc_password
                    );
                    $this->db->where('admin_id', $admin_id);
                    $this->db->update('admin',$data);
                
        }
            redirect('admin/view/'.$admin_id);
        }

    }