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

/*  $query = 'SELECT e_p1 FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){

   $stmt->bind_param('s',$benutzer); */

  $query = "SELECT $produkt FROM einkauf WHERE e_benutzer = ?";

if($stmt = $mysqli->prepare($query)){

   $stmt->bind_param("s", $benutzer);


   $stmt->execute();


   $stmt->store_result();




   $stmt->bind_result($zahl);

   while ($stmt->fetch()) {


   }


   $stmt->free_result();


   $stmt->close();


   }
   echo "$zahl";

$zahl=$zahl+1;
$update="UPDATE `einkauf` SET $produkt = ? WHERE `einkauf`.`e_benutzer` = ?";
if($stmt = $mysqli->prepare($update)){

   $stmt->bind_param("is", $zahl, $benutzer);


   $stmt->execute();
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

/*  $query = 'SELECT e_p1 FROM einkauf WHERE e_benutzer = ?';

if($stmt = $mysqli->prepare($query)){

   $stmt->bind_param('s',$benutzer); */

  $query = "SELECT $produkt FROM einkauf WHERE e_benutzer = ?";

if($stmt = $mysqli->prepare($query)){

   $stmt->bind_param("s", $benutzer);


   $stmt->execute();


   $stmt->store_result();




   $stmt->bind_result($zahl);

   while ($stmt->fetch()) {


   }


   $stmt->free_result();


   $stmt->close();


   }
   echo "$zahl";

$zahl=$zahl-1;
if ($zahl>0) {
  

$update="UPDATE `einkauf` SET $produkt = ? WHERE `einkauf`.`e_benutzer` = ?";
if($stmt = $mysqli->prepare($update)){

   $stmt->bind_param("is", $zahl, $benutzer);


   $stmt->execute();
}
}
}

?>
