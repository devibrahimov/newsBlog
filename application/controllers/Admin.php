<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'core' . DS . 'Admin_Controller.php');

class Admin extends Admin_Controller{
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('admin')){
            redirect('login');
        }
        $viewdata['adminuser'] = $this->session->admin;
        $this->load->model('CategoryModel');
        $this->load->model('Newsmodel');
        $this->load->model('Database');
    }


	public function index()
	{   $viewdata['type'] = '1';
      $viewdata['pageheader'] = 'Home';
    $viewdata['news'] = $this->Newsmodel->get_count_news( );
$viewdata['share_count'] = $this->Newsmodel->get_count_sharenews();
$viewdata['trash_count'] = $this->Newsmodel->get_count_trash();
		$this->load->view(Avw.'home',array_merge($viewdata,$this->_data));
    }//end index



   public function categories()
	  {
        $viewdata['type'] = '2';
          $viewdata['pageheader'] = 'Categories';
        $g = $this->CategoryModel->get_parrent_catagories();
        $viewdata['cats'] = $this->CategoryModel->get_all_categories($g);
        $viewdata['categories'] = $this->CategoryModel->get_all_categories();
         //print_r($viewdata['cats'] );exit;
        $this->load->view(Avw.'categories',array_merge($viewdata,$this->_data));

    } //end categories


    public function athome()
	{
        $viewdata['type'] = '8';
          $viewdata['pageheader'] = 'at home';
        $viewdata['cats'] = $this->CategoryModel->get_categories();
        $viewdata['catsathome'] = $this->CategoryModel->get_athome_categories();
         //print_r($viewdata['cats'] );exit;
        $this->load->view(Avw.'athome',$viewdata);
    } //end categories

     public function newspost()
    {   $viewdata['type'] = '3';
      $viewdata['pageheader'] = 'News Post';
        $viewdata['cats'] = $this->CategoryModel->get_fornews_categories();
		$this->load->view(Avw.'news',array_merge($viewdata,$this->_data) );
    }//end newspost

    public function newslist()
    {   $viewdata['type'] = '3';
         $viewdata['pageheader'] = 'News List';
        $this->load->library('pagination');
        $config["base_url"] = base_url('Admin/newslist');
        $config["total_rows"]=$this->Newsmodel->paginationNewsCountAll();
        $config["uri_segment"] =3;
        $config["per_page"] = 10 ;

        $config["use_page_number"] = TRUE ;
        $config["full_tag_open"] = '<ul class="pagination pagination-sm no-margin pull-right">' ;
        $config["full_tag_close"] = '</ul>' ;
        $config["fist_tag_open"] ='<li> ' ; $config["fist_tag_close"] = ' </li>' ;
        $config["last_tag_open"] ='<li> ' ; $config["last_tag_close"] = ' ></li>' ;
        $config["first_link"] = '&laquo;' ;
        $config["next_tag_open"] ='<li> ' ; $config["next_tag_close"] = ' </li>' ;
        $config["prev_tag_open"] ='<li> ' ; $config["prev_tag_close"] = ' </li>' ;
        $config["last_link"] = '&raquo;' ;
        $config["cur_tag_open"] = ' <li class="active"> ' ; $config["cur_tag_close"] = ' </li>' ;
        $config["num_tag_open"] ='<li> ' ;                  $config["num_tag_close"] = ' </li>' ;

        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $viewdata['news'] = $this->Newsmodel->fetch_details($config["per_page"],$page);
        $viewdata['NewsPaginationLinks'] =$this->pagination->create_links();

        $viewdata['share_count'] = $this->Newsmodel->get_count_sharenews();
        $viewdata['trash_count'] = $this->Newsmodel->get_count_trash();
		$this->load->view(Avw.'newslist',array_merge($viewdata,$this->_data));
    }//end newslist


    public function viewpage($id){
      $viewdata['pageheader'] = 'viewpage';
      $viewdata['type'] = '3';
      $viewdata['cats'] = $this->CategoryModel->get_all_categories();
      $viewdata['news'] = $this->Newsmodel->singlenews($id);
      $this->load->view(Avw.'viewpage',array_merge($viewdata,$this->_data));
    }

    public function newstrash(){
       $viewdata['pageheader'] = 'newstrash';
       $viewdata['type'] = '3';
       $viewdata['trashnews'] = $this->Newsmodel->get_trash_news();
       $this->load->view(Avw.'newstrash', array_merge($viewdata,$this->_data));
    }



    public function chipSubscribes(){
      $viewdata['pageheader'] = 'Chip Abunələri';
      $viewdata['type'] = 'abune';
      $viewdata['sbscribes'] = $this->Database->get_data('chipsubscribe');
      $this->load->view(Avw.'subscribe', array_merge($viewdata,$this->_data));
    }

    public function singlesubscribe($id){ 
      $viewdata['pageheader'] = 'Chip Abunələri';
      $viewdata['type'] = 'abune';
      $viewdata['sbscribes'] = $this->Database->get_subscribe($id);
      $this->db->set('see',1)->where('see',0)->where('id',$id)->update('chipsubscribe');
      $this->load->view(Avw.'singlesubscribe', array_merge($viewdata,$this->_data));
    }

    public function addControl(){
        $viewdata['type'] = 'addversting';
         $viewdata['pageheader'] = 'Reklamların İdarəsi';
      $this->load->view(Avw.'addControl', $viewdata);
    }

    public function users()
	{   $viewdata['type'] = '4';
     $viewdata['pageheader'] = 'users';
    $this->load->model('Admin_users');
    $viewdata['users'] = $this->Admin_users->get_site_users();
		$this->load->view(Avw.'siteusers', $viewdata);
    }//end adminuser


    public function adminusers($uid = NULL)
    {   $viewdata['type'] = '5';
         $viewdata['pageheader'] = 'Admin_users';
        $this->load->model('Admin_users');
        $viewdata['users'] = $this->Admin_users->get_users();
       $viewdata['user'] = $this->Admin_users->get_user_row($uid);
       if($uid==NULL){
         	$this->load->view(Avw.'adminusers', $viewdata);
       }else{
          	$this->load->view(Avw.'editpages/editadminusers', $viewdata);
       }

    }//end adminuser

    public function setting(){
        $viewdata['type'] = '7';
        $this->load->model('Site_setting');
        $viewdata['data'] = $this->Site_setting->get_row_data();
		    $this->load->view(Avw.'setting',$viewdata );
    }

    public function festival(){
      $viewdata['type'] = '9';
      $viewdata['pageheader'] = 'Festival';
      $viewdata['categories'] = $this->CategoryModel->get_company_categories();
      $this->load->view(Avw.'festival/festival',$viewdata );
    }

    
    public function festivaladdcategory(){
      $viewdata['type'] = '9';
      $viewdata['pageheader'] = 'Festival';
      $viewdata['categories'] = $this->CategoryModel->get_company_categories();
      $this->load->view(Avw.'festival/addcategory',$viewdata );
    }

    
    public function signedcompanies($id){ 
      $viewdata['type'] = '9';
      $viewdata['pageheader'] = 'Festival';
      $viewdata['companies'] = $this->Database->get_companies($id); 
      $viewdata['categories'] = $this->CategoryModel->get_company_categories();
      $this->load->view(Avw.'festival/signedcompanies', array_merge($viewdata,$this->_data));
    }

    public function  singlecompany($id){ 
      $viewdata['type'] = '9';
      $viewdata['pageheader'] = 'Festival';
      $viewdata['company'] = $this->Database->get_company($id);  
      $this->load->view(Avw.'festival/singlecompany', array_merge($viewdata,$this->_data));
    }
    

    public function  munsifler(){ 
      $viewdata['type'] = '9';
      $viewdata['pageheader'] = 'Festival';
      $viewdata['juris'] = $this->Database->get_data('juri');  
      $this->load->view(Avw.'festival/munsifler', array_merge($viewdata,$this->_data));
    }



    }//end Admin
