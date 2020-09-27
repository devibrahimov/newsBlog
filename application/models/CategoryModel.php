<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CategoryModel extends CI_Model{

    public function  get_parrent_catagories(){
        return $this->db->where(['state !='=>-2,'parent_id'=>0])->get('categories')->result_array();
    }
    public function get_child_categories($pid){
        return $this->db->where(['state !='=>'-2','parent_id !='=>$pid])->get('categories')->result_array();
    }



public function get_categories(){
    return $this->db->where(['state !='=>'-2','parent_id !='=>'0'])->get('categories')->result_array();
}

public function  get_cat_name(){
    $res = $this->db->get('categories')->result_array();
foreach ($res as $l  ) {
    $a[ $l['id'] ] = $l['az_name'] ;
}
return isset($a) ? $a : [] ;
}


public function get_all_categories(){

    return $this->db->where('state !=',-2)->get('categories')->result_array();
}

public function get_company_categories(){

    return $this->db->get('companycategories')->result_array();
}

public function trash_company_categories($id){
    return $this->db->where('id',$id)->delete('companycategories');
}



public function get_fornews_categories(){

    return $this->db->where('childcat !=',1)->where('state !=',-2)->get('categories')->result_array();
}


public function get_athome_categories(){
    return $this->db->where('athome',1)->get('categories')->result_array();
}




public function trashcategories($id){
    $data = ['state' => '-2'];
    $res = $this->db->where('id',$id)->update('categories',$data);
    if(!$res){
        alert('red','warning'," Katyegoriya zibil qabına atıla bilmədi.Xahiş edirik təkrar yoxlayın.");
        back();
    }
    $delchildcat = $this->db->where('parent_id',$id)->update('categories',$data);
    if(!$delchildcat){
        flash('red','warning'," Katyegoriya zibil qabına atıla bilmədi.Xahiş edirik təkrar yoxlayın.");
        back();
    }
    else{
    flash('green','check'," Katyegoriya zibil qabına atıldı. ");
    back();}
}


public function get_catagory_row($id){
return $this->db->where('id',$id)->get('categories')->row_array();
}

public function thiscat_sub_categories($pid){
return $this->db->where(['state !='=>'-2','parent_id'=>$pid])->get('categories')->result_array();
}
  }//end class
