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

<h1>Süßigkeiten</h1><br>
<table>
  <tr>
    <td>
      <img src="../bilder/Gummi.jpg" alt="Gummibären" width="200" height="200">
      <p>Gummibären<p>
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
        $produkt="e_p10";//gibt an welches Produkt ausgewählt ist
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
      <img src="../bilder/Schokolade.jpg" alt="Schokolade" width="200" height="200">
      <p>Schokolade<p>
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
        $produkt="e_p11";//gibt an welches Produkt ausgewählt ist
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
      <img src="../bilder/Baklava.jpg" alt="Baklava"  height="200">
      <p>Baklava<p>
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
        $produkt="e_p12";//gibt an welches Produkt ausgewählt ist
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
