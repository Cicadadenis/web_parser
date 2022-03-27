<?php 
session_start();

?>

<?
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

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
function convert($size)
{
    $unit=array('b','kb','mb','gb','tb','pb');
    return @round($size/pow(1024,($i=floor(log($size,1024)))),2).' '.$unit[$i];
}
$MadelineProto = new \danog\MadelineProto\API('sessions/'.$_SESSION['aks'].'.madeline', $settings);

$MadelineProto->async(false);

    $MadelineProto->start();

    $me =  $MadelineProto->getSelf();

    $MadelineProto->logger($me);

//$dialogs =$MadelineProto->getDialogs();

//Здесь получаем общее количество подписчиков у канала

//
//создаем массив подписчиков
$participants = [];

 


    



$countPa=$_POST['co'];
$li=$_POST['li'];
$pars=$_POST['pars'];
$nam=$_POST['nam'];
$channelForSearch = $pars; //вставляешь username канала

for ($i = 0; $i <= $countPa;) {
        $s= convert(memory_get_usage(true));

    if($s=='250 mb'){
    echo'не хватило оперативной памяти';
    break;
}
    try{$messages = $MadelineProto->messages->getHistory([
        /* Название канала, без @ */
	'peer' => $pars, 
	'offset_id' => 0, 
	'offset_date' => 0, 
	'add_offset' => $i,
	'limit' => $li,
	'max_id' => 0, 
        /* ID сообщения, с которого начинаем поиск */
	'min_id' => 0, 
]);
	}
	  		catch (\danog\MadelineProto\RPCErrorException $e){
				break;
if ($e->rpc === 'FLOOD_WAIT'){
	   	 echo "<font color='red'>слишком много запросов у вас флуж. подождите.";
break;
  
     
 }
 if ($e->rpc === 'Flood'){
	   	 echo "<font color='red'>слишком много запросов у вас флуж. подождите.";
break;
  
     
 }
 echo $e;
			}
			
$countParticipants = $messages['count'];

foreach ($messages['users'] as $participant) {
$i += 1;

      if (array_key_exists("status", $participant)) {
		 

    if(empty($participant['username'])){
	continue;
}
        $participants[] = [
            "id" => $participant["id"], //закидываем в массив на всякий случай userId пользователя
            	            "username" => isset($participant['username']) ? $participant['username'] : "" //также его username, но это поле может быть пустым. Поэтому и на всякий случай и получили userId

        ];
		

}
    $MadelineProto->sleep(5); //5 секунд ждем до следующего получения подписчиков

    }

}
$s=count($participants);
 $file = fopen("channels/$nam.json", "a+");
fwrite($file, json_encode($participants, FILE_APPEND ));
fclose($file);
 if($i == '0'){
	 echo "<font color='red'>Невозможно Добавить юзеров,Возможно вы хотели спарсить канал. Перейдите на вкладку парсер по комментариям<br>";
	}
	if($i > '0'){
	 echo "<font color='green'>Всего Записей: $countParticipants<br>Выбрали$countPa последних записей<br> Спарсили юзеров:$s";
	}
