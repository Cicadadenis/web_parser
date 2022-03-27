<?php 
session_start();

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
			

$MadelineProto = new \danog\MadelineProto\API('sessions/'.$_SESSION['aks'].'.madeline', $settings);




$MadelineProto->async(false);

    $MadelineProto->start();

    $me =  $MadelineProto->getSelf();

    $MadelineProto->logger($me);

$dialogs = $MadelineProto->messages->getPinnedDialogs(['folder_id' => '0', ]);

$i='0';

foreach ($dialogs['chats'] as $peer){
//print_r($dialogs);
$id=$peer['id'];
$name=$peer['title'];
$i++;
    //echo $peer['invite'];
	if($i=='1'){
echo ' <option value="channel#'.$id.'">'.$name.'</option>'
;
break;
	}






     

 //if (!isset($peer['chat_id'])){
  
     //$info= $MadelineProto->getPwrChat($peer);
//$title=$info['title'];
//$id=$info['id'];
  //echo ' <option value="'.$id.'">'.$title.'</option>';
 
//}

}
?>