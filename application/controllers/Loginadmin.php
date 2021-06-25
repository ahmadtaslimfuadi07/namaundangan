<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loginadmin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $session = $this->session->userdata('logged_in');
        if ($session) {
            $uri = $this->uri->segment(2);
            if($uri == ''){
                redirect('myadmin');
            }
        }

    }

    public function index()
    {
        $this->load->view('admin/login');
    }

    public function logincek(){
        $post = $this->input->post();
        $this->db->select("*");
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', md5($post['password']));
        $this->db->where('status', '1');
        $query = $this->db->get()->result();
        if($query != null){
            $newdata = array(
                'id'                 => $query[0]->id_user,
                'username'           => $post['username'],
                'accessid'           => $query[0]->user_role,
                'pernikahan_id'      => $query[0]->pernikahan_id,
                'logged_in'          => TRUE
            );

            $this->session->set_userdata($newdata);

            redirect('myadmin/pernikahan');
        }
        else{
            redirect('Loginadmin');
        }
    }

    public function logout(){
        $this->session->sess_destroy();
        redirect("Loginadmin");
    }
}
