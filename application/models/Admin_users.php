<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_users extends CI_Model{

    public function  insert_data($table,$data=[]){
        return $this->db->insert($table,$data);
    }

    public function  get_users(){
        return $this->db->get('admin_users')->result_array();
    }

    public function  get_user_row($id){
        return $this->db->where('id',$id)->get('admin_users')->row();
    }

    public function  update_data($id,$data=[]){
        return $this->db->where('id',$id)->update('admin_users',$data);
    }

    public function  delete_data($id){
        return $this->db->where('id',$id)->delete('admin_users');
    }

    public function  get_user_name(){
        $res = $this->db->get('admin_users')->result_array();
    foreach ($res as $l  ) {
        $a[ $l['id'] ] = $l['name'] ;
    }
    return isset($a) ? $a : [] ;
    }


     // SITE USERS
     public function  get_site_users(){
         return $this->db->get('client_users')->result_array();
     }
}
