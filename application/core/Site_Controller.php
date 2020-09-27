<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site_Controller extends MY_Controller {
	public function __construct(){
		parent::__construct();

		$dil =  $this->session->userdata('lang');
		if (!$dil) {
			$dil =  $this->session->set_userdata('lang','az');
		}
		writeipfile( getIp());
		// User ip functions
 
			$this->load->model('CategoryModel');
			$this->load->model('Newsmodel');
			$this->load->model('Site_setting');
			$this->_data = [];
			$this->_data['cat_name']= $this->CategoryModel->get_cat_name();
			$this->_data['parentcats']  = $this->CategoryModel->get_parrent_catagories(); 
			$this->_data['contact'] = $this->Site_setting->get_row_data();
			$this->_data['footer_news']  = $this->Newsmodel->get_footer_news();
				 
		}


}
