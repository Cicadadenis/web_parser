<?
session_start();

$id=$_GET['del'];
$string = file_get_contents("channels/".$_GET["name"]."");
$task_array = json_decode($string,true);
unset($task_array[$id]);
file_put_contents("channels/".$_GET["name"]."",json_encode($task_array));
$_GET['del']=$_GET['del']+'1';
echo "<font color='green'>
Успешно <br>непонятный ид</br>
					<meta http-equiv='Refresh' content='0; URL=checks.php?st=".$_GET['del']."&&name=".$_GET['name']."'>";
?>