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
                           </div>
                        </li>
 <li>
                            <a href="inviters.php" class="waves-effect">
                                <i class="mdi mdi-file-document-box-outline"></i>
                                <span>Инвайтинг</span>
                            </a>
                        </li>
						   <li>
                            <a href="ip.php" class="waves-effect">
                                <i class="mdi mdi-file-document-box-outline"></i>
                                <span>Смена ип тор</span>
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
                                <h4 class="mb-0 font-size-18">Отправить боту/юезру сообщение</h4>

                 
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
    <div id="eror"></div>  

<p id="sek" style="display:none" >Нажмите кнопку "Проверить сообщение"</p>

   <script>
        $(document).ready(function() {

    
                    $("#go").on("click", function () {
                var data = $("#s").serialize();
$( "#go" ).hide();
$( "#check" ).hide();

$( "#go2" ).show();
                $.ajax({
                    type: "POST",
                    url: "send.php",
                    dataType: "text",
                    data: data,
                    success: function (html) {
				    $("#eror").html(html);

$( "#go" ).show();
$( "#go2" ).hide();
$( "#sek" ).show();
$( "#check" ).show();

$(".secon").load("sendbot.php .secon");
        },
                });
            });
            
              $("#check").on("click", function () {
                var data = $("#s").serialize();
$( "#check" ).hide();
$( "#go" ).hide();

$( "#go3" ).show();
                $.ajax({
                    type: "POST",
                    url: "check.php",
                    dataType: "text",
                    data: data,
                    success: function (html) {
				    $("#eror").html(html);

$( "#go" ).show();
$( "#go3" ).hide();

$( "#show" ).hide();
$( "#sek" ).hide();
$(".secon").load("sendbot.php .secon");

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


  
      
<?
       



	
$MadelineProto = new \danog\MadelineProto\API('sessions/'.$_SESSION['aks'].'.madeline', $settings);


$MadelineProto->async(false);

    $MadelineProto->start();

    $me =  $MadelineProto->getSelf();

    $MadelineProto->logger($me);



 
  

        
//print_r($Peers);

//foreach ($Peers as $participants) {

 //if (array_key_exists("channel_id", $participants)) {
//echo    $participants['channel_id'];

 //}

 
 
//}
     $MadelineProto->echo('
     
<form method="post" id="s">    
      <div class="form-group">
          <label for="offer">Здесь можно поговорить с боттом и юзером просто провести время.<br> <br>
          @SpamBot-показывает ограничение на аккаунте<br> <br>
         </label><br><br><p style="border: 1px solid red;padding: 5px;">Внимание выбирайте боттов которые отвечают на команды,а не кнопкам<br>Вывод ответа от бота возможент только текстом. Получаем последнее сообщение в вашем диалоге<br></p>
          


    <input type="text" class="form-control"   name="name" aria-describedby="emailHelp" placeholder="имя бота @">
    <input type="text" class="form-control"   name="mes" aria-describedby="emailHelp" placeholder="введите команду/сообщение например:/start">

  <a  id="go" class="btn btn-primary">отправить</a>
  <a  id="check"  class="btn btn-warning">Проверить ответ</a>

  <a  style="display:none;" id="go2" class="btn btn-warning">Ждем отправки</a>
  <a  style="display:none;" id="go3" class="btn btn-warning">Ждем ответ</a>

</form>

');






?>   

 </div>     
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
                            2020 настройки приложения OpenBox
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