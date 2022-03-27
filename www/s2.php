<? include('simplehtmldom_1_9_1/simple_html_dom.php');?>

<?
$html = file_get_html('https://telemetr.me/content/movies_bot');
echo $html;

?>