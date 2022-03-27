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
$channelForSearch = $pars; //вставляешь username канала

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
    $messages = $MadelineProto->messages->getHistory([
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
$countParticipants = $messages['count'];

foreach ($messages['users'] as $participant) {
$i++;

      if (array_key_exists("status", $participant)) {
if ($participant['status']['_']==='userStatusRecently'){
    if(empty($participant['username'])){
	continue;
}
        $participants[] = [
            "id" => $participant["id"], //закидываем в массив на всякий случай userId пользователя
            	            "username" => isset($participant['username']) ? $participant['username'] : "" //также его username, но это поле может быть пустым. Поэтому и на всякий случай и получили userId

        ];
}
}
    }

}
 $file = fopen("channels/$nam.json", "a+");
fwrite($file, json_encode($participants, FILE_APPEND ));
fclose($file);
 if($i == '0'){
	 echo "<font color='red'>Невозможно Добавить юзеров,Возможно вы хотели спарсить канал. Перейдите на вкладку парсер по комментариям<br>";
	}
	if($i > '0'){
	 echo "<font color='green'>Всего Записей: $countParticipants<br>Выбралип$countPa последних записей<br> Спарсили юзеров:$i";
	}


?>