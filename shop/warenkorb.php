<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<link rel="stylesheet" href="../onlineshop.css">
<form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
<head>
  <?php
  include '../qry/wk_qry.php';
  /*$mysqli = new mysqli('localhost','root','','shop');
  if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung:". msqli_connect_error();
  exit();
  }
  else {
  //echo "Verbunden<br>";
}*/

  $cookie = "user";
  $benutzer = $_COOKIE[$cookie];
  setcookie($benutzer, "0", "/");
  ?>
</head>
<body>


<table>
  <th>Warenkorb</th>
  <tr><td>Produkt:</td><td>Anzahl:   </td><td>Preis:</td></tr>
  <tr><td> </td><td> </td></tr>
<?php
qry($benutzer);
?>

<tr>
  <td>
<form method="post" action="script.php">
 <input type="submit" value="Warenkorb leeren" name="sent">
 </form>
<?php
 if(isset($_POST['sent'])){
   clear($benutzer);
 }
?>
</td>
<td>
</td>
<td>
</td>
</tr>
</table>
</body>
</html>
