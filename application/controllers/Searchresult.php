<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'core' . DS . 'Site_Controller.php');


class Searchresult extends Site_Controller {

    public function index(){
        $searchword = $this->input->get('searchword');

        		$viewdata['title'] = 'Chip.az | CHIP Azərbaycan' ;
        		$viewdata['description'] = 'CHIP Onlayn texnologiya həvəskarlarının və hər kateqoriyadan kompüter istifadəçisinin ən az bir dəfə mütləq uğradığı, məlumat aldığı və informasiya mübadiləsində olduğu bir ünsiyyət mühitidir.';

        $this->load->model('Newsmodel');
        $viewdata['searchres'] = $this->Newsmodel->search_result($searchword);
         $viewdata['searchword'] = $searchword;
        $this->load->view(Svw.'Searchresult',array_merge($viewdata,$this->_data));
    }


    public function search_result($searchword){

    }

}
