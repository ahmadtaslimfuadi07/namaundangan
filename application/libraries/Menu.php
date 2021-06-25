<?php
class Menu
{

    protected $_CI;
    function __construct()
    {
        $this->_CI = &get_instance();
        $this->_CI->load->model('m_pernikahan', 'm_nikah');
    }

    function get_menu($role)
    {
        $_get_name = 'wss';
        $data_pernikahan = $this->_CI->m_nikah->get_nikah($_get_name);

        return $data_pernikahan;
    }
}
