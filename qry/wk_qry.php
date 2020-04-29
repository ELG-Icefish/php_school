<?php
function qry($benutzer) { //erstellt Funktion
  $mysqli = new mysqli('localhost','root','','shop');
  if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung:". msqli_connect_error();
  exit();
  }
  else {
  //echo "Verbunden<br>";
  }
  $ges = 0;
  for ($x = 1; $x < 13; $x++) {
      $produkt= "e_p".$x;
  $query = "SELECT $produkt FROM einkauf WHERE e_benutzer = ?";
if($stmt = $mysqli->prepare($query)){
   $stmt->bind_param('s', $benutzer);
   $stmt->execute();
   $stmt->store_result();
   $stmt->bind_result($e_p1);
   while ($stmt->fetch()) {
   }
   $stmt->free_result();
   $stmt->close();
   }
   $query2 = "SELECT p_long FROM produkte WHERE p_short = ?";
 if($stmt = $mysqli->prepare($query2)){
    $stmt->bind_param('s', $produkt);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($p_name);
    while ($stmt->fetch()) {
    }
    $stmt->free_result();
    $stmt->close();
    }
    $query3 = "SELECT p_preis FROM produkte WHERE p_short = ?";
  if($stmt = $mysqli->prepare($query3)){
     $stmt->bind_param('s', $produkt);
     $stmt->execute();
     $stmt->store_result();
     $stmt->bind_result($p_preis);
     while ($stmt->fetch()) {
     }
     $stmt->free_result();
     $stmt->close();
     }
   if ($e_p1>0) {
     $preis=$e_p1*$p_preis/100;
   echo "<tr>";
   echo "<td>";
   echo "$p_name";
   echo "</td>";
   echo "<td>";
   echo "$e_p1";
   echo "</td>";
   echo "<td>";
   echo $preis."€";
   echo "</td>";
   echo "</tr>";
   $ges=$ges+$e_p1*$p_preis;

}
}
echo "<tr>";
echo "<td>";
echo "Gesamt";
echo "</td>";
echo "<td>";
echo "";
echo "</td>";
echo "<td>";
echo ($ges/100)."€";
echo "</td>";
echo "</tr>";
}
function clear($benutzer) {
  $mysqli = new mysqli('localhost','root','','shop');
  if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung:". msqli_connect_error();
  exit();
  }
  else {
  //echo "Verbunden<br>";
  }
  for ($x = 1; $x < 13; $x++) {
      $produkt= "e_p".$x;


$update="UPDATE `einkauf` SET $produkt = 0 WHERE `einkauf`.`e_benutzer` = ?";
if($stmt = $mysqli->prepare($update)){

   $stmt->bind_param("s", $benutzer);


   $stmt->execute();
}
}

header('location:'.$_SERVER['PHP_SELF']);
}
?>
