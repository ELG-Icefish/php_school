<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="onlineshop.css">
  <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
  <meta charset=\"utf-8\">
  <title>Online Shop</title>
  <?php
  $cookie = "user";
  if(isset($_COOKIE[$cookie])) {
    echo "Sie sind als $_COOKIE[$cookie] angemeldet";
    echo "<br>";
    echo '<a href="shop/shop.php">Weiter</a>';
    echo "<br>";
    echo'Benutzer wechseln:<br>';
    echo '
    <form method="post" action="script.php">
	   <input type="submit" name="sent">
     </form>';
     echo '<a href="../benutzer/benutzer.php" target="main">Registrieren</a>';
     $cookie_user= $_COOKIE[$cookie];
     if(isset($_POST['sent'])){
       setcookie ($cookie, "$cookie_user", time() -1);
       header('location:'.$_SERVER['PHP_SELF']);
       exit(1);
 }


  }
  else {

  $mysqli = new mysqli('localhost','root','','shop');
  if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung:". msqli_connect_error();
  exit();
  }
  else {
  //echo "Verbunden<br>";
  }
  ?>
  <?php
  if ((empty($_POST["username"]))||(empty($_POST["password"]))) {
echo '</head>';
echo'<body>';
echo'<h1>Login</h1>';
echo'<form action="shop/shop.php" id="formular" method="post">';
echo'Benutzer:<br>';
echo'<input name="username" type="text"><br>';
echo'Password:<br>';
echo'<input name="password" type="text"><br>';

echo'<input type="submit">';
echo'</form>';
echo'';
}
else {



  $query = 'SELECT b_password FROM benutzer WHERE b_username = ?';
$benutzer = htmlspecialchars($_POST['username']);

if($stmt = $mysqli->prepare($query)){

   $stmt->bind_param('s',$benutzer);


   $stmt->execute();


   $stmt->store_result();




   $stmt->bind_result($passwort2);

   while ($stmt->fetch()) {


   }


   $stmt->free_result();


   $stmt->close();
}

$passwort1 = htmlspecialchars($_POST['password']);
if ("$passwort1"=="$passwort2") {
  echo "erfolgreich";
$cookie = "user";
setcookie($cookie, $benutzer, "/");
header('location: shop/shop.php');
exit(1);
}
else {
  echo "Passwort falsch";
  sleep(3);
  header('location:'.$_SERVER['PHP_SELF']);
  exit(1);
}

}
}
?>
</body>
</html>
