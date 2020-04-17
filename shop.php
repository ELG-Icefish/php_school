

<html>
<head>
<link rel="stylesheet" href="onlineshop.css">
</head>
<body>
<?php
$cookie = "user";
if(isset($_COOKIE[$cookie])) {}
  else {
    header('location: projekt_ikt.php');
 exit(1);
  }
?>
<ul>

<li><a href="home.php"  target="main">Home</a></li>
<li><a href="warenkorb.php"  target="main">Warenkorb</a></li>
<li class="dropdown">
  <a href="javascript:void(0)" class="dropbtn">Kategorien</a>
  <div class="dropdown-content">
    <a href="kategorie1.php" target="main">Obst und Gemüse</a>
    <a href="kategorie2.php" target="main">Gebäck</a>
    <a href="kategorie3.php" target="main">Kategorie3</a>
    <a href="kategorie4.php" target="main">Kategorie4</a>
  </div>
</li>
<li class="right dropdown">
  <a href="javascript:void(0)" class="dropbtn">Account</a>
  <div class="dropdown-content">
    <a href="abmelden.php" target="_parent">Abmelden</a>
    <a href="loeschen.php" target="_parent">Account löschen</a>
  </div>

</li>

</ul>
</p>

<iframe src="leer.html" name="top" height="5%" width="100%" style="border:none" align=top></iframe>
<iframe src="home.php" name="main" height="95%" width="100%" style="border:none" align=left></iframe>
</body>
</html>
