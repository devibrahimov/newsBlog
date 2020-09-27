<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'core' . DS . 'Site_Controller.php');


class Site_request extends Site_Controller {
	public function __construct(){
		parent::__construct();
        $this->load->model('Db_login');
  $this->load->model('Database');
        }//end consturct

        public function uniquecontroller($email){

            $res =$this->Db_login->unique_controll($email);
             if ($res == 1) {  return 0 ; }
             else{ return 1 ; }
        }

    public function signup(){

        $user_data = [
            'name'=>post('n'),
            'last_name'=>post('l'),
            'wasborn'=>post('w'),
            'email'=>post('e'),
            'password' =>  password_hash( post('p'),PASSWORD_DEFAULT,['cost'=>7] ),
        ];
       // print_r($user_data);die;
    $unique = $this->uniquecontroller($user_data['email'] );
//facebook qeydiyyati
    if($unique==0){
        back();
    }
    else{
        $this->Db_login->insert_data($user_data);
        $usersessdata = [
            'name'=>post('n'),
            'last_name'=>post('l'),
            'wasborn'=>post('w'),
            'email'=>post('e'),
        ];
        $this->session->set_userdata(['clientuser'=>$usersessdata]);

        redirect('site');
    }
    }

    public function login(){
        $email=post('email');
        $password= post('password') ;
        $result = $this->Db_login->user_login($email,$password);
        if($result==true){
        $this->session->set_userdata(['clientuser'=>$result]);
        redirect('site');
        }
        echo 'asdda';
    }

    public function logout(){
        $this->session->unset_userdata('clientuser' );
        redirect('site');
    }


###################################################
#        	ABUNELIK
############################################


public function subscribeChip(){
$name = post('name');
$lastname = post('lastname');
$email = post('email');
$phone = post('phone');
$adress = post('adress');


$data=[
	'name' =>post('name'),
	'lastname' =>post('lastname'),
	'email' =>post('email'),
	'phone' => post('phone'),
	'adress' =>post('adress'),
	'comment' =>post('comment'),
];

$response = $this->Database->insert_data('chipsubscribe',$data);
if($response){
	flashSweetAlert('ABUNƏLİYİNİZ UĞURLA HƏYATA KEÇİRİLDİ !','Ən qısa zamanda sizə geri dönüş edəcəyik!');
	back();
}else{
	flashSweetAlert('QEYDİYYAT ZAMANI XƏTA BAŞ VERDİ','XAHİŞ EDİRİK YENİDƏN TƏKRAR EDƏSİNİZ');
	back();
}

}//end subscribeChip

}//end class Site_request
