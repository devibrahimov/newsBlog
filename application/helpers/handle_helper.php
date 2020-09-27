<?php
function get_hit_news(){
    $ci = get_instance();

    $thisday=date('Y-m-d G:i:s', strtotime('-30 days'));

    return $ci->db->where('active',1)->where('publish_up >=',$thisday)->order_by('hit', 'DESC')->limit(10)->get('news_content')->result_array();
}



function get_umumixeber(){
    $ci = get_instance();
    return $ci->db->where('active',1)->where('catid ',155)->order_by('hit', 'ASC')->limit(6)->get('news_content')->result_array();
}


function get_recommended_news(){
    $ci = get_instance();

    $thisday=date('Y-m-d G:i:s', strtotime('-100 days'));

    return $ci->db->where('active',1)->where('publish_up >=',$thisday)->order_by('id', 'RANDOM')->limit(12)->get('news_content')->result_array();
}



//id si 156 olan texnologiya xeberleri bolmesini cagirir
function get_recommended_technologynews(){ 
    $ci = get_instance();
    return $ci->db->where('active',1)->where('catid',156)->order_by('id', 'RANDOM')->limit(5)->get('news_content')->result_array();
}



function getCategoryNews($id){

    $ci = get_instance();

    return $ci->db->where('active',1)->where('catid',$id)->order_by('id', 'RANDOM')->limit(5)->get('news_content')->result_array();
}


function get_menu_news( array $cats){
    $ci = get_instance();
    $ci->load->model('Newsmodel');

   $data = $ci->Newsmodel->getMenuNews($cats);

    return $data ;
}


function countcompany($cat_id){
    $ci = get_instance();

    $res = $ci->db->where('company_catid',$cat_id)->order_by('id', 'DESC')->get('companies')->result_array();

    echo count($res);
}







