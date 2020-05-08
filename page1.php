<?php 
   include_once('verifsession.inc.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1> ceci est une autre page</h1>
   <?php 
      echo "Bienvenue ".$_SESSION['login']."...";
    ?>
    <a href="logout.php">Se déconnecter</a>
    
</body>
</html>