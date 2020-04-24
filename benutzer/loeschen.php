<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <link rel="stylesheet" href="../onlineshop.css">
  <title>Online Shop</title>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?> ">  <!-- Formular sendet Daten ans sich selbst -->
  <?php
  $mysqli = new mysqli('localhost','root','','shop'); //Verbindung zur Datenbank
  if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung:". msqli_connect_error();
  exit();
  }
  else {
  //echo "Verbunden<br>";
  }
  ?>
  </head>
<?php
$cookie = "user";
echo "Sie sind als $_COOKIE[$cookie] angemeldet"; //Liest Daten aus Cookie auss
echo "<br>";
echo 'Wenn Sie Ihren Account löschen wollen klicken Sie unten auf Löschen. <br> Das Konto kann danach nicht mehr wiederhergestellt werden!';
echo "<br>";
echo '
<form method="post" action="loeschen.php">
<input type="submit" value="Löschen" name="sent">
</form>';
$benutzer = $_COOKIE[$cookie];
if(isset($_POST['sent'])) { //Bei Absenden des Formulars wird Code ausgeführt
  $del = "DELETE FROM benutzer WHERE b_unsername = ?;"; //Löschen des Beuntzers aus der Datenbank
 if($stmt = $mysqli->prepare($del)){
   $stmt->bind_param('s', $benutzer);
   $stmt->execute();
 }
   $del2 = "DELETE FROM einkauf WHERE e_benutzer = ?;";
  if($stmt = $mysqli->prepare($del2)){
    $stmt->bind_param('s', $benutzer);
    $stmt->execute();
  }
  setcookie ($cookie, "$benutzer", time() -1); //Cookie wird "Deaktiviert" indem das datum in die Vergangenheitgesetzt wird
    header('location: benutzer.php');
exit(1);
  }
  ?>
  </html>
