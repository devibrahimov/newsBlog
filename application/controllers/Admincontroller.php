<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'core' . DS . 'Admin_Controller.php');

class Admincontroller extends Admin_Controller{
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('admin')){
            redirect('login');
        }
        $viewdata['adminuser'] = $this->session->admin;
        $this->load->model('Admin_users');
    }

/**
 * =======================
 * || ADMIN USER PAGE
 * =======================
 */

public function add_adminuser(){
    $data = [
        'name' => post('name'),
        'username' => post('username'),
        'email' => post('email'),
        'passwd' => password_hash( post('password'),PASSWORD_DEFAULT,['cost'=>5] ),
        'state' => post('state'),
    ];
  //  $state = post('state');
    $result = $this->Admin_users->insert_data('admin_users',$data);
    if(!$result){

        alert('red','warning'," $state Əlavə edilə Bilmədi.Xahiş edirik təkrar yoxlayın.");
        redirect('Admin/adminusers');
    }
    flash('green','check'," $state Uğurla əlavə edildi.");
    back();
}

public function editpage($id){
    $viewdata['type'] = '3';
    $viewdata['pageheader'] = 'Edit Post';
    $viewdata['cats'] = $this->CategoryModel->get_fornews_categories();
    $viewdata['news'] = $this->Newsmodel->singlenews($id);
    $this->load->view(Avw.'editpages/editnews' ,array_merge($viewdata,$this->_data));
}

public function edit_adminuser($id){
    if( post('password') != NULL){
        $data = [
            'name' => post('name'),
            'username' => post('username'),
            'email' => post('email'),
            'passwd' =>  password_hash( post('password'),PASSWORD_DEFAULT,['cost'=>5] ),
            'state' => post('state'),
        ];
        $state = post('state');
        $this->Admin_users->update_data($id,$data);
    }
    if( post('password') ==  NULL){
        $data = [
            'name' => post('name'),
            'username' => post('username'),
            'email' => post('email'),
            'state' => post('state'),
        ];
        $state = post('state');
        $this->Admin_users->update_data($id,$data);
    }
   $name =  post('name');

    flash('green','check',"$name adlı isdifadəçinin  məlumatları uğurla deyişirildi.");
    back();
}

public function deleteuser($id){
    $result = $this->Admin_users->delete_data($id);
    if(!$result ){
        flash('red','warning '," isdifadəçi silinərkən Xəta baş verdi. Xahiş edirik Təkrar yoxlayın.");
        back();
    }
    flash('green','check'," isdifadəçi uğurla silindi.");
    back();
}
//_____________END ADMIN PAGE_________________________________

public function add_sitesetting($id){
    $this->load->model('Site_setting');
    $data =[
        'email'=> post('email'),
        'phone'=>post('phone'),
        'phoneOffice'=>post('phoneOffice'),
        'adress'=>post('adress'),
        'facebook'=>post('facebook'),
        'instagram'=>post('instagram'),
        'youtube'=>post('youtube'),
        'linkedin'=>post('linkedin')
    ];
    $this->Site_setting->update_data( $data);
    flash('green','check',"Melumatlar yenilendi.");
    back();
    // // $data['logo'] = uploadlogo('logo');
    // //  $data['icon'] = uploadicon('icon');
    // if (!$data['logo'] || !$data['icon'] ){
    //     $d  =[
    //         'email'=> post('email'),
    //         'phone'=>post('phone'),
    //         'phoneOffice'=>post('phoneOffice'),
    //         'adress'=>post('adress'),
    //         'facebook'=>post('facebook'),
    //         'instagram'=>post('instagram'),
    //         'youtube'=>post('youtube'),
    //         'linkedin'=>post('linkedin')
    //     ];
    // $this->Site_setting->update_data( $d);
    // flash('yellow','check',"Melumatlar yenilendi.");
    // back();
    // }
    // else{

    // }

}



//_____________JURI PAGE method _________________________________
public function addjuri(){
    $this->load->model('Database');
    $config['upload_path'] =  FCPATH."/assets/uploads/juri/";
    $config['allowed_types']= 'jpg|jpeg|png'; 

    $this->upload->initialize($config);

    if( !$this->upload->do_upload('imagename')) {
            $error = array('error' => $this->upload->display_errors());
             $xeta = $error['error'];
            flash('red','warning',"Xəta:$xeta");
            back();
    }
    else {
        $image = $this->upload->data('file_name');
        $formdata =[
        'name'=> post('name'),
        'job'=>  post('job'),
        'img'=>  $image ] ;
        $res = $this->Database->insert_data('juri',$formdata);
        back();
    }//end else
     
    }//addjuri
    public function trash_juri($id){
        $this->load->model('Database');
        $this->Database->trash_juri($id);
        back();
    }
}//end
