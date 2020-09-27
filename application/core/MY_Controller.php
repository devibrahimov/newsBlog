<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __constuct()
	{
		parent::__constuct();

		$dil = $this->session->userdata('lang');

		$this->lang->load($dil,$dil);

		 
	}
}
