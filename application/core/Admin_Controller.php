<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {  
	public function __construct(){
		parent::__construct();
		$this->session->userdata('lang','az');
		$this->load->model('CategoryModel');
		$this->load->model('Admin_users');
		$this->load->model('Newsmodel');
		$this->_data = [];
		$this->_data['cat_name']= $this->CategoryModel->get_cat_name() ;
		$this->_data['user_name']= $this->Admin_users->get_user_name();
		}
		



}
