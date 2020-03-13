<!DOCTYPE html>;
<html>
<head>
  <meta charset=\"utf-8\">
  <title>Online Shop</title>
  <?php
  $mysqli = new mysqli('localhost','root','','shop');
  if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung:". msqli_connect_error();
  exit();
  }
  else {
  echo "Verbunden<br>";
  }
  ?>
</head>
<body>

  

</body>
</html>
