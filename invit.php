<?session_start();


if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}

include 'madeline.php';
use danog\MadelineProto\Stream\Proxy\HttpProxy;




 $string4 = file_get_contents("sessions/".$_SESSION['aks'].".json");

$task_array4 = json_decode($string4,true);

 
 $settings['connection_settings']['all']['proxy'] = HttpProxy::getName();
$settings['connection_settings']['all']['proxy_extra'] = [
    'address'  => $task_array['0']['ip'],
    'port'     =>  $task_array['0']['port'],
	 'username' => $task_array['0']['login'],
    'password' =>$task_array['0']['pass'],
];
			

$MadelineProto = new \danog\MadelineProto\API('sessions/'.$_SESSION['aks'].'.madeline', $settings);
$MadelineProto->async(false);
   $MadelineProto->start();

    $me =  $MadelineProto->getSelf();

    $MadelineProto->logger($me);
$i='0';
$ero=0;
$true=0;

  
$pars=$_POST['pars2'];
	    

 

$chat =  $MadelineProto->getPwrChat($pars);

  




foreach ($chat['participants'] as  $participants) {
	 //print_r($participants);
//if (!array_diff(['user','status'], array_keys($participants))) {

if (array_key_exists("status", $participants['user'])) {
if ($participants['user']['status']['_']==='userStatusOnline'){
 $i++;       
  }
   // Both keys exist.
}

}
  

echo $i;
    	   // && $participants['user']['status']['_']==='userStatusRecently'
//
//print_r( $participants['user']['status']);
   
       


		  