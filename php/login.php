<?php
// Kullanıcıdan gelen verileri al
$email = $_POST['email'];
$sifre = $_POST['sifre'];

// Tanımlı kullanıcı bilgileri (sen kendi numaranı yaz)
$dogru_email = "b1812100001@sakarya.edu.tr";
$dogru_sifre = "b1812100001"; // domain içermeyen hali

// Kontrol işlemi
if ($email == $dogru_email && $sifre == $dogru_sifre) {
    echo "<h2>Hoşgeldiniz $sifre</h2>";
} else {
    // Hatalı girişte tekrar login sayfasına yönlendir
    header("Location: login.html");
    exit();
}
?>
