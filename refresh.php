<?session_start();
$_SESSION['aks']=$_GET['id'];
$_SESSION['ok']='0';
$_SESSION['er']='0';
$_SESSION['step']='1';

echo "<font color='red'>Поменяли аккаунт
	 <meta http-equiv='Refresh' content='0; URL=inviters.php?id=".$_SESSION['aks']."&start=1'>
	 ";
?>
