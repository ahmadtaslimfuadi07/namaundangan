<?php
class M_pernikahan extends CI_Model
{
    function get_nikah($url)
    {
        $query = "SELECT * from user'";
        $query = $this->db->query($query);
        return $query->row_array();
    }

    function get_gambar($id_pernikahan)
    {
        $query = "SELECT * from gambar_tbl where id_pernikahan = '$id_pernikahan' and jenis != '99'";
        $query = $this->db->query($query);
        return $query->result_array();
    }

    function get_gallery($id_pernikahan)
    {
        $query = "SELECT * from gambar_tbl where id_pernikahan = '$id_pernikahan' and jenis = '99'";
        $query = $this->db->query($query);
        return $query->result_array();
    }

    function get_ucapan($id_pernikahan, $order)
    {
        $query = "SELECT * from ucapan_tbl where id_pernikahan = '$id_pernikahan' and status = '1' order by id_ucapan $order";
        $query = $this->db->query($query);
        return $query->result_array();
    }

    function get_tentang($id_pernikahan)
    {
        $query = "SELECT * from tentang_tbl where id_pernikahan = '$id_pernikahan'";
        $query = $this->db->query($query);
        return $query->result_array();
    }

    function insert_ucapan($data)
    {
        return $this->db->insert('ucapan_tbl', $data);
    }
}
