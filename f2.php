<?php
    /**
    * Скрипт загрузки файлов
    * Site: http://bezramok-tlt.ru
    * PHP загрузка файлов на сервер
    */
    
    //Устанавливаем кодировку и вывод всех ошибок
    header('Content-Type: text/html; charset=UTF-8');
    
    //Каталог загрузки картинок
    $uploadDir = 'chattxt';
    
    //Вывод ошибок
    $err = array();
    
    //Коды ошибок загрузки файла
    $errUpload = array( 
                         0 => 'Ошибок не возникло, файл был успешно загружен на сервер. ', 
                         1 => 'Размер принятого файла превысил максимально допустимый размер, который задан директивой upload_max_filesize конфигурационного файла php.ini.', 
                         2 => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE, указанное в HTML-форме.', 
                         3 => 'Загружаемый файл был получен только частично.', 
                         4 => 'Файл не был загружен.', 
                         6 => 'Отсутствует временная папка. Добавлено в PHP 4.3.10 и PHP 5.0.3.' 
                      ); 
                      
    //Определяем типы файлов для загрузки

            
   
    //Если нажата кнопка загрузить
    if(isset($_POST['upload']))
    {
		
        //Проверяем пустые данные или нет
        if(!empty($_FILES))
        {
            //Проверяем на ошибки
            if($_FILES['files']['error'] > 0)
                $err[] = $errUpload[$_FILES['files']['error']];
                
            //Проверям тип файла для загрузки
           
            //Если нет ошибок то грузим файл
            if(empty($err))
            {
				        $file1=$_FILES['file1']['name']=$newname."";


                $type = pathinfo($_FILES['files']['name']);
                $name = $uploadDir .'/'. uniqid('files_') .'.'. $type['extension'];
                move_uploaded_file($_FILES['files']['tmp_name'],$name);
                
                //Сбрасываем POST параметры
                header('Location: f2.php?name='. $name.'&nam='.$_POST['nam'].'');
                exit;
            }
            else
                echo implode('<br>', $err);
        }

    }
    
    //Сообщение об успешной загрузке файла на сервер
    if(isset($_GET['name']))
		$fh = fopen($_GET['name'],'r');
// define an eampty array
$data = array();
// read data
while ($line = fgets($fh)) {
    // if the line has some data
   if(trim($line)!=''){
       // explode each line data 
       $line_data = explode('-',$line);
       // push data to array
       //array_push($data,array('item'=>trim($line_data[0]),'value'=>trim($line_data[1])));
       $data[]=array('url'=>trim($line_data[0]));
   }
}
fclose($fh);

// json encode the array
$s=$_GET['nam'];
$file = fopen("chat/$s.json", "a+");
fwrite($file, json_encode($data, FILE_APPEND | LOCK_EX  ));
fclose($file);
        echo '<h1>Файл <font color="red">'. htmlentities($_GET['name']) .'</font> успешно переобразовали!</h1>Можете вступать в чаты нажмите на ссылку <a href="inviters.php">Перейти</a>'; 
        
    
	
?>