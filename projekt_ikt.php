<!DOCTYPE html>
<html>
<head>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
  <meta charset=\"utf-8\">
  <title>Online Shop</title>
  <?php
  $mysqli = new mysqli('localhost','root','','shop');
  if ($mysqli->connect_error) {
  echo "Fehler bei der Verbindung:". msqli_connect_error();
  exit();
  }
  else {
  echo "Verbunden<br>";
  }
  ?>
</head>
<body>
<h1>Login</h1>
  <form action="shop.php" id="formular" method="post">
		Benutzer:<br>
		<input name="username" type="text"><br>
		Password:<br>
	  <input name="password" type="text"><br>

		<input type="submit">
	</form>





<?php
  $benutzer = 0;
  $passwort1 = 0;
  $passwort2 =0;
  $benutzer = htmlspecialchars($_POST['username']);
  $passwort1 = htmlspecialchars($_POST['password']);
  //echo "$benutzer";
  //echo "$passwort1";
  $sql = "SELECT b_password
  from benutzer
  where b_usename LIKE '$benutzer' ";

  if ($stmt = $mysqli->prepare($sql)) {

  $stmt->execute();

  $stmt->bind_result($passwort2);
  $stmt->close();
}



if ("$passwort1"=="$passwort2") {
  echo "erfolgreich";
}
else {
  echo "Passwort falsch";
}

?>
</body>
</html>
