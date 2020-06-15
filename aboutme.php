<!DOCTYPE html>
<html lang="uk">
<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <meta charset="utf-8">
    <title>Моя сторінка</title>
</head>
<body>
<header>
<?php include ("menu.php");?>
</header>
<div >
    <?php include ("rand.php");?>
    <p> Демчук Ярослав Валерійович </p>
</div>

<div class="tablediv">
    <p>Контакти: valsorya.ambrela@gmail.com</p>
</div>

<div class="container">
    <?php
    srand((float) microtime() * 10000);
    $about = array(
    "<p class=\"tablediv\">(Интернет был сделан так хорошо, что многие думают о нём как о натуральном ресурсе вроде Тихого океана, а не как о чём-то, что сделано человеком. Когда в последний раз технология такого масштаба работала без ошибок? В сравнении с этим веб — это шутка. Веб делали любители) – Алан Кей, ученый, создатель объектно-ориентированного программирования.</p>",
    "<p class=\"tablediv\">Я вірю, що інженери врятують світ!!!</p>",
    "<p class=\"tablediv\">Програмування — це розбиття чогось великого і неможливого на щось маленьке і цілком реальне.</p>"
  );
    shuffle($about);
    $rand = array_rand($about, 3);
    echo $about[$rand[0]] . "\n";
    ?>
</div>
<div>
<hr>
<?php include ("footer.php");?>
</div>
</body>
</html>
