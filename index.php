
<?php
session_start();
require 'db.inc.php';
require "model/Ulesrend.php";
$tanulo = new ulesrend; ?>
<body>
    <?php

include 'htmlheader.inc.php';
$page = 'index';

if(isset($_REQUEST['page'])){
    if(file_exists('controller/'.$_REQUEST['page'].'.php')){
        $page = $_REQUEST['page'];

    }
}

include 'controller/'.$page.'.php';
?>
</body>


<!--
    /* 
<?php
/*
session_start();

$title = "Főoldal";
include 'htmlheader.inc.php';

   
    //header('Location: belepes.php')*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
   <h1>Hello PHP</h1>
</body>
</html>
-->