<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
  <link rel="stylesheet" href="onlineshop.css">
  <?php $benutzer=1;
   $cookie = "user"; $benutzer=$_COOKIE[$cookie];
  $mysqli = new mysqli('localhost','root','','shop');
  if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung:". msqli_connect_error();
  exit();
  }
  else {
  //echo "Verbunden<br>";
  } ?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
</head>
<body>

<h1>Gebäck</h1><br>
<table>
  <tr>
    <td>
      <img src="bilder/brot.png" alt="Brot" width="200" height="200">
      <p>Brot<p>
        <br>
      <p>
        <table>
          <tr>
            <td>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
      	   <input type="submit" value="+" name="plus1">
           </form>
         </td>
            <td>
             <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
         	   <input type="submit" value="-" name="minus1">
              </form></td>
          </tr>
     </table>
      <?php
        if(isset($_POST['plus1'])){
          $query = 'SELECT e_p3 FROM einkauf WHERE e_benutzer = ?';

        if($stmt = $mysqli->prepare($query)){

           $stmt->bind_param('s',$benutzer);


           $stmt->execute();


           $stmt->store_result();




           $stmt->bind_result($e_p1);

           while ($stmt->fetch()) {


           }


           $stmt->free_result();


           $stmt->close();
        $e_p1=$e_p1+1;
        echo "$e_p1";
        $update="UPDATE `einkauf` SET `e_p3` = ? WHERE `einkauf`.`e_benutzer` = ?";
        if($stmt = $mysqli->prepare($update)){

           $stmt->bind_param("is", $e_p1, $benutzer);


           $stmt->execute();
        }
        }
        }
        if(isset($_POST['minus1'])){
          $query = 'SELECT e_p3 FROM einkauf WHERE e_benutzer = ?';

        if($stmt = $mysqli->prepare($query)){

           $stmt->bind_param('s',$benutzer);


           $stmt->execute();


           $stmt->store_result();




           $stmt->bind_result($e_p1);

           while ($stmt->fetch()) {


           }


           $stmt->free_result();


           $stmt->close();

        if ($e_p1>0) {


        $e_p1=$e_p1-1;
        echo "$e_p1";
        $update="UPDATE `einkauf` SET `e_p3` = ? WHERE `einkauf`.`e_benutzer` = ?";
        if($stmt = $mysqli->prepare($update)){

           $stmt->bind_param("is", $e_p1, $benutzer);


           $stmt->execute();
        }
        }
        }
        }
         ?>

    </td>
    <td>
    </td>
  </tr>
</table>

</body>
</html>
