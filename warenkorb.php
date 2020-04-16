<!DOCTYPE html>
<meta charset="UTF-8">
<html>
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
//Produkt 1
/*
$query = 'SELECT e_p1 FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){
$stmt->bind_param('s',$benutzer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($e_p1);
while ($stmt->fetch()) {
}
$stmt->free_result();
$stmt->close();
}
if ($e_p1>0) {
echo "<tr>";
echo "<td>";
echo "Karotte";
echo "</td>";
echo "<td>";
echo "$e_p1";
echo "</td>";
echo "</tr>";
}
//Produkt 2
$query = 'SELECT e_p2 FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){
$stmt->bind_param('s',$benutzer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($e_p2);
while ($stmt->fetch()) {
}
$stmt->free_result();
$stmt->close();
}
if ($e_p2>0) {
echo "<tr>";
echo "<td>";
echo "Apfel";
echo "</td>";
echo "<td>";
echo "$e_p2";
echo "</td>";
echo "</tr>";
}
//Produkt 3
$query = 'SELECT e_p3 FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){
$stmt->bind_param('s',$benutzer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($e_p3);
while ($stmt->fetch()) {
}
$stmt->free_result();
$stmt->close();
}
if ($e_p3>0) {
echo "<tr>";
echo "<td>";
echo "Brot";
echo "</td>";
echo "<td>";
echo "$e_p3";
echo "</td>";
echo "</tr>";
}
//Produkt 4
$query = 'SELECT e_p4 FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){
$stmt->bind_param('s',$benutzer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($e_p4);
while ($stmt->fetch()) {
}
$stmt->free_result();
$stmt->close();
}
if ($e_p4>0) {
echo "<tr>";
echo "<td>";
echo "produkt4";
echo "</td>";
echo "<td>";
echo "$e_p4";
echo "</td>";
echo "</tr>";
}
//Produkt 5
$query = 'SELECT e_p5 FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){
$stmt->bind_param('s',$benutzer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($e_p5);
while ($stmt->fetch()) {
}
$stmt->free_result();
$stmt->close();
}
if ($e_p5>0) {
echo "<tr>";
echo "<td>";
echo "produkt5";
echo "</td>";
echo "<td>";
echo "$e_p5";
echo "</td>";
echo "</tr>";
}
//Produkt 6
$query = 'SELECT e_p6 FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){
$stmt->bind_param('s',$benutzer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($e_p6);
while ($stmt->fetch()) {
}
$stmt->free_result();
$stmt->close();
}
if ($e_p6>0) {
echo "<tr>";
echo "<td>";
echo "produkt6";
echo "</td>";
echo "<td>";
echo "$e_p6";
echo "</td>";
echo "</tr>";
}
//Produkt 7
$query = 'SELECT e_p7 FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){
$stmt->bind_param('s',$benutzer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($e_p7);
while ($stmt->fetch()) {
}
$stmt->free_result();
$stmt->close();
}
if ($e_p7>0) {
echo "<tr>";
echo "<td>";
echo "produkt7";
echo "</td>";
echo "<td>";
echo "$e_p7";
echo "</td>";
echo "</tr>";
}
//Produkt 8
$query = 'SELECT e_p8 FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){
$stmt->bind_param('s',$benutzer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($e_p8);
while ($stmt->fetch()) {
}
$stmt->free_result();
$stmt->close();
}
if ($e_p8>0) {
echo "<tr>";
echo "<td>";
echo "produkt8";
echo "</td>";
echo "<td>";
echo "$e_p8";
echo "</td>";
echo "</tr>";
}
//Produkt 9
$query = 'SELECT e_p9 FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){
$stmt->bind_param('s',$benutzer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($e_p9);
while ($stmt->fetch()) {
}
$stmt->free_result();
$stmt->close();
}
if ($e_p9>0) {
echo "<tr>";
echo "<td>";
echo "produkt9";
echo "</td>";
echo "<td>";
echo "$e_p9";
echo "</td>";
echo "</tr>";
}
//Produkt 10
$query = 'SELECT e_p10 FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){
$stmt->bind_param('s',$benutzer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($e_p10);
while ($stmt->fetch()) {
}
$stmt->free_result();
$stmt->close();
}
if ($e_p10>0) {
echo "<tr>";
echo "<td>";
echo "produkt10";
echo "</td>";
echo "<td>";
echo "$e_p10";
echo "</td>";
echo "</tr>";
}
//Produkt 11
$query = 'SELECT e_p11 FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){
$stmt->bind_param('s',$benutzer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($e_p11);
while ($stmt->fetch()) {
}
$stmt->free_result();
$stmt->close();
}
if ($e_p11>0) {
echo "<tr>";
echo "<td>";
echo "produkt11";
echo "</td>";
echo "<td>";
echo "$e_p11";
echo "</td>";
echo "</tr>";
}
//Produkt 12
$query = 'SELECT e_p12 FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){
$stmt->bind_param('s',$benutzer);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($e_p12);
while ($stmt->fetch()) {
}
$stmt->free_result();
$stmt->close();
}
if ($e_p12>0) {
echo "<tr>";
echo "<td>";
echo "produkt12";
echo "</td>";
echo "<td>";
echo "$e_p12";
echo "</td>";
echo "</tr>";
}

*/?>
</table>

</body>
</html>
