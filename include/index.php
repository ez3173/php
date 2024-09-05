<?php
    $menu = [
        "home" => "home.php",
        "presentation"=> "presentation.php"
    ];
    if(isset($_GET['action']))
    {
        $action = htmlspecialchars($_GET ['action']);
        if(array_key_exists($action,$menu)){

            
        }
        else{
            header("LOCATION:404.php");
        }
    }else{
        $myMenu = $menu['home'];

    }



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include ("partials/header.php");
        include("view/".$myMenu);


    ?>
</body>
</html>