<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('lim_view');
	}

    public function test(){
        $a = 90;
        if(($a >= 50 && $a <= 100) || ($a<=-50 && $a >= -100)){
            echo 'berhasil';
        }
    }

    public function test2(){
        if(1 != 1 || ('0000-00-00 00:00:00' == '' || '0000-00-00 00:00:00' == '0000-00-00 00:00:00') && 534 == 534){
            echo 'true';
        }
    }
}
