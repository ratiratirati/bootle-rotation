<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
</head>
<body>
<?php

$x = rand(1,6);

$msg = '';
if(isset($_POST['click'])){

    echo "<style>.ss{display: none;}</style>";
    echo "<iframe src='sound/sound.mp3' allow='autoplay' style='display:none;'></iframe>";

    if($x == 1){
        $msg = "<img  src='img/1.png' style='width: 50%;'>";
    }

    elseif($x == 2){
        $msg = "<img  src='img/2.png' style='width: 50%;'>";
    }

    elseif($x == 3){
        $msg = "<img  src='img/3.png' style='width: 50%;'>";
    }

    elseif($x == 4){
        $msg = "<img  src='img/4.png' style='width: 50%;'>";
    }

     elseif($x == 5){
        $msg = "<img  src='img/5.png' style='width: 50%;'>";
    }

     elseif($x == 6){
        $msg = "<img  src='img/6.png' style='width: 50%;'>";
    }




}


?>
<form method="post" action="index.php">
    <div class="form_box">
    <?php echo $msg;?>
    <img class="ss" src="img/1.png" style='width: 50%;'>
    <br>
    <button name="click">დატრიალება</button>
    </div>
</form>
</body>
</html>
