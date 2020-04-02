<?php
function plus($benutzer, $produkt) {
  $mysqli = new mysqli('localhost','root','','shop');
  if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung:". msqli_connect_error();
  exit();
  }
  else {
  //echo "Verbunden<br>";
  }
  $query = 'SELECT ? FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){

   $stmt->bind_param('ss', $produkt, $benutzer);


   $stmt->execute();


   $stmt->store_result();




   $stmt->bind_result($zahl);

   while ($stmt->fetch()) {


   }


   $stmt->free_result();


   $stmt->close();
echo "$zahl";
$zahl=$zahl+1;
$update="UPDATE `einkauf` SET ? = ? WHERE `einkauf`.`e_benutzer` = ?";
if($stmt = $mysqli->prepare($update)){

   $stmt->bind_param("sis",$produkt, $e_p1, $benutzer);


   $stmt->execute();
}
}
}
function minus($benutzer, $produkt) {
  $mysqli = new mysqli('localhost','root','','shop');
  if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung:". msqli_connect_error();
  exit();
  }
  else {
  //echo "Verbunden<br>";
  }
  $query = 'SELECT ? FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){

   $stmt->bind_param('ss',$produkt, $benutzer);


   $stmt->execute();


   $stmt->store_result();




   $stmt->bind_result($e_p1);

   while ($stmt->fetch()) {


   }


   $stmt->free_result();


   $stmt->close();
echo "$e_p1";
if ($e_p1>0) {


$e_p1=$e_p1-1;

$update="UPDATE `einkauf` SET ? = ? WHERE `einkauf`.`e_benutzer` = ?";
if($stmt = $mysqli->prepare($update)){

   $stmt->bind_param("sis",$produkt, $e_p1, $benutzer);


   $stmt->execute();
}
}
}
}
?>
