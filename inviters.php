<?
session_start();
 

$string = file_get_contents("sessions/".$_SESSION['aks'].".json");

$task_array = json_decode($string,true);


if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}

include 'madeline.php';
use danog\MadelineProto\Stream\Proxy\HttpProxy;



 $settings['connection_settings']['all']['proxy'] = HttpProxy::getName();
$settings['connection_settings']['all']['proxy_extra'] = [
  'address'  => $task_array['0']['ip'],
    'port'     =>  $task_array['0']['port'],
	 'username' => $task_array['0']['login'],
    'password' =>$task_array['0']['pass'],
];



 

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Админ панель</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Qovex is a fully featured premium admin dashboard template built on top of awesome Bootstrap 4.4.1" name="description" />
    <meta content="Themesbrand" name="author" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">

                   
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="mdi mdi-backburger"></i>
                    </button>

                </div>

                <div class="d-flex">

                    <div class="d-inline-block">
                        <h5><span class="badge badge-danger float-right">Cicada3301 v1.0.0</span></h5>
                    </div>
            
                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
           <!--- Sidemenu -->
                <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                  
                 
                   <a href="instru.php"><button type="button"  class="btn btn-info">Инструкция</button></a>

                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">
                          

</li>

                        <li  >
                            <a  id="h" style="display:show;" class="waves-effect">
                                <i  class="mdi mdi-file-document-box-outline"></i>
                                <span id="h" style="display:show;">Сбор аудитории</span>
                            </a>
                             <a id="hs"  style="display:none;" class="waves-effect">
                                <i  class="mdi mdi-file-document-box-outline"></i>
                                <span id="hs" style="display:show;">Скрыть сбор</span>
                            </a>
                        <div id="no" style="display:none;"><a href="online.php" class="waves-effect">
                                
                                <span>Сбор кто онлайн</span>
                            </a>
                              <a href="offline.php" class="waves-effect">
                                
                                <span>Сбор кто был недавно онлайн</span>
                            </a>
                             <a href="coment.php" class="waves-effect">
                                
                                <span>Сбор по комментариям чаты\каналы </span>
                            </a>
                             <a href="commentlock.php" class="waves-effect">
                                
                                <span>Сбор по комментариям в закрытыъ чатах</span>
                            </a>
                            <a href="locks.php" class="waves-effect">
                                
                                <span>Сбор c закрытых чатов</span>
                            </a>
                              <a href="geol.php" class="waves-effect">
                                
                                <span>Сбор по геолокации кто был недавно в сети</span>
                            </a>
                              <a href="geolo.php" class="waves-effect">
                                
                                <span>Сбор по геолокации кто   в сети</span>
                            </a>
							   <a href="geochat.php" class="waves-effect">
                                
                                <span>Парсинг чатов по гео</span>
                            </a>
                           </div>
                        </li>
 <li>
                             <a href="account.php" class="waves-effect">
                                <i class="mdi mdi-file-document-box-outline"></i>
                                <span>Смена аккаунта</span>
                            </a>
                        </li>
						 <li>
                             <a href="sendf.php" class="waves-effect">
                                <i class="mdi mdi-file-document-box-outline"></i>
                                <span>Отправить сообщения юзеру</span>
                            </a>
                        </li>
						 <li>
                             <a href="sendch.php" class="waves-effect">
                                <i class="mdi mdi-file-document-box-outline"></i>
                                <span>Отправить сообщения по чатам</span>
                            </a>
                        </li>
						 <li>
                             <a href="f.php" class="waves-effect">
                                <i class="mdi mdi-file-document-box-outline"></i>
                                <span>Преоброзовать txt в json</span>
                            </a>
                        </li>
						 <li>
                             <a href="join.php" class="waves-effect">
                                <i class="mdi mdi-file-document-box-outline"></i>
                                <span>Вступить в чат</span>
                            </a>
                        </li>
						   <li>
                             <a href="checks.php" class="waves-effect">
                                <i class="mdi mdi-file-document-box-outline"></i>
                                <span>Проверить  юзеров</span>
                            </a>
                        </li>
                          <li>
                            <a href="sendbot.php" class="waves-effect">
                                <i class="mdi mdi-file-document-box-outline"></i>
                                <span>Дать команду боту</span>
                            </a>
                        </li>
                            <li>
                            <a href="del.php" class="waves-effect">
                                <i class="mdi mdi-file-document-box-outline"></i>
                                <span>Выход</span>
                            </a>
                        </li>
                                               </li>

                        

                    </ul>

                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 font-size-18">Инвайтинг</h4>

                 
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="card">
                        <div class="card-body">
    
              <style>
  #updatez34 {
    
   }
  </style>
      <div id="erors"></div><br>    
    <div id="eror"></div><br> 
<p id="sek" style="display:none" > Через <span class="secon" >0</span> секунд будет повторный инвайт</p>
	

   <script>
        $(document).ready(function() {
 $("#time").change(function(){
             hotelInfoR = $("#time").val();
			 $("#s43").html(hotelInfoR);
			
			   });

   
            $("#go").on("click", function () {
                var data = $("#s").serialize();
$( "#go" ).hide();
$( "#go2" ).show();
                $.ajax({
                    type: "POST",
                    url: "invis.php",
                    dataType: "text",
                    data: data,
                    success: function (html) {
				    $("#eror").html(html);

$( "#go" ).show();
$( "#go2" ).hide();
$( "#sek" ).show();
$(".secon").load("inviters.php .secon");
var seconds = hotelInfoR;

        var seconds_timer_id = setInterval(function() {
            if (seconds > 0) {
                seconds --;
                if (seconds < hotelInfoR) {
                    seconds =  + seconds;
                }
                $(".seconds").val(seconds);
				                $(".secon").text(seconds);

            } else {
                clearInterval(seconds_timer_id);    
							$("#go").click();

            }

        }, 1000);
                    },
                });
            });
			    
        		    
                       $("#h").on("click", function () {
$( "#no" ).show();
$( "#h" ).hide();
$( "#hs" ).show();

  });
                   $("#hs").on("click", function () {
$( "#no" ).hide();
$( "#h" ).show();
$( "#hs" ).hide();

  });   

        
        });
    </script>   
    
                            <div class="p-lg-3">
      <div class="form-group">
          <label for="offer">Ссылка на канал такого плана: <br> https://t.me/username/<br>
          <br> id канала.<br> Вы используете аккаунт:<? echo $_SESSION['aks'];?>
		 
<p style="border: 1px solid red;padding: 5px;">В случае ошибки с прокси пожалуйста нажмите удалить ссесию <a href="del.php">Удалить сессию</a><br></p></label>
               </div>
               <form id="sta" style="display:none">
   <a  id="stas" class="btn btn-primary"></a>
   
    
    
</form>                   

<?
if ($_GET['start']=='1'){?>
<script>
        $(document).ready(function() {


$("#go").click();
  });
</script>

	

	
	
<?}?>
<?
if ($_SESSION['ak']<$_GET['id']){
	$_SESSION['ak']=$_SESSION['ak']-1;
	echo "<meta http-equiv='Refresh' content='0; URL=account.php?eror=1'>
";
	
	
}
?>
<?
       



	
$MadelineProto = new \danog\MadelineProto\API('sessions/'.$_SESSION['aks'].'.madeline', $settings);


$MadelineProto->async(false);

     $MadelineProto->start();

    $me =  $MadelineProto->getSelf();

    $MadelineProto->logger($me);
$dir='channels';

if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
		        if(empty($_SESSION['file'])){

        echo '
<form method="post" id="s">    
    <select name="sel" class="form-control" id="exampleFormControlSelect1">
	
      <option selected>Выберите файл из списка</option>' ;
				}
				if(isset($_SESSION['file'])){
		echo '
<form method="post" id="s">    
    <select name="sel" class="form-control" id="exampleFormControlSelect1">
	
      <option selected value="'.$_SESSION['file'].'">'.$_SESSION['file'].'</option>';
				}
				
        while (($file = readdir($dh)) !== false) {
			echo '<option value="'.$file.'">'.$file.'</option>';
       
        }
        closedir($dh);
    }
}

     $MadelineProto->echo('
      

    <input type="text" class="form-control"   name="pars" aria-describedby="emailHelp" value="'.$_SESSION['url'].'"/>
	    <small id="emailHelp" class="form-text text-muted">Ссылка на ваш канал/чат</small>

	    <input type="text" class="form-control"  id="time" name="time" aria-describedby="emailHelp" value="'.$_SESSION['time'].'">
    <small id="emailHelp" class="form-text text-muted">Введите ваш тайминг в секундах.обязятаельно поменяйте значение</small>




  <a  id="go" class="btn btn-primary">Старт</a>
    <a  href="inviters.php" class="btn btn-danger">Стоп</a>

  <a  style="display:none;" id="go2" class="btn btn-warning">Инвайтинг выполняется</a>
</form>


');




?>   
   

 </div>     
  

                            <div class="p-lg-3">

    
</pre>

                            </div> <!-- end padding-->
                        </div>
                        <!--end card body-->
                    </div> <!-- end card-->


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2022 настройки приложения Cicada3301
                        </div>
                        <div class="col-sm-6">
                           
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>