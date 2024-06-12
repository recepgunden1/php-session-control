<?php
session_start();
require "ayarlar.php";

if(isset($_POST["submit"])){
    $kullanici_adi = $_POST["kullanici_adi"];
    $sifre = $_POST["sifre"];

    if(!$kullanici_adi || !$sifre){
        $hata = "Lütfen eksik bölgeleri doldurun.";
    } elseif($kullanici_adi != $uye["kullanici_adi"] || $sifre != $uye["sifre"]){
        $hata = "Kullanıcı adı ya da şifre hatalı";
    } else {
        $_SESSION["kullanici_adi"] = $kullanici_adi;
        header("Location: index.php");
        exit();
    }
}
?>

<?php if(isset($hata)): ?>
    <div style="border: 1px solid red; color: red;">
        <?php echo $hata; ?>
    </div>
<?php endif; ?>

<form method="post">
    Kullanıcı adı:<br>
    <input type="text" name="kullanici_adi"><br>
    Şifre:<br>
    <input type="password" name="sifre"> <br>
    <hr>
    <button type="submit" name="submit">Giriş Yap</button>
</form>
