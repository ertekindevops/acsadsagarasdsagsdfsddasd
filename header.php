<?php
include 'baglan.php' ;
if (isset($_SESSION["mail"])){
$mail  = $_SESSION["mail"];
$kbilgi= $vt->query("select * from uyeler where email='$mail'")->fetch(); if ($kbilgi["yetki"]>0) { 
}else if($kbilgi["yetki"]==0){ header("Location:logout.php"); } } elseif(!isset($_SESSION["mail"])) ;
$sites  = $vt->query("select * from siteayar")->fetchAll(PDO::FETCH_ASSOC); foreach ($sites as $sites) 
?>
<? include 'ust.php'; ?>