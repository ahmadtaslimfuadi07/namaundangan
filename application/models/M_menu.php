<?php
class M_menu extends CI_Model
{
    function get_menu($url)
    {
        $query = "SELECT * from pernikahan_tbl where uri_2 = '$url'";
        $query = $this->db->query($query);
        return $query->row_array();
    }
}
