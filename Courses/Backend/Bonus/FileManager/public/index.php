<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="container">
    <div class="site-header"></div>
    <h1>Список папок</h1>

    <?php
     require __DIR__ . '/../app/components/FileManager.php';

     $fm = new \app\components\FileManager(__DIR__);
     echo $fm->makeList('/catalog');

     /* echo makeFileList(__DIR__.'/catalog'); */

     ?>

    <footer>
        <h2>Мои онлайн курсы</h2>
        <div class="block-25">
            <a href="http://js.itgid.info/" target="_blank">
                <div class="block-cover">
                    <img src="http://itgid.info/images/header_.png" alt="">
                    <h3>Практический Javascript</h3>
                </div>
            </a>
        </div>

        <div class="block-25">
            <a href="http://php.itgid.info/" target="_blank">
                <div class="block-cover">
                    <img src="http://itgid.info/images/header_.png" alt="">
                    <h3>Практический PHP</h3>
                </div>
            </a>
        </div>

        <div class="block-25">
            <a href="http://js.itgid.info/" target="_blank">
                <div class="block-cover">
                    <img src="http://itgid.info/images/header_.png" alt="">
                    <h3>Практический Верстка</h3>
                </div>
            </a>
        </div>

        <div class="clearfix"></div>
    </footer>
</div>

<script src="js/app.js"></script>
</body>
</html>


