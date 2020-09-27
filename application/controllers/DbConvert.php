
<?php

class DbConvert extends CI_Controller{

public function getjsonimg(){
  $attribdata =  $this->db->select('id,attribs')->where('id >',2162)->get('news_content')->result_array();

  $keydata=[];

  for ($i=0; $i < count($attribdata); $i++) {
     $data = explode('","' ,$attribdata[$i]['attribs']);
     //print_r($data );die;
     $data1=$data[31];
   array_push($keydata , $attribdata[$i]['id'].'=>'.$data1);

 }//for

for ($i=0; $i <= count($keydata) ; $i++) {
  $imgarray = explode('=>',$keydata[$i],2);
  $id   =  $imgarray[0];
  $imgdata =  $imgarray[1];
  $img = explode(':',$imgdata,2);
  $imagename = $img[1];

  $imagename = str_replace('\/','/',$imagename);
  $imagename =str_replace('images/','./assets/uploads/news/',$imagename);
  $imagename =ltrim($imagename,'"');
  $imagename =rtrim($imagename,'"');
  //echo $id.'=>'.$imagename.'<br>';
  $res = $this->db->set('image',$imagename)->where('id',$id)->update('news_content');
  if($res){
    echo 'butun db deyishdirildi ';
  }else{
    echo "--$id--";
  }
}

}//end getjsonimg





public function slugupdate(){

   $newscontent = $this->db->select('id ,az_text')->where('az_text','')->get('news_content')->result_array();
foreach ($newscontent as $key ) {
  $introtext = $this->db->select('id ,introtext')->where('id',$key['id'])->get('pouk9_content')->result_array();
   print_r(  $introtext);
}

}


public function insertnewdata(){
$this->load->model('Database');
 $joomla = $this->db->select('id,title,fulltext,state,catid,created,created_by,publish_up,hits,attribs')->get('pouk9_content')->result_array();
//print_r( $joomla);die;
foreach ($joomla as $k) {
  //echo $k['id'] ;
$kdata = [
  'id'=>$k['id'],
  'catid'=>$k['catid'],
  'created'=>$k['created'],
  'publish_up'=>$k['publish_up'],
  'az_title'=>$k['title'],
  'az_text'=>$k['fulltext'],
  'az_slug'=>azlink($k['title']),
  'attribs'=>$k['attribs'],
  'hit'=>$k['hits'],
  'active'=>$k['state'],
  'created_by'=>$k['created_by'],
];
  $res = $this->Database->insert_data('news_content',$kdata);
  if ( $res) {
    echo $k['id'].'li xeber elave edildi <br>';
  }
}
// if (!$res) {
//   echo $this->db->error();
// }

}




}//end class
