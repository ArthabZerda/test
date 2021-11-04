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
    <title>Document</title>
</head>
<body>
    <!--
    <div><a href='index.php'>Főoldal</a></div>
    <div><a href='ulesrend.php'>Ülésrend</a></div>
    <div><a href='belepes.php'>-->
    <?php 
    
    if(!empty($_SESSION["id"])) echo "Kilépés";
    else echo "Belépés";
    ?>
    </a>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Főoldal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="ulesrend.php">Ülésrend</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="belepes.php"><?php  
          
          if(!empty($_SESSION["id"])){ 
              echo "Kilépés";
}else echo "Belépés"; ?></a>
        </li>
        
    </div>
  </div>
</nav>

   </div>
</body>
</html>
