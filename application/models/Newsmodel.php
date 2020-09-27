<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Newsmodel extends CI_Model{

    public function  insert_data($data=[]){
        return $this->db->insert('news_content',$data);
    }

    public function  update_data($id,$data=[]){
        return $this->db->where('id',$id)->update('news_content',$data);
    }


    public function get_random_news(){
      return $this->db->where('active',1)->where('catid',88)->order_by('id', 'DESC')->limit(1)->get('news_content')->row_array();
    }
    public function get_news_list(){
        return $this->db->where('active !=',-2)->order_by('id','DESC')->get('news_content')->result_array();
    }

public function get_sitemap_news(){
    return $this->db->where('active !=',-2)->order_by('id','ASC')->get('news_content')->result_array();
}
    public function get_count_news(){
        return $this->db->count_all('news_content');
    }
    public function get_count_sharenews(){
        return count($this->db->where('active','1')->get('news_content')->result_array());
    }

    public function get_count_trash(){
        return count($this->db->where('active','-2')->get('news_content')->result_array());
    }


    public function publish($id){
        $data = ['active'=>'1','publish_up'=> date('Y-m-d G:i')];
    return  $this->db->where('id',$id)->update('news_content',$data);

    }

    public function unpublish($id){
        $data = ['active'=>'0'];
    return  $this->db->where('id',$id)->update('news_content',$data);

    }

    public function newstotrash($id){
        $data = [ 'active'=>'-2'];
    return  $this->db->where('id',$id)->update('news_content',$data);
    }

    public function get_last9_news(){
       return $this->db->where('active',1)->order_by('id', 'DESC')->limit(9)->get('news_content')->result_array();
    }

    public function get_footer_news(){
        return $this->db->where('active',1)->order_by('id', 'DESC')->limit(12,9)->get('news_content')->result_array();
     }


    public function get_trash_news(){
      return $this->db->where('active','-2')->get('news_content')->result_array();
    }

        public function athomecategories(){
        return  $this->db->select('*')->where('athome',1)->order_by('cat_row_athome','ASC')->get('categories')->result_array();
        }

    public function homenews(){
        $cats =  $this->athomecategories();
        $catscount=count($cats);
        //return $cats;
        $querystring= '';
        foreach ($cats as $c) {

        $querystring = $querystring."(SELECT * FROM `news_content`   where `active` = 1 and `catid` =".$c['id']."  ORDER BY `id` DESC LIMIT 6  ) UNION ".PHP_EOL ;

        }

        $sqlquery = trim( trim($querystring),' UNION' ) ;

        $query = $this->db->query($sqlquery);
        return $query;

    }

    public function thiscat_news($id){
        return $this->db
        ->where('catid',$id)->where('active',1)
        ->order_bY('id','DESC')
        ->get('news_content')->result_array();
    }
    public function thiscat_news_count($id){
        return $this->db
        ->where('catid',$id)->where('active',1)
        ->order_bY('id','DESC')
        ->get('news_content')->result_array();
    }


    public function singlenews($id){
        return $this->db->where('id',$id)->get('news_content')->row_array();
    }

    public function  havenews($id,$slug){
    $resid = $this->db->where('id',$id)->get('news_content')->row_array();

    if($resid){
        $resslug = $this->db->where('az_slug',$slug)->or_where('ru_slug',$slug)->get('news_content')->row_array();
        if($resslug){
        return $this->db->where('id',$id)->get('news_content')->row_array();
        }
    }
    return [];
    }


    public function getMenuNews($cats){

        $SQLquery = '';

        foreach ($cats as $key => $cat){

            if($key<=5){
                $SQLquery = $SQLquery." (SELECT * FROM `news_content` where `active`=1 and`catid` =".$cat['id']." ORDER BY id DESC LIMIT 1) UNION".PHP_EOL ;
            }//endif
        }//endforeach

        $sqltrimquery = trim( trim($SQLquery),' UNION' ) ;

        $dbquery = $this->db->query($sqltrimquery)->result_array();

        return $dbquery ;
    }





    public function search_result($searchword){
        return $this->db->like('az_title',$searchword)->or_like('az_text',$searchword)->where('active !=',-2)->get('news_content')->result_array();
    }


    public function paginationNewsCountAll(){
    return  $this->db->count_all('news_content') ;
    }

    public function fetch_details($limit ,$count){

    return  $this->db->where('active !=',-2)->order_by('id','DESC')->limit( $limit,$count)->get('news_content')->result_array();


    }

    public function getnews_json(){
        return $this->db->where('active',1)->get('news_content')->result_array();

    }
} //end class
