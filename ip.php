<?
session_start();


     
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
                                <h4 class="mb-0 font-size-18">Проверка/смена ип</h4>

                 
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

    <script>
        $(document).ready(function() {

            $("#send").on("click", function () {
                var data = $("#s").serialize();

                $.ajax({
                    type: "POST",
                    url: "invit.php",
                    dataType: "text",
                    data: data,
                    success: function (html) {
				    $("#eror").html(html);


                    },
                });
            });
           
             $("#next").on("click", function () {
             $( "#login").show();
             $( "#prox").hide();

            });
         $("#back").on("click", function () {
             $( "#login").hide();
             $( "#prox").show();

            });
        
        });
    </script>    
    
                            <div class="p-lg-3">
                                



      
      <div class="form-group">
     <div id="updatez">  <? $url = 'http://httpbin.org/ip';
$ch = curl_init();
$s=mt_rand(1, 99999);
$yung='yung';
$mdlog = md5($yung);
$l=md5($s);
$chs=md5($l);

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_PROXY, 'socks5://127.0.0.1:9050');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$curl_scraped_page = curl_exec($ch);
curl_close($ch);
$ipsold=preg_replace('/origin/','',$curl_scraped_page);
if($curl_scraped_page == ''){
			echo '<br><font color="red">  Тор не работает. Нажмите на <a href="start.php" target="_blank">>ЗАПУСК</a>, а затем закройте страницу. И обновите существующую';
}
else{
			echo '<br><font color="green">  Тор работает ваш ип '.$ipsold.'</font>. Нажмите на <a href="stop.php" target="_blank">>СТОП</a>, а затем закройте страницу. И обновите существующую';

}
	
    ?></div>
	 <script>
function update() { 
$("#updatez").load("ip.php #updatez"); 
} 

setInterval(update, 3000);</script>
    </script>  


 
                                               
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