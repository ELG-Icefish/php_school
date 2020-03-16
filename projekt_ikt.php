<!DOCTYPE html>
<html>
<head>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
  <meta charset=\"utf-8\">
  <title>Online Shop</title>
  <?php
  $cookie = "user";
  if(isset($_COOKIE[$cookie])) {
    echo "Sie sind als $_COOKIE[$cookie] angemeldet";
    echo "<br>";
    echo '<a href="http://localhost/onlineshop/shop.php">Weiter</a>';
    echo "<br>";
    echo'Benutzer wechseln:<br>';
    echo '
    <form method="post" action="script.php">
	   <input type="submit" name="sent">
     </form>';
     $cookie_user= $_COOKIE[$cookie];
     if(isset($_POST['sent'])){
       setcookie ($cookie, "$cookie_user", time() -1);
       echo'Bitte neu laden!';
 }


  }
  else {

  $mysqli = new mysqli('localhost','root','','shop');
  if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung:". msqli_connect_error();
  exit();
  }
  else {
  echo "Verbunden<br>";
  }
  ?>
  <?php
  if ((empty($_POST["username"]))||(empty($_POST["password"]))) {
echo ';</head>';
echo'<body>';
echo'<h1>Login</h1>';
echo'<form action="shop.php" id="formular" method="post">';
echo'Benutzer:<br>';
echo'<input name="username" type="text"><br>';
echo'Password:<br>';
echo'<input name="password" type="text"><br>';

echo'<input type="submit">';
echo'</form>';
}
else {



  $query = 'SELECT b_password FROM benutzer WHERE b_username = ?';
$benutzer = htmlspecialchars($_POST['username']);

if($stmt = $mysqli->prepare($query)){
   /*
        Binds variables to prepared statement

        i    corresponding variable has type integer
        d    corresponding variable has type double
        s    corresponding variable has type string
        b    corresponding variable is a blob and will be sent in packets
   */
   $stmt->bind_param('s',$benutzer);

   /* execute query */
   $stmt->execute();

   /* Store the result (to get properties) */
   $stmt->store_result();



   /* Bind the result to variables */
   $stmt->bind_result($passwort2);

   while ($stmt->fetch()) {


   }

   /* free results */
   $stmt->free_result();

   /* close statement */
   $stmt->close();
}

$passwort1 = htmlspecialchars($_POST['password']);
if ("$passwort1"=="$passwort2") {
  echo "erfolgreich";
$cookie = "user";
setcookie($cookie, $benutzer, "/");
header('location: http://localhost/onlineshop/shop.php');
exit(1);
}
else {
  echo "Passwort falsch";
}

}
}
?>
</body>
</html>
