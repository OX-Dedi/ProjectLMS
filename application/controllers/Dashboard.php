<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    function _construct(){
        parent::_construct();

        $this->load->model();
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('dashboard');
        $data['data']=$this->chart_model->siswa();
        $this->load->view('tabel_siswa/mahasiswa',$data);
        $this->load->view('morris/trafficbar');
        $this->load->view('dokument/doc');
        $this->load->view('mapping/map');
        $this->load->view('listpengajar/list');
        $this->load->view('footer');

    }
    public function list_mahasiswa(){
        $this->load->view('header');
        $this->load->view('sidebar');
        $data['data']=$this->chart_model->siswa();
        $this->load->view('tabel_siswa/mahasiswa',$data);
        $this->load->view('morris/trafficbar');
    }
    public function chart_data()
    {
        $data = $this->chart_model->chart_database();
        echo json_encode($data);
        
    }
    public function galery()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('login/galery');
        $this->load->view('footer');
    }
    public function login()
    {
        $this->load->view('login/log');
    }
    public function calendar()
    {
        $this->load->view('header');
        $this->load->view('sidebar');
        $this->load->view('calendar');
        $this->load->view('footer');
    }
    public function navi()
    {
        $this->load->view('navigation/navigation');
    }
    public function reset()
    {
        $this->load->view('login/reset_password');
    }
    public function in()
    {
        $this->load->view('login/index');
    }
    public function logout()
    {
        $this->load->view('login/logout');
    }
    public function daftar()
    {
        $this->load->view('login/daftar');
    }
    public function kelas_jaringan()
    {
        $this->load->view('kelas/header');
        $this->load->view('kelas/sidebar');
        $this->load->view('kelas/Kelas_Jaringan');
        $this->load->view('footer');;
    }
    public function test_db()
    {
        $this->load->model('login/test_db');
        $data = $this->test_db->test_db()->result();

        print-r ($data);
    }
    public function login_aksi(){
        $user = $this->input->post('username',true);
        $pass =  md5($this->input->post('password',true));

        //rule validasi
        $this->validate->set_rules('username','username','required');
        $this->validate->set_rules('password','password','required');

        if($this->validate->run() !=FALSE){
            $where = array(
            'username' => $user,
            'password' => $pass
            );

            $ceklogin = $this->signin->cek_login($where)->num_rows();

            if($ceklogin > 0){
                $sess_data = array(
                    'username' => $user,
                    'login' => 'OK'
                );
                $this->session->set_userdata($sess_data);

                redirect(base_url('index'));
            }else{
                redirect(base_url('login'));
            }
        }else{
            $this->load->view('login/signin');
        }
    }
    
     

}

?>