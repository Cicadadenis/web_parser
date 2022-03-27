<?
	session_start();

if($_POST['pass']=='2'){
if(empty($_POST['ip']))  {
			echo '<br><font color="red"><su>Введите ip</su>! </font>

			';
		} 
	
		elseif(empty($_POST['port'])) {
			echo '<br><font color="red">Введите port</font>';
		}
	
			
		 
		else{
$_SESSION['ips'] = $_POST['ip'];
$_SESSION['port'] = $_POST['port'];
$_SESSION['no'] = '1';

			echo "<font color='green'>
Успешно добавили в ссессию данные </br>
					<meta http-equiv='Refresh' content='0; URL=inviters.php?id=".$_SESSION['aks']."'>";

		}
}
if($_POST['pass']=='1'){
if(empty($_POST['ip']))  {
			echo '<br><font color="red"><su>Введите ip</su>! </font>

			';
		} 
		if(empty($_POST['lo']))  {
			echo '<br><font color="red"><su>Введите логин</su>! </font>

			';
		} 
	
		elseif(empty($_POST['port'])) {
			echo '<br><font color="red">Введите port</font>';
		}
				elseif(empty($_POST['par'])) {
			echo '<br><font color="red">Введите пароль</font>';
		}
	
			
		 
		else{
$_SESSION['ips'] = $_POST['ip'];
$_SESSION['port'] = $_POST['port'];
$_SESSION['lo'] = $_POST['lo'];
$_SESSION['pass'] = $_POST['par'];

 $user= $_SESSION['aks'];
 $ar = [];
  $ar[] = [
"ip" => $_POST['ip'], //закидываем в массив на всякий случай userId пользователя
"port" => $_POST['port'], //закидываем в массив на всякий случай userId пользователя
"login" => $_POST['lo'],
"pass" => $_POST['par'],
        ];
 $file = fopen("sessions/$user.json", "a+");
fwrite($file, json_encode($ar, FILE_APPEND ));
fclose($file);
			echo "<font color='green'>
Успешно добавили в ссессию данные </br>
					<meta http-equiv='Refresh' content='0; URL=refresht.php?id=".$user."'>";

		}
}