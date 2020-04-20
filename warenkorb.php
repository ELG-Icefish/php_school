<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<link rel="stylesheet" href="onlineshop.css">
<head>
  <?php
  include 'wk_qry.php';
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
  ?>
</head>
<body>


<table>
  <th>Warenkorb</th>
  <tr><td>Produkt:</td><td>Anzahl:</td></tr>
  <tr><td> </td><td> </td></tr>
<?php
$produkt="e_p1";
qry($benutzer, $produkt);
$produkt="e_p2";
qry($benutzer, $produkt);
$produkt="e_p3";
qry($benutzer, $produkt);
$produkt="e_p4";
qry($benutzer, $produkt);
$produkt="e_p5";
qry($benutzer, $produkt);
$produkt="e_p6";
qry($benutzer, $produkt);
$produkt="e_p7";
qry($benutzer, $produkt);
$produkt="e_p8";
qry($benutzer, $produkt);
$produkt="e_p9";
qry($benutzer, $produkt);
$produkt="e_p10";
qry($benutzer, $produkt);
$produkt="e_p11";
qry($benutzer, $produkt);
$produkt="e_p12";
qry($benutzer, $produkt);
?>
</table>

</body>
</html>
