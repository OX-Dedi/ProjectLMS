<?php
class chart_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function chart_database(){
        return $this->db->get('laporan')->result();
    }
    function siswa(){
        $hasil = $this->db->query("SELECT * FROM activity order by NIP asc");
        return $hasil;
    }
}
?>