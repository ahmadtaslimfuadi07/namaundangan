<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Xendit\Xendit;

class VirtualAccount extends CI_Controller
{

    public function index()
    {
        $this->load->view('virtual_account');
    }

    public function submit(){
        // use Xendit\Xendit;
        require 'vendor/autoload.php';

        Xendit::setApiKey('xnd_production_xprGQuoDdKuYqu4bve7ofE5sFu4nsoKYvWJDAZejbGEil6rRM4ribBXCFuLUj4');

        $danaParams = [
            'external_id' => 'trns-02',
            'amount' => 10000,
            'phone' => '081219144060',
            'callback_url' => 'https://limstuido.site/u/farahikhsan',
            'redirect_url' => 'https://limstuido.site',
            'ewallet_type' => 'DANA'
        ];

        $createOvo = \Xendit\EWallets::create($danaParams);
        var_dump($createOvo);
    }

    public function invoice(){
        $post = $this->input->post();
        $id = $post['id'].'|'.$post['pengantin'].'|'.date("Y-m-d H:i:s");
        $data = array(
            'external_id' => $id, 
            'payer_email' => $post['email'], 
            'description' => $post['description'],
            'amount' => $post['amount'], 
            'createdate' => date("Y-m-d H:i:s"); , 
        );
        $this->db->insert('before_paid', $data);

        // use Xendit\Xendit;
        require 'vendor/autoload.php';
        // Xendit::setApiKey('xnd_production_xprGQuoDdKuYqu4bve7ofE5sFu4nsoKYvWJDAZejbGEil6rRM4ribBXCFuLUj4');
        Xendit::setApiKey('xnd_development_fuL0ZfhorAy7W61xqZJN2scnYxCW8QEE2DfPRk9FPZnguzUMRAljJh4qlMVQ6F');

        $params = [ 
            'external_id' => $id,
            'payer_email' => $post['email'],
            'description' => $post['description'],
            'amount' => $post['amount']
          ];

          $createInvoice = \Xendit\Invoice::create($params);
          $url =  $createInvoice['invoice_url'];
          // $this->output->set_header($url);
          redirect($url);
          // header("Location: .$createInvoice['invoice_url']");
          // var_dump($createInvoice);

    }

    public function callback_ewallet(){
        $data = json_decode(file_get_contents('php://input'), true);
         
        
        $hasil = array(
            'type' => $data['payment_method'],
            'bank_name' => $data['payment_channel'],
            'status' => $data['status'],
            'amount' => $data['amount'],
            'paid_at' => $data['paid_at'],
            'fees_paid_amount' => $data['fees_paid_amount'],
            'adjusted_received_amount' => $data['adjusted_received_amount'],
            'paid_amount' => $data['paid_amount'],
            'description' => $data['description'],
            'external_id' => $data['external_id'],
            'string' => http_build_query($data, '', '|')
        );
        $this->db->insert('transaksi', $hasil);
    }

    function test(){
        $data = array(
            'foo' => 'bar',
            'baz' => 'boom',
            'cow' => 'milk',
            'php' => 'hypertext processor'
        );

        echo http_build_query($data, '', '|');
    }
}