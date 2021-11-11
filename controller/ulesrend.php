
<?php
// form feldolgozása

if(!empty($_POST["hianyzo_id"])) {
	$hianyzo->set_id($_POST["hianyzo_id"], $conn);
}
elseif(!empty($_GET['nem_hianyzo'])) {
	$sql = "DELETE FROM hianyzok WHERE id =".$_GET['nem_hianyzo'];
	$result = $conn->query($sql);	
}

$hianyzok = $hianyzo->lista($conn);

$admin = new Admin(); 
$f = $admin->lista($conn);
$f = array();



$sql = "SELECT id FROM f";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		$f[] = $row['id'];
	}
}

$en = 0;
if(!empty($_SESSION["id"])) $en = $_SESSION["id"];

$tanar = 17;

$tanuloIdk = $tanulo->tanulokListaja($conn);

include 'view/ulesrend.php';