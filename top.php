<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<link rel="stylesheet" href="onlineshop.css">
<head>
  <style>
  .button {
    background-color: #red; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  }
  </style>
</head>
<body>

  <h2>Sie sind angemeldet als: <?php $cookie = "user"; echo $_COOKIE[$cookie]; ?> </h2>
  <h1>  Onlineshop </h1>
  <button class="button"><a href="warenkorb.php"  target="main">Warenkorb</a></button>

</p>
</body>
</html>
