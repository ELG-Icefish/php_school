

<html>
<head>
<link rel="stylesheet" href="../onlineshop.css">
</head>
<body>
<?php
$cookie = "user";
if(isset($_COOKIE[$cookie])) {}
  else {
    header('location: ../index.php');
 exit(1);
  }
?>
<ul>

<li><a href="start.php"  target="main">Home</a></li>
<li><a href="warenkorb.php"  target="main">Warenkorb</a></li>
<li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">Kategorien</a>
  <div class="dropdown-content">
    <a href="../kategorien/kategorie1.php" target="main">Obst und Gemüse</a>
    <a href="../kategorien/kategorie2.php" target="main">Gebäck</a>
    <a href="../kategorien/kategorie3.php" target="main">Kategorie3</a>
    <a href="../kategorien/kategorie4.php" target="main">Kategorie4</a>
  </div>
</li>
<li class="right dropdown">
  <a href="javascript:void(0)" class="dropbtn">Account</a>
  <div class="dropdown-content">
    <a href="../index.php" target="_parent">Abmelden</a>
    <a href="../benutzer/loeschen.php" target="_parent">Account löschen</a>
  </div>

</li>

</ul>
</p>

<iframe src="leer.html" name="top" height="5%" width="100%" style="border:none" align=top></iframe>
<iframe src="start.php" name="main" height="95%" width="100%" style="border:none" align=left></iframe>
</body>
</html>