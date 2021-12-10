<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
$cm=1;
while($cm<3){ // ha a fájl egész méretét akkor !feof($myfile)
    echo $cm . ": ";
    echo fgets($myfile). "<br>";
    $cm++;
}
fclose($myfile);
rename("newfile.txt" , "oldfile.txt");
copy("oldfile.txt", "copyfile.txt");
$myfile = fopen("copyfile.txt", "r") or die("Unable to open file!");
$c2=1;
while($c2<3){ // ha a fájl egész méretét akkor !feof($myfile)
    echo $c2 . ": ";
    echo fgets($myfile). "<br>";
    $c2++;
}
unlink("oldfile.txt");

?>