<?
session_start();
$string = file_get_contents("channels/".$_SESSION['f']."");
$task_array = json_decode($string,true);
unset($task_array[$_SESSION['k']]);
file_put_contents("channels/".$_SESSION['f']."",json_encode($task_array));
echo "<font color='green'>
Успешно <br>непонятный ид</br>
					<meta http-equiv='Refresh' content='0; URL=inviters.php'>";
?>