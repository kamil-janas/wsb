<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Strona główna banku</title>
  </head>
  <body>
    <button type="button" name="button"><a href="login.html" >go back</a></button>
    <p>po zalogowaniu -------------------</p>

    <?php
    echo "<p>Witaj ".$_SESSION['login'];
     ?>
  </body>
</html>
