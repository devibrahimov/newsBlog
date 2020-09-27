<?php



function imageupload($way,$imagename,$formdata,$newsname){
    $thise = get_instance();
    $path = "./assets/uploads/$way/";
    $year = date("Y");
    $month = date("m");
    $day = date("d");
    $filenameYear = $path.$year;
    $filenameMonth = $filenameYear."/".$month;
    $filenameDay = $filenameMonth."/".$day;
    //$thumb = $filenameDay."/".'thumb/';

    if(!is_dir($filenameYear)){
      mkdir($filenameYear,0777);  mkdir($filenameMonth,0777);
      mkdir($filenameDay,0777);   //mkdir($thumb,0777);
    }else{
    if(!is_dir($filenameMonth)){
    mkdir($filenameMonth,0777);   mkdir($filenameDay,0777);
    //mkdir($thumb,0777);
    }else{
    if(!is_dir($filenameDay)){
      mkdir($filenameDay,0777); //  mkdir($thumb,0777);
    }else{
  //  if(!is_dir($thumb)){
    //mkdir($thumb,0777);
  //} //else $thumb
} //else $filenameDay
} //else $filenameMonth
}//else $filenameYear
    $config['upload_path']   = $filenameDay;
    $config['allowed_types'] = 'jpeg|jpg|png';
    $config['file_name'] = $newsname;

    // $config['file_name']  = $imagename.'_medium';


      $thise->upload->initialize($config);

      if(!$thise->upload->do_upload($imagename) ){
       // return $thise->upload->display_errors();
       //if uploading image
       $thise->session->set_userdata(array(
        'newsdata' => $formdata
      ));
      return false;
    }
    else{
      $image = $thise->upload->data(); //this image name
//print_r($image);die;
      // print_r($imagefile );die;
  imagelibrary($filenameDay,$image,'250','_small');
  //imagelibrary($filenameDay,$image,'150','_thumbnail');

     // echo $thise->image_lib->display_errors();die;
      //this function return image name

    }

    return $filenameDay.'/'.$image['file_name'];

}

function removedart($string){
 return str_replace('"',' ',$string);
}

function imagelibrary($filenameDay,$imagename,$width,$imageres){
     $thise = get_instance();
  $config['image_library'] = 'gd2';
  $config['source_image'] =  $filenameDay.'/'.$imagename['file_name'];
  $config['create_thumb'] = FALSE ;
  $config['width'] = $width;
  $config['mainton_ratio'] = False ;
  $removedart = $filenameDay.'/'.$imagename['raw_name'].$imageres.$imagename['file_ext']; 
  $config['new_image'] = str_replace('"',' ',$removedart);
  $thise->load->library('image_lib',$config);
  $thise->image_lib->resize();
}


function small_image($imagename){
  if( $imagename==NULL){
  return 'assets/site/images/chipreklamveren.png';
  }else{  $img = explode('.',$imagename);
  return $img['1'].'_small.'.$img['2'];

  }

}

function thumbnail_image($imagename){
  if( isset($imagename)){
    $img = explode('.',$imagename);
    return $img['1'].'_thumbnail.'.$img['2'];
  }else{
    return 'assets/site/images/chipreklamveren.png';
  }

}

//view da image yoxlayib cagirmag ucun
function imageVerify($image){
  if(file_exists('.'.$image)){
    return base_url('').$image ;
  }else{
    return base_url('').'assets/site/images/chipreklamveren.png';
  }
}








function uploadlogo($imagename){
  $thise = get_instance();

  $config['upload_path']   = './assets/uploads/logo/';
  $config['allowed_types'] = 'jpeg|jpg|png';

    $thise->upload->initialize($config);
    $thise->upload->do_upload($imagename);


    $image = $thise->upload->data();
    return $image['file_name'];
}


function uploadicon($imagename){
  $thise = get_instance();

  $config['upload_path']   = './assets/uploads/logo/';
  $config['allowed_types'] = 'jpeg|jpg|png';

    $thise->upload->initialize($config);
    $thise->upload->do_upload($imagename);

    $image = $thise->upload->data();
    return $image['file_name'];
}
