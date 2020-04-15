<?php
function qry($benutzer, $produkt) {
  echo "$benutzer";
  echo "$produkt";
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
}
?>
