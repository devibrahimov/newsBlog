<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Db_login extends CI_Model{



    public function  data_control($email,$password){
		$res = $this->db 
		->where(['email'=> $email,'block'=>0])
		->get('admin_users')
		->row_array();
		// return 	$res;
		return password_verify($password, $res['passwd'] );  
		}

    public function  getuserdata($email){
        $res = $this->db
            ->where(['email'=> $email,'block'=>0])
            ->get('admin_users')
            ->row_array();
         return 	$res;
        //return password_verify($password, $res['passwd'] );
    }
		

		// USER REGISTER SIGN UP
    public function insert_data($data ){
		 
        return $this->db->insert('client_users',$data);
		}
		 
		public function unique_controll($email){
			$res = $this->db
			->select('email')
			->where( 'email',$email )
			->get('client_users')
			->row_array();
			  if( $res==true){return 1 ;}else{return 0 ;} 
			}
			
			public function  user_login($email,$password){
				$res = $this->db 
				->where( 'email', $email )
				->get('client_users')
				->row_array();
				return 	$res;
				return password_verify($password, $res['passwd'] );  
				}
				








} //end Db_login controller