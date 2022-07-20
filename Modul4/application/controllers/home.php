<?php 
class home extends CI_Controller { 
    public function dashboard2(){
        $this->load->helper("url"); 
        $this->load->view("dashboard2");
    }
    public function masuk() {
        $data['username'] = $this->input->post('username');
        $this->load->view('hasil2', $data);
    }
}
?>