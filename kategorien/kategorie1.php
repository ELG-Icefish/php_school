<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
  <?php
 $benutzer=1;
   $cookie = "user"; $benutzer=$_COOKIE[$cookie];


  include '../qry/kat_qry.php';  ?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">  <!-- Formular sendet Daten ans sich selbst -->
</head>
<body>

<h1>Lebensmittel</h1><br>
<table>
  <tr>
    <td>
      <img src="../bilder/karotte.jpg" alt="Karotte" width="200" height="200">
      <p>Karotte     1.15€<p>
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
        $produkt="e_p1";//gibt an welches Produkt ausgewählt ist
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
      <img src="../bilder/apfel.jpg" alt="Apfel" width="200" height="200">
      <p>Apfel     0.59€<p>
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
       $produkt="e_p2";//gibt an welches Produkt ausgewählt ist
       if(isset($_POST['plus2'])){ // Je nachdem ob "+" oder "-" ausgewählt wurde wird eine der beiden Funktionen ausgeführt
         plus($benutzer, $produkt);
       }

       if(isset($_POST['minus2'])){
         minus($benutzer, $produkt);
       }
        ?>
  </tr>
  <tr>
    <td>
      <img src="../bilder/weintraube.jpg" alt="weintraube"  height="200">
      <p>Weintraube     0.99€<p>
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
        $produkt="e_p3";//gibt an welches Produkt ausgewählt ist
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
