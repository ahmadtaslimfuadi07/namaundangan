<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Origin, Content-Type, Accept, Authorization, X-Request-With');

class Undangan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_pernikahan', 'm_nikah');
    }


    public function index()
    {
        $_get_name = $this->uri->segment('2');
        $_get_tujuan = $this->uri->segment('3');

        $data_pernikahan = $this->m_nikah->get_nikah($_get_name);
        $data['data'] = $data_pernikahan;
        $data['tujuan'] = urldecode($_get_tujuan);
        $data['tanggal'] = date_create($data_pernikahan['tgl_resepsi']);
        $data['bulan'] = $this->format_bulan($data['tanggal']);
        $data['hari'] = $this->format_hari($data['tanggal']);
        $data['tanggal_akad'] = date_create($data_pernikahan['tgl_akad']);
        $data['bulan_akad'] = $this->format_bulan($data['tanggal_akad']);
        $data['hari_akad'] = $this->format_hari($data['tanggal_akad']);
        $data['gambar'] = $this->m_nikah->get_gambar($data_pernikahan['id_pernikahan']);
        $data['gallery'] = $this->m_nikah->get_gallery($data_pernikahan['id_pernikahan']);
        $data['ucapan'] = $this->m_nikah->get_ucapan($data_pernikahan['id_pernikahan'], 'DESC');
        $data['tentang'] = $this->m_nikah->get_tentang($data_pernikahan['id_pernikahan']);


        if ($data_pernikahan['thema'] == '1') {
            $this->load->view('thema-baru/thema1', $data);
        } 
        else if ($data_pernikahan['thema'] == '2') {
            $this->load->view('thema/thema2', $data);
        } 
        else if ($data_pernikahan['thema'] == '3') {
            $this->load->view('thema/thema1_kristen', $data);
        } 
        else if ($data_pernikahan['thema'] == '4') {
            $this->load->view('thema/thema4', $data);
        } 
        else if ($data_pernikahan['thema'] == '5') {
            $this->load->view('thema/thema5', $data);
        }
        else if ($data_pernikahan['thema'] == '6') {
            $this->load->view('thema-baru/thema6', $data);
        } 
        else if ($data_pernikahan['thema'] == '7') {
            $this->load->view('thema-baru/thema7', $data);
        } 
        else if ($data_pernikahan['thema'] == '8') {
            $this->load->view('thema-baru/thema8', $data);
        } 
        else if ($data_pernikahan['thema'] == '9') {
            $this->load->view('thema-baru/thema9', $data);
        } 
        else if ($data_pernikahan['thema'] == '10') {
            $this->load->view('thema-baru/thema10', $data);
        }
        else if ($data_pernikahan['thema'] == '11') {
            $this->load->view('thema-baru/thema11', $data);
        }  
        else if ($data_pernikahan['thema'] == '97') {
            $this->load->view('thema/thema5_darlam', $data);
        }
        else if ($data_pernikahan['thema'] == '94') {
            $this->load->view('thema-baru/thema2_valen', $data);
        }
        else if ($data_pernikahan['thema'] == '501') {
            $this->load->view('thema-baru/thema4_ditapasya', $data);
        } 
        else if ($data_pernikahan['thema'] == '12') {
            $this->load->view('thema-baru/thema12', $data);
        } 
        else if ($data_pernikahan['thema'] == '13') {
            $this->load->view('thema-baru/thema13', $data);
        } 
        else if ($data_pernikahan['thema'] == '14') {
            $this->load->view('thema-baru/thema14', $data);
        } 
        else {
            $this->load->view('errors/404');
        }
    }

    public function sub_domain_indri_faisal()
    {
        $url = "indri-faisal";
        $this->sub_domain($url);
    }


    public function format_bulan($tanggal)
    {
        $bulan = date_format($tanggal, 'm');
        $arr_bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $format_bulan = $arr_bulan[$bulan - 1];
        return $format_bulan;
    }

    public function format_hari($tanggal)
    {
        $bulan = date_format($tanggal, 'D');
        switch ($bulan) {
            case 'Sun':
                $hari_ini = "Minggu";
                break;

            case 'Mon':
                $hari_ini = "Senin";
                break;

            case 'Tue':
                $hari_ini = "Selasa";
                break;

            case 'Wed':
                $hari_ini = "Rabu";
                break;

            case 'Thu':
                $hari_ini = "Kamis";
                break;

            case 'Fri':
                $hari_ini = "Jumat";
                break;

            case 'Sat':
                $hari_ini = "Sabtu";
                break;

            default:
                $hari_ini = "Tidak di ketahui";
                break;
        }
        return $hari_ini;
    }

    public function insert()
    {
        $data = $this->input->post();
        $data2 = array(
            'id_pernikahan' => $data['id'],
            'ucapan' => $data['notes'],
            'email' => $data['email'],
            'oleh' => $data['name'],
            'status' => '1',
            'hadir' => @$data['hadir']
        );
        $simpan = $this->m_nikah->insert_ucapan($data2);
        if ($simpan == '1') {
            echo '1';
        } else {
            echo '2';
        }
    }
}
