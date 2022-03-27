<?
session_start();



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

    $MadelineProto->logger($me);
    $nam=$_POST['pars'];
        $nams=$_POST['nam'];

$channelForSearch = $nam; //вставляешь username канала
$i='0';
$b='0';
//Здесь получаем общее количество подписчиков у канала

//создаем массив подписчиков
$participants = [];


    //Получаем подписчиков. Это делается через метод 'channels->getParticipants'
    //Посмотреть можно на странице: https://docs.madelineproto.xyz/API_docs/methods/channels.getParticipants.html
    $getParticipants = $MadelineProto->getPwrChat($channelForSearch);
    

    foreach ($getParticipants['participants'] as $participant) {
		$b++;
        if (array_key_exists("status", $participant['user'])) {

        if ($participant['user']['status']['_']==='userStatusOnline'){
$i++;
if(empty($participant['user']['username'])){
	continue;
}
        $participants[] = [
            "id" => $participant['user']['id'], //закидываем в массив на всякий случай userId пользователя
            "username" => isset($participant['user']['username']) ? $participant['user']['username'] : "" //также его username, но это поле может быть пустым. Поэтому и на всякий случай и получили userId
        ];

    }
        }
}
$MadelineProto->echo("Всего подписчиков у канала: $b\n");

 $file = fopen("channels/$nams.json", "a+");
fwrite($file, json_encode($participants, FILE_APPEND ));
fclose($file);
 if($i == '0'){
	 echo "<font color='red'>Невозможно Добавить юзеров,Возможно вы хотели спарсить канал. Перейдите на вкладку парсер по комментариям";
	}
	if($i > '0'){
	 echo "<font color='green'>Спарсили юзеров:$i";
	}
       

// Пишем содержимое в файл,
// используя флаг FILE_APPEND для дописывания содержимого в конец файла
// и флаг LOCK_EX для предотвращения записи данного файла кем-нибудь другим в данное время


//Выводим в кносоль результат