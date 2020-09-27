<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller{

  public function __construct(){
      parent::__construct();
      $this->load->model('CategoryModel');
      $this->load->model('Newsmodel');

  }

  public function index(){

    $this->load->helper('xml');
    $viewdata['pcat'] = $this->CategoryModel->get_categories();

    $viewdata['news'] = $this->Newsmodel->get_sitemap_news();

    header("Content-Type: text/xml;charset=utf-8");
    $this->load->view('sitemap',$viewdata);
  }

public function robots(){
  echo 'User-agent: * <br>

  Disallow:/admin <br>

  Disallow:/admincontroller
';
}

}?>
