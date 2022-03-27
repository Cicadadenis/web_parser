<?php session_start();
?>

<?

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}

include 'madeline.php';
use danog\MadelineProto\Stream\Proxy\HttpProxy;




 $string4 = file_get_contents("sessions/".$_SESSION['aks'].".json");

$task_array4 = json_decode($string4,true);

 
 $settings['connection_settings']['all']['proxy'] = HttpProxy::getName();
$settings['connection_settings']['all']['proxy_extra'] = [
    'address'  => $task_array4['0']['ip'],
    'port'     =>  $task_array4['0']['port'],
	 'username' => $task_array4['0']['login'],
    'password' =>$task_array4['0']['pass'],
];
			

	set_time_limit(0);
			
$MadelineProto = new \danog\MadelineProto\API('sessions/'.$_SESSION['aks'].'.madeline', $settings);


$MadelineProto->async(false);

    $MadelineProto->start();

    $me =  $MadelineProto->getSelf();
$lat=$_POST['lat'];
$lng=$_POST['lng'];
$nam=$_POST['nam'];

    $MadelineProto->logger($me);
    $inputGeoPoint = ['_' => 'inputGeoPoint', 'lat' => $lat, 'long' => $lng, 'accuracy_radius' => '100'];

    try {
$contact = $MadelineProto->contacts->getLocated(['background' => '0', 'geo_point' => $inputGeoPoint, 'self_expires' => '10', ]);
}
catch (\danog\MadelineProto\RPCErrorException $e) {
if ($e->rpc === 'GEO_POINT_INVALID'){
   	 echo "<font color='red'>Предоставлено неверное географическое положение";
  
     
 }
 if ($e->rpc === 'USERPIC_UPLOAD_REQUIRED'){
   	 echo "<font color='red'>У вас должна быть фотография профиля, чтобы опубликовать свое геолокацию";
  
     
 }
 else{
        	 echo "<font color='red'>Другая ошибка $e";

 }
}
$i='0';
$s=count($contact);
//print_r($contact);
foreach ($contact['users'] as $participant) {
      if (array_key_exists("status", $participant)) {
if ($participant['status']['_']==='userStatusOnline'){
if(empty($participant['username'])){
	continue;
}
$i++;

        $participants[] = [
            "id" => $participant["id"], //закидываем в массив на всякий случай userId пользователя
            	            "username" => isset($participant['username']) ? $participant['username'] : "" //также его username, но это поле может быть пустым. Поэтому и на всякий случай и получили userId

        ];

}
}
    }
    $file = fopen("channels/$nam.json", "a+");
fwrite($file, json_encode($participants, FILE_APPEND ));
fclose($file);
 if($i == '0'){
	 echo "<font color='red'>Невозможно Добавить юзеров,Возможно вы хотели спарсить канал. Перейдите на вкладку парсер по комментариям";
	}
	if($i > '0'){
	 echo "<font color='green'>Спарсили юзеров:$i";
	}


//$dialogs =$MadelineProto->getDialogs();

//foreach ($dialogs as $peer){
//print_r($dialogs);

    //echo $peer['invite'];
    //if (!isset($peer['chat_id'])){
    //$info= $MadelineProto->getPwrChat($peer);
  //  if (array_key_exists("title", $info)) {
 //$id=$info['id'];
 //$i++;
//  $title=$info['title'];
//$str = preg_replace('~^\-~', '', $id);
//echo ' <option value="'.$id.'">'.$title.'</option>';
//}


//}


     

 //if (!isset($peer['chat_id'])){
  
     //$info= $MadelineProto->getPwrChat($peer);
//$title=$info['title'];
//$id=$info['id'];
  //echo ' <option value="'.$id.'">'.$title.'</option>';
 
//}

//}
?>