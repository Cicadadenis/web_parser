<? include('simplehtmldom_1_9_1/simple_html_dom.php');?>
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
                            <a href="account.php" class="waves-effect">
                                <i class="mdi mdi-file-document-box-outline"></i>
                                <span>Сменить аккаунт</span>
                            </a>
                        </li>
						 <li>
                            <a href="account.php" class="waves-effect">
                                <i class="mdi mdi-file-document-box-outline"></i>
                                <span>Удалить аккаунт</span>
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
<p id="sek" style="display:none" > Через <span class="secon" >25</span> секунд будет повторный инвайт</p>
	 <script>
        $(document).ready(function() {

           
			    
        		    
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
          <label for="offer">
          <p style="border: 1px solid red;padding: 5px;">В случае ошибки с прокси пожалуйста нажмите удалить ссесию <a href="del.php">Удалить сессию</a><br></p></label>
               </div>
			   <div id="dsd"></div>
			
	<?
	ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
		if (empty($_GET['name'])){
			$dir='channels';

			if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        echo '
<form method="post" id="s">    
<label for="offer">
          <p >Выбери файл с юзером который необходимо проверить </label>
    <select  onchange="window.location.href=this.options[this.selectedIndex].value" name="sel" class="form-control" id="exampleFormControlSelect1">
	    <option >Ссылка №1</option>

      <option selected>Выберите файл из списка</option>' ;
      
        while (($file = readdir($dh)) !== false) {
        echo 'filename: .'.$file.'<br />


  
 <option VALUE="checks.php?st=0&&name='.$file.'">'.$file.'</option>

 
  ';
        }
        closedir($dh);
    }
}
			
			
		}
	if (isset($_GET['name'])){
		$dir='channels';

   $string = file_get_contents("channels/".$_GET['name']."");
$i='0';
$g='0';
$task_array = json_decode($string,true);
$num_str =  count($task_array);

foreach($task_array as $key=> $x){
	$id=$x['username'];
	$i++;
	if($i=='1'){
	echo" Количество юзеров:".$num_str." если вдруг в браузере нет юзеров нажмите перезагрузить <a href='checks.php?st=".$key."&&name=".$_GET['name']."'>Перейти к 1 юзеру</a> либо
это удаленный аккаунт и нажмите удалить.
				  			  <a class='dels' href='delids.php?del=".$key."&&name=".$_GET['name']."'><button type='button' class='btn btn-danger'>Удалить</button></a> 

	";
	
	}
	
if($key==$_GET['st']){
	$g++;
	$us=$key;
	$key=$key+'1';
		$back=$us-'1';

//$homepage = file_get_contents('https://t.me/'.$id.'');
//echo $homepage;
$html = file_get_html('https://t.me/'.$id.'');
  $title=$html->find('div[class=tgme_page_title]')[0]->innertext;
    $img=$html->find('div[class=tgme_page_photo]')[0]->innertext;
	    $username=$html->find('div[class=tgme_page_extra]')[0]->innertext;

echo' <p clas="block" style="border: 5px solid red;padding: 5px;"><button type="button" class="btn btn-success">Имя:'.$title.'</button><br>'.$img.'</p>

			  			  <a class="dels" href="delids.php?del='.$us.'&&name='.$_GET["name"].'"><button type="button" class="btn btn-danger">Удалить</button></a> 
			  <a href="checks.php?st='.$back.'&&name='.$_GET["name"].'"><button type="button" class="btn btn-secondary">Предыдущий</button></a>

			  <a href="checks.php?st='.$key.'&&name='.$_GET["name"].'"><button type="button" class="btn btn-warning">Следующий</button></a>
			  			  <a href="checks.php"><button type="button" class="btn btn-warning">Новый файл посмотреть</button></a>

<br><label for="sa">Юзеров в файле:'.$num_str.'<br> Вы смотрите юзера:'.$us.'<br></label>
';



}



}
if($g <'1'){
			$s=$_GET['st']+'1';

echo "<font color='red'>
Похоже пусто.Юзеров в файле".$num_str.". Если не пусто нажмите пропустить</br>
			  <a href='checks.php?st=".$s."&&name=".$_GET["name"]."'><button type='button' class='btn btn-warning'>Пропустить</button></a>
			  			  <a href='checks.php'><button type='button' class='btn btn-warning'>Новый файл посмотреть</button></a>

					";
}
if ($_GET['st']==$num_str){
	echo '<p style="border: 5px solid red;padding: 5px;">Юзеры закончились';
	
}
	}
?> 	

	
   </div>   

   
               <form id="sta" style="display:none">
   <a  id="stas" class="btn btn-primary"></a>
  
    
    
</form>                   

   

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