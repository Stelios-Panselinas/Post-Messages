<?php
    class user_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        public function get_all_users($slug = FALSE){
            if($slug === FALSE){
                $query = $this->db->query("SELECT user_id,first_name,last_name,email FROM user");
                return $query->result_array();
            }

            $query = $this->db->get_where('users', array('slug'=> $slug));
            return $query->row_array();
        }

        public function delete_user($id){
            $this->db->where('user_id', $id);
            $this->db->delete('posts');
            $this->db->where('user_id', $id);
            $this->db->delete('user');
            return true;
        }

        public function edit_user($id){
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $email = $this->input->post('email');
            if(!empty($first_name)){
                $data = array(
                    'first_name' => $first_name
                );
                $this->db->where('user_id', $id);
                $this->db->update('user',$data);
                
            }
            if(!empty($last_name)){
                $data = array(
                    'last_name' => $last_name
                );
                $this->db->where('user_id', $id);
                $this->db->update('user',$data);
                
            }
            if(!empty($last_name)){
                $data = array(
                    'email' => $email
                );
                $this->db->where('user_id', $id);
                $this->db->update('user',$data);
                
            }
            redirect('users/view/customers');
        }

        public function update_profile_user($id){
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            if(!empty($first_name)){
                $data = array(
                    'first_name' => $first_name
                );
                $this->db->where('user_id', $id);
                $this->db->update('user',$data);
                
            }
            if(!empty($last_name)){
                $data = array(
                    'last_name' => $last_name
                );
                $this->db->where('user_id', $id);
                $this->db->update('user',$data);
                
            }
            if(!empty($email)){
                $data = array(
                    'email' => $email
                );
                $this->db->where('user_id', $id);
                $this->db->update('user',$data);
                
            }
            if(!empty($password)){
                $enc_password = md5($password);
                $data = array(
                    'password' => $enc_password
                );
                $this->db->where('user_id', $id);
                $this->db->update('user',$data);
                
            }
            redirect('pages/view/'.$id);
        }

        public function show_users_mess($user_id){
            $this->db->where('user_id', $user_id);
            $query = $this->db->get_where('posts');
            return $query->result_array();

        }
    }