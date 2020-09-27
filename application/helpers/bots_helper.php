<?php
//https://extreme-ip-lookup.com/ ip ucun api
function valyutaSQL(){
    $sitelink = 'https://www.cbar.az';
    $site = file_get_contents($sitelink);
    if(!$site){
    return ' ';
    }

    preg_match('@<div class="relize_item"><span>(.*?) tarixindən etibarən</span><ul><li>(.*?)</li><li>(.*?)</li><li>(.*?)</li><li>(.*?)</li></ul></div>@si',$site,$data);
    array_shift($data) ;
    array_shift($data) ;
   // return $data;

    $sqldata =[
      'usd' =>$data[0],
      'eur' =>$data[1],
      'rub' =>$data[2],
      'try' =>$data[3],
    ];



    $ci = get_instance();
  return  $ci->db->where('id',5)->update('valyuta',$sqldata) ;
}

// function runvalyutabot(){
//   $time = date("H:i");
//  if($time == '00:00'){
//  return valyutaSQL();
// }//end if
// }//end  runvalyutabot

/////////////////////////////////////////////////
#          IP CHECK
function getIp(){
  if(isset($_SERVER['HTTP_CLIENT_IP'])){
     $ipadress = $_SERVER['REMOTE_ADDR'];
  }elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
      return $_SERVER['HTTP_X_FORWARDED_FOR'];
  }else{
      return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
  }

 return $ipadress;
} // $ip = getIp();



function ipdata($ip){
  $query = @unserialize( file_get_contents("http://ip-api.com/php/".$ip) );

  if($query['status'] == 'fail'){
    return $ip . "{NO DATA}";
  }//end fail if

    if($query && $query['status'] == 'success'){
      $data = [
        'timezone'=>$query['timezone'],
        'regionName'=>$query['regionName'],
        'city'=>$query['city']
        ];
      $ipdatastring = $ip.PHP_EOL.'{'.PHP_EOL.'';
      foreach ($data as $key => $value) {
        $ipdatastring =  $ipdatastring.$key.':'.$value.PHP_EOL;
      }//endforeach
      $ipdatastring = $ipdatastring.'}';
      return $ipdatastring;
    }//end success if

}//end ipdata function



function writeipfile($ipdata){
  $fileyol = FCPATH.'/assets/iplist.txt';
  $filedata = "$ipdata \n ";
  return  file_put_contents($fileyol,$filedata , FILE_APPEND);
}


function readipfile(){
  $fileyol = base_url('/assets/iplist.txt');
  $dosya = fopen( $fileyol, "r" ) // Aç
  or exit( "Dosya bulumamadı." );

}








function Iplisting(){
  $userip = getIp();//sayta giren clientin ip sini goturur
  //$stringip ='81.17.85.92';
  $ipdata = ipdata( $userip );//ipnin haqqinda melumatlari goturur
   //$ipverify = readipfile($userip);//bu ipnin txt filesinde olub olmadigina baxmaq && ve ip varsa ip ye aid olan datani qaytaracaq
  // print_r($ipdata);
   if ($ipverify===false) { //ip txt filesinde yoxdursa
   writeipfile($ipdata); //txt filesine ipninin datasini yazmaq
    }
//  if($ipverify){
//    weatherdata();
// }
//return  readipfile();
}





function getintrotext(){
  $ci = get_instance();
  $data =  $ci->db->select('id,introtext')->get('pouk9_content')->result_array();
  return $data ;
}
