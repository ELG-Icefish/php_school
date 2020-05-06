<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
  <link rel="stylesheet" href="onlineshop.css">
  <?php
 $benutzer=1;
   $cookie = "user"; $benutzer=$_COOKIE[$cookie];


  include '../qry/kat_qry.php'; ?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">  <!-- Formular sendet Daten ans sich selbst -->
</head>
<body>

<h1>Gebäck</h1><br>
<table>
  <tr>
    <td>
      <img src="../bilder/brot.png" alt="Brot" width="200" height="200">
      <p>Brot     2.19€<p>
        <br>
      <p>
        <table>
          <tr>
            <td>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
      	   <input type="submit" value="+" name="plus">
           </form>
         </td>
            <td>
             <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
         	   <input type="submit" value="-" name="minus">
              </form></td>
          </tr>
     </table>
      <?php
        $produkt="e_p4";//gibt an welches Produkt ausgewählt ist
        if(isset($_POST['plus'])){ // Je nachdem ob "+" oder "-" ausgewählt wurde wird eine der beiden Funktionen ausgeführt
          plus($benutzer, $produkt);
        }

        if(isset($_POST['minus'])){
          minus($benutzer, $produkt);
        }
         ?>

    </td>
    <td>
    </td>
    <td>
    </td>
  </tr>
  <tr>
    <td>
      <img src="../bilder/kaisersemmel.jpg" alt="kaisersemmel" width="200" height="200">
      <p>Kaisersemmel     1.50€<p>
        <br>
      <p>
        <table>
          <tr>
            <td>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
      	   <input type="submit" value="+" name="plus2">
           </form>
         </td>
            <td>
             <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
         	   <input type="submit" value="-" name="minus2">
              </form></td>
          </tr>
     </table>
      <?php
        $produkt="e_p5";//gibt an welches Produkt ausgewählt ist
        if(isset($_POST['plus2'])){ // Je nachdem ob "+" oder "-" ausgewählt wurde wird eine der beiden Funktionen ausgeführt
          plus($benutzer, $produkt);
        }

        if(isset($_POST['minus2'])){
          minus($benutzer, $produkt);
        }
         ?>

    </td>
    <td>
    </td>
    <td>
    </td>
  </tr>
  <tr>
    <td>
      <img src="../bilder/baguette.jpg" alt="Baguette" width="200" height="200">
      <p>Baguette     3.05€<p>
        <br>
      <p>
        <table>
          <tr>
            <td>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
      	   <input type="submit" value="+" name="plus3">
           </form>
         </td>
            <td>
             <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
         	   <input type="submit" value="-" name="minus3">
              </form></td>
          </tr>
     </table>
      <?php
        $produkt="e_p6";//gibt an welches Produkt ausgewählt ist
        if(isset($_POST['plus3'])){ // Je nachdem ob "+" oder "-" ausgewählt wurde wird eine der beiden Funktionen ausgeführt
          plus($benutzer, $produkt);
        }

        if(isset($_POST['minus3'])){
          minus($benutzer, $produkt);
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
