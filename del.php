<?
session_start();
unlink("sessions/.madeline");
unlink("sessions/.madeline.lock");
unlink("sessions/".$_SESSION['aks'].".madeline");
unlink("sessions/".$_SESSION['aks'].".madeline.lock");
unlink("sessions/".$_SESSION['aks'].".json");
unlink("sessions/".$_SESSION['aks'].".madeline.callback.ipc");
unlink("sessions/".$_SESSION['aks'].".madeline.ipc");
unlink("sessions/".$_SESSION['aks'].".madeline.ipcState.php");
unlink("sessions/".$_SESSION['aks'].".madeline.ipcState.php.lock");
unlink("sessions/".$_SESSION['aks'].".madeline.lightState.php");
unlink("sessions/".$_SESSION['aks'].".madeline.lightState.php.lock");
unlink("sessions/".$_SESSION['aks'].".madeline.safe.php");
unlink("sessions/".$_SESSION['aks'].".madeline.safe.php.lock");

unset($_SESSION['ips']);
unset($_SESSION['port']);
unset($_SESSION['pass']);
unset($_SESSION['aks']);

echo "<font color='green'>
Успешно <br>удалили сессию</br>
					<meta http-equiv='Refresh' content='0; URL=account.php'>";
?>