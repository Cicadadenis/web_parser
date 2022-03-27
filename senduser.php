<?
session_start();



$i='0';
     
   $_SESSION['f']=$_POST['sel'];
$_SESSION['files']=$_POST['sel'];
$_SESSION['text']=$_POST['texts'];
$_SESSION['time']=$_POST['time'];
$input = array(".", "!", "!!", "...", "!.", ",", ":","#", "/..", "..", "!!!!", "!!!!!!",".....!");
$rand_keys = array_rand($input, 2);
$randsm=$input[$rand_keys[1]];

 $te=$_SESSION['text'];
 $tef=preg_replace("/$/", $randsm, $te);

include 'madeline.php';
use danog\MadelineProto\Stream\Proxy\HttpProxy;



$string = file_get_contents("channels/".$_POST['sel']."");

$task_array = json_decode($string,true);
$num_str =  count($task_array);
fclose($file);


if ($num_str=='0'){
  echo'нет юзеров';
  file_put_contents("channels/".$_POST['sel']."",'');

}

else{

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
	
	if (empty($_SESSION['ok'])){
$_SESSION['ok']='0';
	}
		if (empty($_SESSION['er'])){
$_SESSION['er']='0';
	}
$ok=$_SESSION['ok'];
$er=$_SESSION['er'];
echo 'Успешно отправили'.$ok.'<br>Не удалось отправить:'.$er.'<br>Юзеров в файле '.$num_str.'<br><br>';


foreach($task_array as $key=> $x){
//print_r($x);
$i++;
if($i=='1'){
	
 $id=$x['username'];
 $_SESSION['k']=$key;
     unset($task_array[$key]);

try{
	$_SESSION['ok']++;
$MadelineProto->messages->sendMessage(['peer' => $id, 'message' => $tef]);

}

  		catch (\danog\MadelineProto\RPCErrorException $e){
if ($e->rpc === 'PEER_FLOOD'){
	$_SESSION['er']++;
   $_SESSION['aks']=$_SESSION['aks']+'1';
   	 echo "<font color='red'>Вы превысили лимит
	 <meta http-equiv='Refresh' content='0; URL=refresh.php?id=".$_SESSION['aks']."&start=1'>
	 ";
  
     
 }
  if ($e->rpc === 'BOT_GROUPS_BLOCKED'){
	  $_SESSION['er']++;
   	 echo "<font color='red'>Этого бота нельзя добавлять в группы";
  
     
 }
   if ($e->rpc === 'INPUT_USER_DEACTIVATED'){
	   $_SESSION['er']++;
   	 echo "<font color='red'>юзер был удален";
  
     
 }
 if ($e->rpc === 'BOTS_TOO_MUCH'){
	 $_SESSION['er']++;
   	 echo "<font color='red'>В этом чате / канале слишком много ботов";
  
     
 }
 if ($e->rpc === 'CHANNEL_INVALID'){
	 $_SESSION['er']++;
   	 echo "<font color='red'>Указанный канал недействителен. Но мы попытались зайти в него";

     
 }
  if ($e->rpc === 'CHAT_WRITE_FORBIDDEN'){
	  $_SESSION['er']++;
   	 echo "<font color='red'>Указанный канал недействителен. Но мы попытались зайти в него";

 }
  if ($e->rpc === 'CHANNEL_PRIVATE'){
	  $_SESSION['er']++;
   	 echo "<font color='red'>Вы не присоединились к этому каналу / супергруппе,но мы исправили ситуацию.Но мы исправили ситуацию";

  
     
 }
 if ($e->rpc === 'CHAT_ADMIN_REQUIRED'){
	 $_SESSION['er']++;
   	 echo "<font color='red'>Для этого вы должны быть администратором этого чата";
  
     
 }
  if ($e->rpc === 'CHAT_INVALID'){
	  $_SESSION['er']++;
   	 echo "<font color='red'>Неверный чат,но мы попытались в него попасть";

     
 }
   if ($e->rpc === 'INPUT_USER_DEACTIVATED'){
	   $_SESSION['er']++;
   	 echo "<font color='red'>Указанный пользователь удален";
  
     
 }
    if ($e->rpc === 'USER_BLOCKED'){
		$_SESSION['er']++;
   	 echo "<font color='red'>Пользователь заблокирован";
  
     
 }
   if ($e->rpc === 'USER_CHANNELS_TOO_MUCH'){
	   $_SESSION['er']++;
   	 echo "<font color='red'>Один из пользователей, которых вы пытались добавить, уже входит в слишком много каналов / супергрупп.";
  
     
 }
   if ($e->rpc === 'USER_ID_INVALID'){
	   $_SESSION['er']++;
   	 echo "<font color='red'>Указанный идентификатор пользователя недействителен";
  
     
 }
  if ($e->rpc === 'USERS_TOO_MUCH'){
	  $_SESSION['er']++;
   	 echo "<font color='red'>Превышено максимальное количество пользователей (например, для создания чата)";
  
     
 }
  if ($e->rpc === 'USER_PRIVACY_RESTRICTED'){
	  $_SESSION['er']++;
   	 echo "<font color='red'>Настройки конфиденциальности пользователя не позволяют это сделать.";
  
     
 }
  if ($e->rpc === 'Timeout'){
	  $_SESSION['er']++;
   	 echo "<font color='red'>Тайм-аут при получении данных.";
  
     
 }
   if ($e->rpc === 'USERNAME_INVALID'){
	   $_SESSION['er']++;
   	 echo "<font color='red'>Такого чата не существует,но мы попытались в него вступить";
  
     
 }
 else{
	 $_SESSION['er']++;
  		    	   	 echo "<font color='red'>Более подробная ошибка: ".$e."";
}
  		}
}

}
file_put_contents("channels/".$_POST['sel']."",json_encode($task_array));

}
?>
