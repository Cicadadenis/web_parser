<?session_start();
$_SESSION['aks']=$_GET['id'];
$_SESSION['url']='@satanasat';
$_SESSION['text']='ваш текст';

$_SESSION['time']='25';

echo "<font color='red'>Поменяли аккаунт
	 <meta http-equiv='Refresh' content='0; URL=inviters.php?id=".$_SESSION['aks']."'>
	 ";
?>
