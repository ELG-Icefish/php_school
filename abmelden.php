<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="onlineshop.css">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
    <meta charset="utf-8" />
  </head>
  <body>
    <?php
    $cookie = "user";
    if(isset($_COOKIE[$cookie])) {
      echo "Sie sind als $_COOKIE[$cookie] angemeldet";
      echo "<br>";
      echo '<a href="shop.php">Zurück zum Shop</a>';
      echo "<br>";
      echo'Benutzer wechseln:<br>';
      echo '
      <form method="post" action="script.php">
  	   <input type="submit" value="Abmelden" name="sent">
       </form>';
       $cookie_user= $_COOKIE[$cookie];
       if(isset($_POST['sent'])){
         setcookie ($cookie, "$cookie_user", time() -1);
         header('location: projekt_ikt.php');
     exit(1);
   }
 }
   ?>
  </body>
</html>
