
<!DOCTYPE html>
<html>
<head>
  <meta charset=\"utf-8\">
  <link rel="stylesheet" href="../onlineshop.css">
  <title>Online Shop</title>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?> ">  <!-- Formular sendet Daten ans sich selbst -->
  <?php
  $mysqli = new mysqli('localhost','root','','shop'); //Verbindung zur Datenbank
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
      if ((!empty($_POST["username"]))||(!empty($_POST["password"]))) {
        //Fals in beide Felder etwas eingetragen ist, wird dieser Teil des Codes ausgeführt
        $benutzer = htmlspecialchars($_POST['username']);
        $passwort = htmlspecialchars($_POST['password']);
        $sql = "INSERT INTO benutzer (b_username, b_password) VALUES (?, ?)"; //Daten werden an die Datenbank gesendet
        if ($stmt = $mysqli->prepare($sql)) {
        $stmt->bind_param("ss", $benutzer, $passwort);
        $stmt->execute();
        $stmt->close();
          }
        $sql2 = "INSERT INTO einkauf (e_benutzer) VALUES (?)"; //Daten werden an die Datenbank gesendet
        if ($stmt = $mysqli->prepare($sql2)) {
        $stmt->bind_param("s", $benutzer);
        $stmt->execute();
        $stmt->close();
          }
          $cookie = "user";
          setcookie($cookie, $benutzer, 0);
          /*Erstellt Cookie zur Speicherung des Benutzers
           "/" steht dafür dass das Cookie von Jeder Website ausgelesen werden kann*/
          sleep(3);
        header('location: ../index.php'); //Automatische Weiterleitung zur Zielseite
      }
?>



</body>
</html>
