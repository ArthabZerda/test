<?php
require 'includes/db.inc.php';

set_time_limit(500);
$myfile = fopen("telepulesek.txt" , "r");
while(!feof($myfile)){
    $tArray = explode("\t",fgets($myfile));
    $sql = "INSERT INTO `telepules` (`ir`, `varos`) VALUES ('".$tArray[0]."', '".$tArray[1]."');";
    $conn->query($sql);
}
fclose($myfile);


?>

