<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bots extends MY_Controller{
  public function __construct(){
    parent::__construct();

  }
  public function index(){
    $sitelink = 'https://www.cbar.az';
    $site = file_get_contents($sitelink);
    if(!$site){
    return ' ';
    }

    preg_match('@<div class="relize_item"><span>(.*?) tarixindən etibarən</span><ul><li>(.*?)</li><li>(.*?)</li><li>(.*?)</li><li>(.*?)</li></ul></div>@si',$site,$data);
    array_shift($data) ;
    array_shift($data) ;
   // return $data;

    $sqldata =[
      'usd' => $data[0],
      'eur' => $data[1],
      'rub' => $data[2],
      'try' => $data[3],
    ];
    $ci = get_instance();
  return  $this->db->where('id',5)->update('valyuta',$sqldata) ;
  }
  public function saat(){
    echo date('G-i');
  }
}

 ?>
