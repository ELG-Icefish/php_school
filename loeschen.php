<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="onlineshop.css">
<form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
<meta charset=\"utf-8\">
<?php $mysqli = new mysqli('localhost','root','','shop');
if ($mysqli->connect_error)
{ echo "Fehler bei der Verbindung:". msqli_connect_error();
exit();
}
else
{
//echo "Verbunden<br>";
}
?>
<title>Online Shop</title>
<?php
$cookie = "user";
echo "Sie sind als $_COOKIE[$cookie] angemeldet";
echo "<br>";
echo 'Wenn Sie Ihren Account löschen wollen klicken Sie unten auf Löschen. <br> Das Konto kann danach nicht mehr wiederhergestellt werden!';
echo "<br>";
echo '
<form method="post" action="script.php">
<input type="submit" value="Löschen" name="sent">
</form>';
$benutzer = $_COOKIE[$cookie];
if(isset($_POST['sent'])) {
  $del = "DELETE FROM benutzer WHERE b_unsername = ?;";
 if($stmt = $mysqli->prepare($del)){
   $stmt->bind_param('s', $benutzer);
   $stmt->execute();
 }
   $del2 = "DELETE FROM einkauf WHERE e_benutzer = ?;";
  if($stmt = $mysqli->prepare($del2)){
    $stmt->bind_param('s', $benutzer);
    $stmt->execute();
  }
  setcookie ($cookie, "$benutzer", time() -1);
    header('location: benutzer.php');
exit(1);
  }
  ?>
  </html>
