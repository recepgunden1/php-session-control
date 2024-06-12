<?php
session_start();
require "ayarlar.php";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    if(isset($_SESSION["kullanici_adi"])){
        if(file_exists("admin.php")) {
            include "admin.php";
        } else {
            echo "Admin sayfası bulunamadı.";
        }
    } else {
        if(file_exists("giris.php")) {
            include "giris.php";
        } else {
            echo "Giriş sayfası bulunamadı.";
        }
    }
?>

</body>
</html>
