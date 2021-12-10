<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
	border:2px solid black;
	text-align:center;
	font-size: 20px;
	font-family:  Arial, Helvetica, sans-serif;

}
#ba{
    background-color: ligthblue;
}
    </style>
</head>
<body>
    
</body>
</html><?php 
require 'includes/db.inc.php';
$sql = "SELECT * FROM `telepules` ORDER BY `telepules`.`varos` ASC;";
?>
<table>
    <tr>
        <td id="b">varos</td>
        <td>Irányítószám</td>
    </tr>

    <?php
    $result = $conn->query($sql);
        if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["varos"]."</td> <td>".$row["ir"]."</td></tr>";
            }
        }
    ?>
</table>