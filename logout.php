<?php
include 'baglan.php';
unset($_SESSION["mail"]);
unset($_SESSION["pass"]);
setcookie("kadilone",false);
setcookie("ksifrelone",false);
unset($_COOKIE["kadilone"]);
unset($_COOKIE["ksifrelone"]);


header("Location:index.php")
 ?>
