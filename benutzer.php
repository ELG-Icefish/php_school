<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <title>Online Shop</title>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>">
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
  <form action="benutzer.php" id="formular" method="post">
		Benutzer:<br>
		<input name="username" type="text"><br>
		Password:<br>
	  <input name="password" type="text"><br>

		<input type="submit">
<?php
    $benutzer = 0;
    $passwort = 0;
    $benutzer = htmlspecialchars($_POST['username']);
    $passwort = htmlspecialchars($_POST['password']);
    $sql = "INSERT INTO benutzer (b_username, b_password) VALUES (?, ?)";
    if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param("ss", $benutzer, $passwort);
    $stmt->execute();
    $stmt->close();
    }
     ?>

	</form>


</body>
</html>
