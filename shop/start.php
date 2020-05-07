<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
  <link rel="stylesheet" href="../onlineshop.css">
</head>
<body>
<h2>Willkommen</h2>
<br>
<br>
<br>
<br>
<p class="nav">
  <img src='../bilder/Logo.png' alt='Logo' width='270' height='200' >
  <br><br>
  Guten Tag <?php $cookie = "user"; echo $_COOKIE[$cookie]; ?>!<br> Genießen Sie Ihren Einkauf!<br><br><br>
<?php
$namen = ["Apfel",
		  "Baguette",
		  "Baklava",
		  "Brot",
		  "Gummibären",
		  "Huhn",
		  "Kaisersemmel",
		  "Karotte",
		  "Schokolade",
		  "Schwein",
		  "Steak"

		  ];
      $bilder = [
      			"Apfel" => "apfel.jpg",
      			"Baguette" => "baguette.jpg",
      			"Baklava" => "Baklava.jpg",
            "Brot" => "brot.png",
            "Gummibären" => "Gummi.jpg",
            "Huhn" => "Huhn.jpg",
            "Kaisersemmel" => "kaisersemmel.jpg",
            "Karotte" => "karotte.jpg",
            "Schokolade" => "Schokolade.jpg",
            "Schwein" => "schwein.jpg",
            "Steak" => "steak.jpg"

      			];




$max = count($namen) -1;
$bild_zahl = rand(0, $max);
$bild_name = $namen[$bild_zahl];
$bild = $bilder["$bild_name"];

echo "
<img src='../bilder/$bild' alt='Random' width='200' height='200'>";
echo "<br>";
echo "Das Produkt des Tages ist $bild_name !";
?>
</p>
</body>
</html>
