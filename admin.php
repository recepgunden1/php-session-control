<?php
session_start();
if(!isset($_SESSION["kullanici_adi"])) {
    header("Location: index.php");
    exit();
}
echo "Hoş geldiniz, " . $_SESSION["kullanici_adi"];
?>
<hr>
<a href="logout.php">Çıkış Yap</a>
