<?php

class Site_setting extends CI_Model{
    public function  insert_data($data=[]){
        return $this->db
        ->insert('site_setting',$data);
    }

    public function  update_data( $data=[]){
        return $this->db
        ->where('id','1')
        ->update('site_setting',$data);
    }

    public function get_row_data(){
        return $this->db->where('id','1')->get('site_setting')->row_array();
    }
}
