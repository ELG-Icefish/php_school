<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
  <link rel="stylesheet" href="onlineshop.css">
  <?php
 $benutzer=1;
   $cookie = "user"; $benutzer=$_COOKIE[$cookie];


  include 'qry.php'; ?>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
</head>
<body>

<h1>Lebensmittel</h1><br>
<table>
  <tr>
    <td>
      <img src="bilder/karotte.jpg" alt="Karotte" width="200" height="200">
      <p>Karotte<p>
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
        $produkt="e_p1";
        if(isset($_POST['plus'])){
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
      <img src="bilder/apfel.jpg" alt="Apfel" width="200" height="200">
      <p>Apfel<p>
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
       $produkt="e_p2";
       if(isset($_POST['plus2'])){
         plus($benutzer, $produkt);
       }

       if(isset($_POST['minus2'])){
         minus($benutzer, $produkt);
       }
        ?>
  </tr>
  <tr>
    <td>
      <img src="bilder/placeholder.png" alt="placeholder" width="200" height="200">
      <p>produkt3<p>
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
        $produkt="e_p3";
        if(isset($_POST['plus3'])){
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
