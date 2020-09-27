<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'core' . DS . 'Admin_Controller.php');

class Login extends Admin_Controller{
public function __consturct(){
    parent::__construct();
     // $db = $this->Db_login ;
}


public function index(){
    $this->load->view('Login');
}
 
public function userlogin(){
    $this->load->model('Db_login');
    $email   = $this->input->post('email');
    $passwd = $this->input->post('passwd');

     $result = $this->Db_login->data_control( $email, $passwd );
    // echo  password_hash('admin',PASSWORD_DEFAULT,['cost'=>5] );
     
      //var_dump($result);die;

     if($result==false){
        $this->session->set_flashdata('error','<p class="text-danger "><i class="fa fas-danger"></i>Xetali ad veya password<p>') ;
        redirect('login');
      }

        $userdata = $this->Db_login->getuserdata($email);

        $exist = array(
            'id' => $userdata['id'],
            'name' => $userdata['name'],
            'username' => $userdata['username'],
            'email' => $userdata['email'],
            'state' => $userdata['state'],
        );
        $this->session->set_userdata(array(
            'admin' => $exist
        ));

        $userstate = $this->session->admin['state'];


    redirect('admin');

    }


    function logout(){
        $this->session->sess_destroy();
        redirect('login');
      }

}