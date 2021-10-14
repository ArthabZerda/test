<?php


   
    //header('Location: belepes.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title><?php echo $title; ?></title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navid" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        
        <?php  
        $szoveg = "Belépés";
        $link = 'belepes.php';
          $menupontok = array('index.php' => 'Főoldal',  'ulesrend.php' => 'Ülésrend', 'belepes.php' => 'Belépés', 'bruh1.php' => 'BRUH', $link => $szoveg);

            foreach($menupontok as $key => $value){
                $active='';
                if($_SERVER['REQUEST_URI']== '/test/'.$key) $active = 'active;'
                ?>
                <li class="nav-item">
          <a class="nav-link " aria-current="page" href="<?php echo $key;?>"><?php echo $value;?></a>
        </li>
           <?php }
//asfgasdfgasdf
          if(!empty($_SESSION["id"])){ 
              echo "<li class='nav-item'> <a class='nav-link active' aria-current='page' href='logout.php' id='lg'> Kilépés</a></li>";

            }
            if(!empty($_SESSION["id"])){
                echo "<li class='nav-item'> <a class='nav-link active ' aria-current='page'>Üdv ".$_SESSION['nev']."!</a></li>";}
            ?></a>
        
        
    </div>
  </div>
</nav>

</body>
</html>
