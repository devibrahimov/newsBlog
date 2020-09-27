<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Model{

    public function  insert_data($table,$data=[]){
        return $this->db->insert($table,$data);
    }

    public function get_data($table){
        return $this->db->order_by('id','DESC')->get($table)->result_array();
    }

    public function get_subscribe($id){
        return $this->db->where('id',$id)->order_by('id','DESC')->get('chipsubscribe')->row_array();
    }

    public function get_valyuta(){
        return $this->db->where('id','5')->get('valyuta')->row_array();
    }
    


    // FESTIVAL 

    public function get_companies($catid){
        return $this->db->where('company_catid',$catid)->get('companies')->result_array();
    }

    public function get_company($id){
        return $this->db->where('id',$id)->get('companies')->row_array();
    }


    public function  trash_juri($id){
        return $this->db->where('id',$id)->delete('juri');
    }




}
