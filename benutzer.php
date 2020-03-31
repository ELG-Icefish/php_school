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
  //echo "Verbunden<br>";
  }
  ?>
</head>
<body>
<h1>Registrieren</h1>
  <form action="benutzer.php" id="formular" method="post">
		Benutzer:<br>
		<input name="username" type="text"><br>
		Password:<br>
	  <input name="password" type="text"><br>

		<input type="submit">
    </form>
<?php
    $benutzer = htmlspecialchars($_POST['username']);
    $passwort = htmlspecialchars($_POST['password']);
    $sql = "INSERT INTO benutzer (b_username, b_password) VALUES (?, ?)";
    if ($stmt = $mysqli->prepare($sql)) {
    $stmt->bind_param("ss", $benutzer, $passwort);
    $stmt->execute();
    $stmt->close();
  }
      if ((!empty($_POST["username"]))||(!empty($_POST["password"]))) {
        echo "Sie werden zur Login-Seite weitergeletet. Melden sie sich dort mit dem von Ihnen erstellten Konto an.";
        sleep(3);
        header('location: projekt_ikt.php');
      }
?>



</body>
</html>
