<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
  <?php
 $benutzer=1;
   $cookie = "user"; $benutzer=$_COOKIE[$cookie];
   echo $benutzer;

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
        $produkt="e_p2";
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
</table>

</body>
</html>
