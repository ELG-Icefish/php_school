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

<h1>Fleisch</h1><br>
<table>
  <tr>
    <td>
      <img src="../bilder/steak.jpg" alt="Steak" width="200" height="200">
      <p>Steak<p>
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
        $produkt="e_p7";//gibt an welches Produkt ausgewählt ist
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
      <img src="../bilder/schwein.jpg" alt="Schweinefleisch" width="200" height="200">
      <p>Schweinefleisch<p>
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
        $produkt="e_p8";//gibt an welches Produkt ausgewählt ist
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
      <img src="../bilder/Huhn.jpg" alt="Hühnerkeulen" width="200" height="200">
      <p>Hühnerkeulen<p>
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
        $produkt="e_p9";//gibt an welches Produkt ausgewählt ist
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
