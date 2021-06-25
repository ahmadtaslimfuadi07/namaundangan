<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Myadmin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->library(array('template'));
        // $this->load->library('menu');
        // $this->load->model('m_user');

        $session = $this->session->userdata('logged_in');
        if (!$session) {
            redirect('Loginadmin');
        }
    }

    public function index()
    {
        $role = 1;
        // $this->menu->get_menu($role);
        $this->template->display('admin/v_dashboard');
    }
    
    public function pernikahan(){

        $data['active'] = 'pernikahan';
        $this->db->order_by('id', 'asc');
        
        $this->db->where('iduser', $this->session->userdata('id'));
        $query = $this->db->get('undangan');
        $data['data'] = $query->result();
        $this->template->display('admin/v_pernikahan', $data);
    }

    public function addundangan(){
        // $role = 1;
        // $this->menu->get_menu($role);
        $data['active'] = 'pernikahan';
        // $this->db->select('id_pernikahan', 'DESC');
       
        $data['iduser'] = $this->session->userdata('id');
        $this->template->display('admin/addundangan', $data);
    }

    public function ajaxgetpernikahan(){
        $get = $this->input->get();
        $this->db->select("*");
        $this->db->from("pernikahan_tbl");
        $this->db->where("created_date >= '$get[tanggal1]'");
        $this->db->where("created_date <= '$get[tanggal2]'");
        $this->db->order_by('created_date','desc');
        $query = $this->db->get()->result();

        $json['listdata'] = $query;
        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }

    public function foto(){
        $this->db->select("id_pernikahan, uri_2, panggilan_l, panggilan_p");
        $this->db->from("pernikahan_tbl");
        $query = $this->db->get()->result();
        $data['active'] = 'foto';
        $this->template->display('admin/v_foto', $data);
    }

    public function addpernikahan(){
        $data['active'] = 'pernikahan';
        $this->template->display('admin/addpernikahan', $data);
    }

    public function kehadiran(){
        $session = $this->session->userdata();
        $access = $session['accessid'];
        $pernikahanid = $session['pernikahan_id'];
        
        if($access == '2'){
            $this->db->where('id_pernikahan', $pernikahanid);
        }
        $this->db->select('oleh, hadir, jumlah');
        $this->db->where('hadir in (1,0)');
        $query = $this->db->get('ucapan_tbl');
        // echo $this->db->last_query();

        $data['data'] = $query->result();
        $data['active'] = 'tamu';
        $this->template->display('admin/tamu', $data);
    }

    public function ucapan(){
        $session = $this->session->userdata();
        $access = $session['accessid'];
        $pernikahanid = $session['pernikahan_id'];
        
        if($access == '2'){
            $this->db->where('id_pernikahan', $pernikahanid);
        }
        $this->db->select('oleh, hadir, ucapan, id_ucapan');
        $this->db->where('status in (1)');
        $query = $this->db->get('ucapan_tbl');
        // echo $this->db->last_query();

        $data['data'] = $query->result();
        $data['active'] = 'ucapan';
        $this->template->display('admin/ucapan', $data);
    }

    public function hapusucapan(){
        $post = $this->input->post();

        echo $id = $this->input->post('id_ucapan');
        $data = array('status' => 0);
        $this->db->where('id_ucapan', $id);
        if($this->db->update('ucapan_tbl', $data)){
            redirect('myadmin/ucapan');
        }
    }

    public function simpanpernikahan(){
        $post = $this->input->post();
        $this->db->select('id_pernikahan');
        $this->db->limit(1);
        $this->db->order_by('id_pernikahan', 'DESC');
        $query = $this->db->get('pernikahan_tbl')->row();
        $id = $query->id_pernikahan + 1;  
        $success = 0;


        $data_pernikahan = $post;
        unset($data_pernikahan['tentang_p']);
        unset($data_pernikahan['tentang_l']);
        $data_pernikahan['id_pernikahan'] = $id;

        $data_tentang_p = array(
            'id_pernikahan' => $id, 
            'tentang' => $post['tentang_p'],
            'jenis' => 2 
        );


        $data_tentang_l = array(
            'id_pernikahan' => $id, 
            'tentang' => $post['tentang_l'],
            'jenis' => 1 
        );

        $data_user = array(
            'username' => $post['uri_2'],
            'password' => md5('123123'),
            'status' => 1,
            'user_role' => 2,
            'created_date' => date('Y-m-d H:i:s'),
            'pernikahan_id' =>$id
        );

        $data_ucapan = array(
            'ucapan' => 'Selamat ya ka '.$post["panggilan_p"].' & '.$post["panggilan_l"] .', semoga dilancarkan hingga hari H dan selalu menjadi pasangan yang berbahagia aamiin.. 🤲💕🤵👰🥰🥳',
            'oleh' => 'Taslim (Founder LimStudio)',
            'email' => 'Founder LimStudio',
            'status' => 1,
            'id_pernikahan' => $id,
        );

        if($this->db->insert('pernikahan_tbl', $data_pernikahan))$success +=1;
        if($this->db->insert('tentang_tbl', $data_tentang_l))$success +=1;
        if($this->db->insert('tentang_tbl', $data_tentang_p))$success +=1;
        if($this->db->insert('user_tbl', $data_user))$success +=1;
        if($this->db->insert('ucapan_tbl', $data_ucapan))$success +=1;
        
        if($success >= 5){
            $json['status'] = 1;
            $this->output->set_content_type('application/json')->set_output(json_encode($json));
        }
        else{
            $json['status'] = 0;
            $this->output->set_content_type('application/json')->set_output(json_encode($json));
        }

    }

    public function simpanundangan(){
        $post = $this->input->post();
        var_dump($post);

        $nama = $post['namaundangan'];
        $alamat = $post['alamat'];+
        $nodata = 0;
        $simpandata = 0;

        foreach($nama as $key=> $value){
            if($value != '' && $post['alamat'][$key]!= ''){
                $no++;
                $reg_dat = array(
                    'iduser'     => $post['iduser'],
                    'nama'       => $value,
                    'alamat'     => $post['alamat'][$key],
                    'createdat'  => date("Y/m/d H:i:s"),
                );
                if($this->db->insert('undangan', $reg_dat)){
                    $simpandata++;
                }
            }
        }

        if($nodata == $simpandata){
            echo 1;
        }
        else{
            echo 0;
        }

    }

    public function exportpdf(){
        // panggil library yang kita buat sebelumnya yang bernama pdfgenerator
        $this->load->library('pdf');
        // $this->load->view('admin/label');
        
        // title dari pdf
        $this->data['title_pdf'] = 'Laporan Penjualan Toko Kita';
        
        // filename dari pdf ketika didownload
        $file_pdf = 'laporan_penjualan_toko_kita';
        // setting paper
        $paper = 'A4';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        
        $html = $this->load->view('admin/label',$this->data, true);     
        
        // run dompdf
        $this->pdf->generate($html, $file_pdf,$paper,$orientation);

    }
}