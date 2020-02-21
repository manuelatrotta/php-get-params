//Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.

<?php
  $password = $_GET["password"];
  if ($password == "Boolean") {
    $class = "green";
    $messaggio = "La password corrisponde";
  }
  else {
    $class = "red";
    $messaggio = "siamo spiacenti la password non corrisponde";
  }

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      .green {
        color: green;
      }
      .red {
        color: red;
      }
    </style>
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
      <h1 class="<?php echo $class ?>"> <?php echo $messaggio ?> </h1>
  </body>
</html>
