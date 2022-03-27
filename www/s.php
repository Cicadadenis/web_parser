<?php
 session_start();

$name=$_POST['name'];

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

$MadelineProto->resetUpdateState();



