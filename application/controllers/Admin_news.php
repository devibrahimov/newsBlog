<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'core' . DS . 'Admin_Controller.php');

class Admin_news extends Admin_Controller{
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('admin')){
            redirect('login');
        }
      // $viewdata['adminuser'] = $this->session->admin;

    }


 public function addnews(){
  $this->load->model('Newsmodel');
    $formdata = array (
         'catid' =>post('catid'),
         'az_title'=>post('az_title'),
         'azkeywords'=>post('azkeywords'),
         'rukeywords'=>post('rukeywords'),
         'az_text'=>post('az_text'),
         'ru_title'=>post('ru_title'),
         'ru_text'=>post('ru_text'),
         'created_by'=>post('created_by'),
        'az_slug' => azlink( post('az_title') ),
         'ru_slug'=>rulink( post('ru_title') ),
    );

    $formdata['image'] = imageupload('news','image',$formdata,azlink( post('az_title') ) );
    if (!$formdata['image']) {
      flash('red','warning'," Şekil yüklənərkən xeta bashverdi.");
      back();
   }else{
    $formdata['created'] = date('Y-m-d G:i');
    $res = $this->Newsmodel->insert_data($formdata);
     if (!$res) {
      $this->session->set_userdata(array(
        'newsdata' => $formdata
      ));
      back();
     }else{
       if( $this->session->userdata('newsdata')){
        $this->session->unset_userdata('newsdata');
       }
      flash('green','check'," Xəbər uğurla Yazıldı.");
      back();
     }
    }


 }

 public function updatenews($id){
  $this->load->model('Newsmodel');

  $formdata = array (
    'catid' =>post('catid'),
    'az_title'=>post('az_title'),
    // 'azkeywords'=>post('azkeywords'),
    // 'rukeywords'=>post('rukeywords'),
    'az_text'=>post('az_text'),
    'ru_title'=>post('ru_title'),
    'ru_text'=>post('ru_text'),
    'created_by'=>post('created_by'),
    'az_slug'=>azlink( post('az_title') ),
    'ru_slug'=>rulink( post('ru_title') ),
  );

  $formdata['image'] = imageupload('news','image',$formdata,azlink(post('az_title')) );
    if ($formdata['image'] == false){
      $fdata = array(
        'catid' =>post('catid'),
        'az_title'=>post('az_title'),
        // 'azkeywords'=>post('azkeywords'),
        // 'rukeywords'=>post('rukeywords'),
        'az_text'=>post('az_text'),
        'ru_title'=>post('ru_title'),
        'ru_text'=>post('ru_text'),
        'created_by'=>post('created_by'),
        'az_slug'=>azlink( post('az_title') ),
        'ru_slug'=>rulink( post('ru_title') ),
      );

      $res = $this->Newsmodel->update_data($id,$fdata);
      if (!$res) {
        $this->session->set_userdata(array(
          'newsdata' => $fdata
        ));
        back();
       }else{
         if( $this->session->userdata('newsdata')){
          $this->session->unset_userdata('newsdata');
         }
        flash('green','check'," Xəbər uğurla Yeniləndi.");
        back();
       }
    }
        if ($formdata['image']){

      if (!$formdata['image'] ) {
         flash('red','warning'," Şekil yüklənərkən xeta bashverdi.");
         back();
      }
      $res = $this->Newsmodel->update_data($id,$formdata);
      if (!$res) {
        $this->session->set_userdata(array(
          'newsdata' => $formdata
        ));
        back();
       }else{
         if( $this->session->userdata('newsdata') ){
             $this->session->unset_userdata('newsdata');
         }
        flash('green','check'," Xəbər uğurla Yazıldı.");
        back();
       }
    }
 }

 public function publish_news($id){

  $publish = $this->Newsmodel->publish($id);
  if($publish){
    flash('green','check'," Xəbər uğurla Yayınlandı.");
    back();
  }else {
    flash('red','close'," Xəbər yayımlana bilmədi.Xahiş edirik təkrar yoxlayın.");
    back();
  }

  }
  public function unpublish($id){

    $publish = $this->Newsmodel->unpublish($id);
    if($publish){
      flash('green','check'," Xəbər uğurla Yayından Qaldırıldı.");
      back();
    }else {
      flash('red','close'," Xəbər yayımdan qaldırıla bilmədi.Xahiş edirik təkrar yoxlayın.");
      back();
    }

    }
    public function totrash($id){

      $publish = $this->Newsmodel->newstotrash($id);
      if($publish){
        flash('green','trash'," Xəbər uğurla Zibil qabına atıldı.");
        back();
      }else {
        flash('red','close'," Xəbər yayımdan qaldırıla bilmədi.Xahiş edirik təkrar yoxlayın.");
        back();
      }

      }


}//end Admin
