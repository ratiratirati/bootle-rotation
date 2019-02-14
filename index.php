<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fonts.css">
</head>
<body>
<?php

$x = rand(1,4);

$msg = '';
if(isset($_POST['click'])){

    echo "<style>.ss{display: none;}</style>";

    if($x == 1){
        $msg = "<img class='img1' src='img/bootle.png' style='width: 150px;'>";
    }

    elseif($x == 2){
        $msg = "<img class='img2' src='img/bootle.png' style='width: 150px;'>";
    }

    elseif($x == 3){
        $msg = "<img class='img3' src='img/bootle.png' style='width: 150px;'>";
    }

    elseif($x == 4){
        $msg = "<img class='img4' src='img/bootle.png' style='width: 150px;'>";
    }


}


?>
<form method="post" action="index.php">
    <div class="form_box">
    <?php echo $msg;?>
    <img class="ss" src="img/bootle.png" style='width: 150px;'>
    <br>
    <button name="click">დატრიალება</button>
    </div>
</form>
</body>
</html>
