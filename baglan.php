<?php

try {
  $vt= new PDO("mysql:host=localhost;dbname=ngav_news;charset=utf8","ngav_news","UbjAUJy3qYQv");
} catch (PDOException $e) {
  echo $e->getMessage();
}

date_default_timezone_set('Europe/Istanbul');
session_start();


//SEARCH BAĞLANTISI
$pdo = new PDO("mysql:host=localhost;dbname=ngav_news;charset=utf8","ngav_news","UbjAUJy3qYQv", [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);

$stmt = $pdo->prepare("SELECT * FROM `urun` WHERE `urunad` LIKE ? OR `fiyat` LIKE ? OR `resim` LIKE ? OR `aciklama` LIKE ?");
$stmt->execute(["%".$_POST["search"]."%", "%".$_POST["search"]."%", "%".$_POST["search"]."%", "%".$_POST["search"]."%"]);
$results = $stmt->fetchAll();
if (isset($_POST["ajax"])) { echo json_encode($results2); }

?>
