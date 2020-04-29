

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
<li class="liste">
  <a href="javascript:void(0)" class="liste_btn">Kategorien</a>  <!--  javascript:void(0)= leerer link für hover  -->
  <div class="liste-content">
    <a href="../kategorien/kategorie1.php" target="main">Obst und Gemüse</a>
    <a href="../kategorien/kategorie2.php" target="main">Gebäck</a>
    <a href="../kategorien/kategorie3.php" target="main">Fleisch</a>
    <a href="../kategorien/kategorie4.php" target="main">Süßigkeiten</a>
  </div>
</li>
<li class="right liste">
  <a href="javascript:void(0)" class="liste_btn">Account</a>
  <div class="liste-content">
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
