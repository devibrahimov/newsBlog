<?php


 function get_post($name){
   $ci = get_instance();
   return $ci->input->post($name,true);
 }

 function post($name){
   $ci = get_instance();
   return $ci->input->post($name,true);
 }

function isPost(){
  if($_SERVER['REQUEST_METHOD']=="POST"){return true;}
}

  function flashread(){
    $ci = get_instance();
    echo $ci->session->flashdata('flashmessage');
  }

function flash($type,$icon,$title){
  $ci= get_instance();
  $message= '<div class="col-md-3 col-sm-6 col-xs-12">
  <div class="info-box bg-'.$type.'">
    <span class="info-box-icon"><i class="fa fa-'.$icon.'"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Bildiri</span>
      <span class="info-box-number">'.$title.'</span>


          <span class="progress-description">

          </span>
    </div>
  </div>
</div>';
 $ci->session->set_flashdata('flashmessage',$message);
}

function flashSweetAlert($message,$feedback){
  $ci= get_instance();
  $message= '<div class="subscribe-me text-center">
  <h1>'.$message.'</h1>
		<h2>'.$feedback.'</h2>
		<a href="#close" class="sb-close-btn"><img class="<img-responsive></img-responsive>" src=" '.site_url("assets/site/").'images/others/close-button.png" alt="" /></a>

	</div>';
 $ci->session->set_flashdata('flashmessage',$message);
}

function alert($type,$icon,$title){
  $ci= get_instance();
  $message= '<div class="alert alert-'.$type.' alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
  <h4><i class="icon fa fa-'.$icon.'"></i>'.$title.'</h4></div>';
 $ci->session->set_flashdata('flashmessage',$message);
}

  function back(){
    return redirect($_SERVER['HTTP_REFERER']);
  }



###############
# DATE FUNCTION
############################
  function timeAgo($date){

    $zaman = strtotime($date);
    $date_interval = time()-$zaman ;
    $saniye =  $date_interval ;
    $deqiqe = round($date_interval /60);
    $saat   =  round($date_interval /3600);
    $gun    =  round($date_interval /86400);
    $hafta  = round($date_interval /604800);
    $ay     = round($date_interval /2419200);
    $il    = round($date_interval /29030400);
    if($saniye < 60){  return " Biraz Əvvəl"; }
    else if($deqiqe < 60 ){ return $deqiqe." dəqiqə Əvvəl";}
    else if($saat < 24 ){return $saat." saat Əvvəl";}
    else if($gun < 7 ){return $gun." gün Əvvəl";}
    else{ return datecalendar($date);}
 }//end timeAgo function

  function datecalendar($date){
    $date = explode(' ',$date);
    $date = $date[0];
    $date =explode('-',$date);
    switch ($date[1]) {
      case '1': return $date[2].' Yanvar '.$date[0] ;break;
      case '2': return $date[2].' Fevral '.$date[0]; break;
      case '3': return $date[2].' Mart '.$date[0];   break;
      case '4': return $date[2].' Aprel '.$date[0] ; break;
      case '5': return $date[2].' May '.$date[0];    break;
      case '6': return $date[2].' İyun '.$date[0];   break;
      case '7': return $date[2].' İyul '.$date[0];   break;
      case '8': return $date[2].' Avqust '.$date[0]; break;
      case '9': return $date[2].' Sentyabr '.$date[0]; break;
      case '10': return $date[2].' Oktyabr '.$date[0]; break;
      case '11': return $date[2].' Noyabr '.$date[0]; break;
      case '12': return $date[2].' Dekabr '.$date[0]; break;
      default:  return $date[2].'-'.$date[1].'-'.$date[0]; break;
    }
   //return $date[2].'-'.$date[1].'-'.$date[0];

  }





    //  //////////////////////////////////////////////////
    //
    //        CATEGORY MODEL HELPER
    //
    function childcategory($pid){
      $ci = get_instance();
     $res = $ci->db->where(['state !='=>'-2','parent_id'=>$pid])->get('categories')->result_array();
     if($res){ return $res;}else{return [];};
    }




    //////////////////////////////////////////////////
    //
    //        UPDATE HIT COUNTER HELPER
    //




    function updatehit( $id ,$hit){
      $ci = get_instance();
      $ci->db->where('id', $id )->set('hit', $hit)->update('news_content');
    }


   function language(){
    $ci = get_instance();
   return $ci->session->userdata('lang');
   }

   function csrfToken(){
    $ci = get_instance();

    $csrf = array( 'name' => $ci->security->get_csrf_token_name(), 'hash' => $ci->security->get_csrf_hash()  ); ?>
    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
   <?php }



function Searchresultstr($word,$text){

  if(strstr($text,$word) ){
    $sonuc = mb_strpos($text,$word,0,"UTF-8");

    $newword =" <strong style='color:blue;'>".$word."</strong>";
    return str_replace($word, $newword,$text);
  }

}


















 function sendemail($setFrom,$subject,$useremail,$addAddress,$emailcontent){
  $mail->setFrom($setFrom,$subject);
  $mail->addReplyTo($useremail,'chip.az');

  // Add a recipient
  $mail->addAddress($addAddress);

  // Add cc or bcc
  $mail->addCC('cc@chip.az');
  $mail->addBCC('bcc@chip.az');

// Email subject
$mail->Subject = 'Chip.az qeyd';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = $emailcontent;
$mail->Body = $mailContent;

// Send email
if(!$mail->send()){

    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
  back();
}
}//end senemail function
