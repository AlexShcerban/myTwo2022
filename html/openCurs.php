<?php

    require_once "../config/connect.php";
    $id = $_GET["cursId"];
    $content_name = mysqli_query($connect, "SELECT * FROM `content`");
    $content_name = mysqli_fetch_all($content_name);

    // Создания списка из глав курса
    $content_all = [];
    for($x = 0; $x < count($content_name); $x++)
    {
        if($content_name[$x][1] == $id)
        {
            array_push ($content_all, $content_name[$x]);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Создание оглавления курса -->
    <?php 
    foreach($content_all as $content_one){ ?>
    <a href = "content.php?content=<?= $content_one[0] ?>"><?= $content_one[2] ?></a>
    <br>
    <?php } ?>


</body>
</html>