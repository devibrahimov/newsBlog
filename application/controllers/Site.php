<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'core' . DS . 'Site_Controller.php');


class Site extends Site_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('CategoryModel');
		$this->load->model('Newsmodel');
		$this->load->model('Database');

		}
		public function changelang($lang){
			$this->session->set_userdata('lang',$lang);
			back();
		}

	#______________________________________
	#  index
	#______________________________________

	public function index()
	{
		  $viewdata['valyuta']  = $this->Database->get_valyuta(); //valyuta mezennesi.cagirildigi yer -> helper/bots_helper
			$viewdata['slidernews']  = $this->Newsmodel->get_last9_news();//slider xeberlerin cagrilib gorsenmesi
			//$viewdata['subslidernews']  = $this->Newsmodel->get_last3_news();//slider xeberlerin cagrilib gorsenmesi
			$viewdata['athomecategories']  = $this->Newsmodel->athomecategories();
			$homenews = $this->Newsmodel->homenews();
			$viewdata['homenews'] = $homenews->result_array();
			$viewdata['slideronenews']  = $this->Newsmodel->get_random_news();//slider xeberlerin cagrilib gorsenmesi
			$viewdata['page'] = 'CHİP.AZ texnologiya xəbərləri saytıdır ';
			$viewdata['title'] = 'CHİP.AZ texnologiya sahəsində Azərbaycanda yerli informasiya xəbər saytıdır.' ;
			$viewdata['description'] = 'Chip Azərbaycanın ən yaxşı texnologiya xəbər saytıdır.Azərbaycan oxucu kütləsini Texnologiya sahəsinin inkişafında gedən yenilkilərdən xəbərdar etməkdir.';

		$this->load->view(Svw.'home',array_merge($viewdata,$this->_data));
	}


	#______________________________________
	#  newscategory
	#______________________________________
	public function newscategory($link)
	{
		$link= explode('-',$link,'2');

	 	 $id=$link[0];
		 $slug=$link[1];

		$viewdata['subcats']  = $this->CategoryModel->thiscat_sub_categories($id);
		$viewdata['cat']  = $this->CategoryModel->get_catagory_row($id);
		$viewdata['news'] =  $this->Newsmodel->thiscat_news($id);
		$viewdata['page'] = $viewdata['cat']['az_name'];
		$viewdata['title'] = 'Chip.az |'.$viewdata['cat']['az_name'];
		$viewdata['description'] = 'CHİP sayti '.$viewdata['cat']['az_name'].' xəbər kategoriyasinda Dünyada və Azərbaycanda  baş vermiş günün '.$viewdata['cat']['az_name'].' xəbərlərini sizinlə paylaşır';

		$this->load->view(Svw.'newscategory',array_merge($viewdata,$this->_data));
	}

	#______________________________________
	#   newsdetail
	#______________________________________
	public function newsdetail(string $link)
	{
		$link= explode('-',$link,'2');

		$id   = $link[0];
		$slug = $link[1];


		$viewdata['news'] = $this->Newsmodel->singlenews($id);
		$viewdata['page'] =$viewdata['news']['az_title']  ;
		$viewdata['title'] = 'Chip.az |'.$viewdata['news']['az_title']  ;
		$viewdata['description'] = 'CHIP sayti xeber verir ki '.$viewdata['news']['az_title'] ;
		$viewdata['keywords'] = $viewdata['news']['azkeywords'] ;

		$this->load->view(Svw.'singlenews',array_merge($viewdata,$this->_data));

	}

	#______________________________________
	#       chiptv
	#______________________________________
	public function chiptv()
	{
		$viewdata['page'] = 'chiptv' ;
				$viewdata['title'] = 'Chip.az | CHIP Azərbaycan' ;
				$viewdata['description'] = 'CHIP sayti ucun aciqlama ';

		$viewdata['news'] = 'we';
		$this->load->view(Svw.'chiptv',array_merge($viewdata,$this->_data));
	}

	#______________________________________
	#      products
	#______________________________________
	public function products()
	{
			$viewdata['page'] ='Mağaza';
		$viewdata['news'] = 'we';
		$this->load->view(Svw.'chiptv',array_merge($viewdata,$this->_data));
	}

	#______________________________________
	#      productdetail
	#______________________________________
	public function productdetail()
	{

	$this->load->view(Svw.'welcome_message');
	}

	public function chipabune(){
		$viewdata['a']='a';
			$viewdata['page'] = 'CHİP Abunə';
			$viewdata['title'] = 'Chip.az | CHIP Azərbaycan jurnalina abunəlik' ;
			$viewdata['description'] = 'İlk sayı çapdan çıxan jurnal rübdə 1 dəfə olmaqla ildə 4 dəfə oxucularının görüşünə gələcək. Jurnal artıq bir çox şirkətlərin, hotellərin,eyni zamanda orta və ali təhsil müəssisələrinin abunəliyini qazanmışdır.';
		$this->load->view(Svw.'chipabune',array_merge($viewdata,$this->_data));
	}
	#______________________________________
	#      about
	#______________________________________
	public function about()
	{
		$viewdata['news'] ='';
		$viewdata['page'] = 'Haqqımızda';
				$viewdata['title'] = 'Chip.az | CHIP Azərbaycan' ;
				$viewdata['description'] = 'CHIP Online oxşar texnologiya saytlarından fərqli edən ən mühüm xüsusiyyəti peşəkar bir yazıçı - redaktor heyətinə malik olması.';

		$this->load->view(Svw.'about',array_merge($viewdata,$this->_data) );
	}

	#______________________________________
	#   contact
	#______________________________________
	public function contact()
	{
		$viewdata['news'] ='';
		$viewdata['page'] = 'Bizimlə Əlaqə';
				$viewdata['title'] = 'Chip.az | CHIP Azərbaycan' ;
				$viewdata['description'] = 'CHIP komandası ilə ilə Əlaqə saxlayaraqirad və təkliflərinizi bildirə bilərsiniz ';

		$this->load->view(Svw.'contact',array_merge($viewdata,$this->_data));
	}


	public function register()
	{
		 $viewdata['news'] = ' ';
		 $viewdata['page'] = 'Qeydiyyat';
		 		$viewdata['title'] = 'Chip.az | CHIP Qeydiyyat' ;
		 		$viewdata['description'] = 'CHIP sayti İstifadəçilərinə Qatılın.Texnoloji yenililərdən Xəbərdar olun ';

		$this->load->view(Svw.'register',array_merge($viewdata,$this->_data));
	}



public function error404(){
			$viewdata['news'] ='';
			$viewdata['page'] = 'Haqqımızda';
			$viewdata['title'] = 'Chip.az | CHIP Azərbaycan' ;
			$viewdata['description'] = 'CHIP Online oxşar texnologiya saytlarından fərqli edən ən mühüm xüsusiyyəti peşəkar bir yazıçı - redaktor heyətinə malik olması.';

	$this->load->view(Svw.'error404',array_merge($viewdata,$this->_data));
}

}//end class
