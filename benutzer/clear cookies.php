<?php
$cookie ="user";
$benutzer ="benni";
setcookie ($cookie, "$benutzer", time() -1);
$cookie_user ="1234";
setcookie ($cookie, "$benutzer", time() -1);
$cookie_user ="123456";
setcookie ($cookie, "$benutzer", time() -1);
$cookie_user ="testuser";
setcookie ($cookie, "$benutzer", time() -1);
echo "fertig";
echo "$_COOKIE[$cookie]";
 ?>
