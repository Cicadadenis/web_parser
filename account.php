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
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">

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
                                <h4 class="mb-0 font-size-18">Инвайт</h4>

                 
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
              $("#proxygo").on("click", function () {
                var data = $("#proxy").serialize();

                $.ajax({
                    type: "GET",
                    url: "index.php",
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
     
                                

<?
if ($count=='0'){

}
else {
echo 'У вас аккаунтов:'.$_SESSION['ak'].'<br>Перейти в <br>';

}
$i='0';
$count='0';
$dir='sessions';
$dir = opendir('sessions');
while($file = readdir($dir)){
    if($file == '.' || $file == '..' || is_dir('session' . $file)){
        continue;
    }
        $ext = pathinfo($file, PATHINFO_EXTENSION);

if (strtolower($ext) == 'madeline') {
    $count++;
	$_SESSION['ak']= $count;
	
	if ($count>'0'){
	echo '<br>  <a  href="refresht.php?id='.$count.'" id="go2" class="btn btn-warning">'.$count.' аккаунт</a>
	<br/>
';    
}

	
	
}
}
if ($count=='0'){
	$new=$count++;
	echo 'У вас нет аккаунтов. <br>  <a  href="login.php?id='.$count.'" id="go2" class="btn btn-warning">Добавить аккаунт</a>
';
	
	
}
else{
$count=$count+1;
echo 'Добавить новый аккаунт:<br>  <a  href="login.php?id='.$count.'" id="go2" class="btn btn-warning">Добавить</a>
';
	
	
}
if ($_GET['error']=='1'){
	$_SESSION['ak']=$_SESSION['ak']-1;
	echo "<font color='red'>Все аккаунты в спам блоке</font>
";
	
	
}
	
	
	

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