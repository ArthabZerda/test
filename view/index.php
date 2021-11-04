<?php
session_start();
require 'db.inc.php';
require "model/Ulesrend.php";
$tanulo = new ulesrend;

include 'htmlheader.inc.php';

$page = 'index';

if(isset($_REQUEST['page'])){
    if(file_exists('controller/'.$_REQUEST['page'].'.php')){
        $page = $_REQUEST['page'];

    }
}

include 'controller/'.$_page.'.php';
?>

