<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
                   maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ваши двери</title>
    <link rel="stylesheet" href="<?=  '../../public/bootstrap/bootstrap.min.css'?>">
    <link href="<?= '../../public/css/style.css'?>" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <?php echo $this->getMeta()?>
</head>
<body>

<div class="container header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">
            <div class="logo"><span class="green">ВАШИ</span> ДВЕРИ</div>
        </a>
        <ul class="navbar-nav">
            <li class="nav-item">
                <div class="header-info">
                    <p class="phone-number">+380714014212</p>
                    <p class="phone-number">+380957807100</p>
                </div>
            </li>
        </ul>
    </nav>
</div>

<div class="container-fluid big-image-block">
    <div class="image-block-text">
        <div class="image-block-text-inner">
            <h1>МЕЖКОМНАТНЫЕ И ВХОДНЫЕ ДВЕРИ</h1>
            <p>Производство и монтаж дверей в Донецке и Донецкой области</p>
        </div>
    </div>
</div>

<?php echo $content; ?>


<div class="container footer">
    <div class="row">
        <div class="footer-info col-sm-4">
            <p class="address">Донецкая область, Макеевка, улица Новая Сергия, д. 6А</p>
        </div>
        <div class="footer-info col-sm-4">
            <div class="logo"><span class="green">ВАШИ</span> ДВЕРИ</div>
        </div>
        <div class="footer-info col-sm-4">
            <p>Остались вопросы?</p>
            <p class="phone-number">+380714014212</p>
            <p class="phone-number">+380957807100</p>
        </div>
    </div>
</div>
<?php
//$logs = \RedBeanPHP\R::getDatabaseAdapter()
//        ->getDatabase()
//        ->getLogger();
//debug($logs->grep('SELECT'));
//?>
</body>
</html>