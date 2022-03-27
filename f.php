<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>В</title>
        <style>
            #wrap{
                width:400px;
                height:100%;
                display:block;
                margin:0 auto;
            }
            h2{
                text-align:center;
            }
        </style>
    </head>
    <body>
        <div id="wrap">
            <h2>Все ссылки в txt в чаты должны быть такими @username<br> https://t.me/username/<br><a href="inviters.php">Вернутся в инвайтерs</a></h2>
            <form enctype="multipart/form-data" method="post" action="f2.php">
                <p>Загрузите ваши чаты на сервер</p>
              <input type="text" id="login" name="nam"   class="form-control" placeholder="Имя файла/чата">

                <p><input type="file" name="files">
                <input type="submit" value="Отправить" name="upload"></p>
            </form>
        </div>
    </body>
</html>