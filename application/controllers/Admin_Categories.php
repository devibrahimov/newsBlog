<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require(APPPATH . 'core' . DS . 'Admin_Controller.php');

class Admin_Categories extends Admin_Controller{
    public function __construct(){
        parent::__construct();
        if(!$this->session->userdata('admin')){
            redirect('login');
        }
        $this->load->model('Database');
    }

public function editcategorypage($id){
    $viewdata['type'] = '2';
    $viewdata['pageheader'] = 'editcategorypage';
    $viewdata['category'] = $this->CategoryModel->get_catagory_row($id);
    $viewdata['cats'] = $this->CategoryModel->get_all_categories();
    $this->load->view(Avw.'editpages/editcategories',array_merge($viewdata,$this->_data));
}
public function updatecategory($id){
    $data = [
        'az_name'     => post('az_cat'),
        'ru_name'     => post('ru_cat'),
        'az_slug'     => azlink(post('az_cat')),
        'ru_slug'     => rulink(post('ru_cat')),
        'parent_id'   => post('pid'),
        'childcat'    => post('childcat')
    ];
    $res =  $this->db->where('id',$id)->update('categories',$data);
    if($res){
        flash('green','check',"Kategoriyada uğurla dəyişiklik edildi.");
         back();
    }

}


    public function addcategory(){
        $data = [
            'az_name'     => post('az_cat'),
            'ru_name'     => post('ru_cat'),
            'az_slug'     => azlink(post('az_cat')),
            'ru_slug'     => rulink(post('ru_cat')),
            'parent_id'   => post('pid'),
            'childcat'    => post('childcat')
        ];
        $this->Database->insert_data('categories',$data);
        flash('green','check',"Kategoriya uğurla  əlavə edildi.");
        back();
    }


    // /////////////////////////////
    // COMPANY FESTIVAL 
    // /////////////////////////////

    public function addcompanycategory(){
        $data = ['name'=> post('categoryname')];
        $this->Database->insert_data('companycategories',$data);
        flash('green','check',"Kategoriya uğurla  əlavə edildi.");
        back();
    }

    public function trash_company_categories($id){
            $this->CategoryModel->trash_company_categories($id);
             back();
        }


public function addathome($id){

    $res =count($this->db->where('athome',1)->get('categories')->result_array());
    if($res >= 5 ){
        alert('danger','warning ',"Xəta baş verdi.AnaSəhidə görsənəcək Kategoriya xeber sayı limitə çatmışdır.Xahiş edirik Kategoriyalardan birini Çıxardın.");
        back();
    }
     $data=['athome'=>1];
    $command = $this->db->where('id',$id)->update('categories',$data);
    if(!$command ){
        flash('red','warning ',"Xəta baş verdi .Xahiş edirik Təkrar yoxlayın.");
        back();
    }
    flash('green','check',"uğurla  əlavə edildi.");
    back();
    }

    public function removefromhome($id){

        $res =count($this->db->where('athome',1)->get('categories')->result_array());
        if($res  <= 4 ){
            alert('danger','warning ',"Xəta baş verdi.AnaSəhidə görsənəcək Kategoriya xeber sayı 4 dən Az olmamalıdır.");
            back();
        }
         $data=['athome'=>0];
        $command = $this->db->where('id',$id)->update('categories',$data);
        if(!$command ){
            flash('red','warning ',"Xəta baş verdi .Xahiş edirik Təkrar yoxlayın.");
            back();
        }
        flash('green','check',"Anasəhifədən uğurla Çıxardıldı.");
        back();
        }
    public function trashcategory($id){
        $this->CategoryModel->trashcategories($id);
    }

}//end Admin
