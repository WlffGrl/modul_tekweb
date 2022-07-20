<?php 
class Test extends CI_Controller { 
    public function index() {
        $this->load->view('test');
    }
    public function profil(){
        $this->load->helper("url"); 
        $this->load->view("profile"); 
    }
    public function dashboard(){
        $this->load->helper("url"); 
        $this->load->view("dashboard");
    }
    public function masuk() {
        $data['username'] = $this->input->post('username');
        $this->load->view('hasil', $data);
    }
}
?>