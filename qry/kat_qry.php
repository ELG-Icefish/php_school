<?php
function plus($benutzer, $produkt) { //Erstellt Funktion
  $mysqli = new mysqli('localhost','root','','shop');
  if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung:". msqli_connect_error();
  exit();
  }
  else {
  //echo "Verbunden<br>";
  }

 $query = "SELECT $produkt FROM einkauf WHERE e_benutzer = ?"; //Liest aus der Tablelle einen Wert aus

if($stmt = $mysqli->prepare($query)){

   $stmt->bind_param("s", $benutzer);


   $stmt->execute();


   $stmt->store_result();




   $stmt->bind_result($zahl); //Belegt die Variable $zahl mit dem Ergebniss der Abfrage

   while ($stmt->fetch()) {


   }


   $stmt->free_result();


   $stmt->close();


   }


$zahl=$zahl+1;
echo "$zahl";
$update="UPDATE `einkauf` SET $produkt = ? WHERE `einkauf`.`e_benutzer` = ?"; //Ersetzt in der Datenbank den wert durch die neue Anzahl
if($stmt = $mysqli->prepare($update)){

   $stmt->bind_param("is", $zahl, $benutzer);


   $stmt->execute();
}
}


function minus($benutzer, $produkt) { //Selber Code wie Oben nur mit - anstatt +
  $mysqli = new mysqli('localhost','root','','shop');
  if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung:". msqli_connect_error();
  exit();
  }
  else {
  //echo "Verbunden<br>";
  }

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


$zahl=$zahl-1;
if ($zahl>=0) { //Verhindert dass der wert auf einen negative Zahl gesetz wird
  echo "$zahl";


$update="UPDATE `einkauf` SET $produkt = ? WHERE `einkauf`.`e_benutzer` = ?";
if($stmt = $mysqli->prepare($update)){

   $stmt->bind_param("is", $zahl, $benutzer);


   $stmt->execute();
}
}
else {
  $zahl=0;
  echo "$zahl";
}
}

?>
