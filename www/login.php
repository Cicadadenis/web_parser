<?
session_start();
$_SESSION['aks']=$_GET['id'];


     
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
                        <li class="menu-title">Инвайт-панель</li>

                        <li>
                            <a href="noproxy.php" class="waves-effect">
                                <i class="mdi mdi-file-document-box-outline"></i>
                                <span>Войти без прокси</span>
                            </a>
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

    <script>
        $(document).ready(function() {

            $("#send").on("click", function () {
                var data = $("#s").serialize();

                $.ajax({
                    type: "POST",
                    url: "proxy.php",
                    dataType: "text",
                    data: data,
                    success: function (html) {
				    $("#eror").html(html);


                    },
                });
            });
           
         
        
        });
    </script>    
    
                            <div class="p-lg-3">
 <div id="eror"></div>     


                        <div id="prox" style="display:show;">    
      <form id="s">
      <div class="form-group">
          <label for="offer">Читай мануал где взять прокси телеграма <a href="manual.php" target="_blank">Мануал</a></label>
    <input type="text" class="form-control"   name="ip" aria-describedby="emailHelp" placeholder="ип:/domen">
        <input type="text" class="form-control" id="chanelme"  name="port" aria-describedby="emailHelp" placeholder="порт">
        
     
              <label for="offer">Если есть пароль на прокси. выберите значение в есть пароль и введите его в поле.</label>
			          <input type="hidden" class="form-control" id="offerf"  name="pass" aria-describedby="emailHelp" value="1">

        <input type="text" class="form-control" id="offerf"  name="lo" aria-describedby="emailHelp" placeholder="логин">
        <input type="text" class="form-control" id="offerf"  name="par" aria-describedby="emailHelp" placeholder="пароль">

    
   
    
  <a  id="send" class="btn btn-primary">Войти</a>

</form></div></div>

      <div id="login" style="display:none;">  
      
<form method="post">
    

</form>



    <a  href="index.php" class="btn btn-primary">Показать данные для прокси</a>


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