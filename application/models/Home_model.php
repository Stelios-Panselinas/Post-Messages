<?php 
    class Home_model extends CI_Model{
        public function register($enc_password){
            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'password' => $enc_password
            );

            return $this->db->insert('user', $data);
        }

        public function login($email, $password){
            $this->db->where('email', $email);
            $this->db->where('password', $password);

            $result = $this->db->get('user');

            if($result->num_rows() == 1){
                return $result->row(0)->user_id;
            }else{
                return false;
            }

        }

        public function login_admin($email, $password){
            $this->db->where('email', $email);
            $this->db->where('password', $password);

            $result = $this->db->get('admin');

            if($result->num_rows() == 1){
                return $result->row(0)->admin_id;
            }else{
                return false;
            }

        }

        public function check_email_exists($email){
            $query = $this->db->get_where('user', array('email' => $email));
            if(empty($query->row_array())){
                return true;
            }else{
                return false;
            }
        }
    }