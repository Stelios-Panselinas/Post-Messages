<?php
    class post_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }
        public function get_posts($slug = FALSE){
            if($slug === FALSE){
                $user_id = $this->session->userdata('user_id');
                
                $this->db->where('user_id', $user_id);
                $query = $this->db->get_where('posts');
                return $query->result_array();
            }

            $query = $this->db->get_where('posts', array('slug'=> $slug));
            return $query->row_array();
        }

        public function get_all_posts($slug = FALSE){
            if($slug === FALSE){
                $query = $this->db->query("SELECT user.first_name,user.last_name,user.email,posts.id,posts.message,posts.created_at FROM user INNER JOIN posts ON user.user_id=posts.user_id");
                return $query->result_array();
            }

            $query = $this->db->get_where('posts', array('slug'=> $slug));
            return $query->row_array();
        }


        public function create_post(){
            $slug = url_title($this->input->post('message'));

            $data = array(
                'slug' => $slug,
                'message' => $this->input->post('message'),
                'user_id' => $this->session->userdata('user_id')
            );
            return $this->db->insert('posts',$data);
        }
    }
?>