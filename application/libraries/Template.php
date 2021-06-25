<?php
class Template
{
    protected $_CI;
    function __construct()
    {
        $this->_CI = &get_instance();
    }

    function display($template, $data = null)
    {
        $data['_content'] = $this->_CI->load->view($template, $data, true);
        $data['_navbar'] = $this->_CI->load->view('admin/template/navbar', $data, true);
        $data['_sidebar'] = $this->_CI->load->view('admin/template/sidebar', $data, true);
        $data['_footer'] = $this->_CI->load->view('admin/template/footer', $data, true);
        $data['_jquery'] = $this->_CI->load->view('admin/template/jquery', $data, true);
        $this->_CI->load->view('admin/template/core.php', $data);
    }
}
