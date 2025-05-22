<?php

// Örnek sabit kullanıcı bilgileri
$dogruEmail = "mert.ince2@ogr.sakarya.edu.tr";
$dogruSifre = "b231210012"; // Öğrenci numarası

// POST ile gelen veriyi al
$email = $_POST['email'] ?? '';
$sifre = $_POST['password'] ?? '';

// Kontrol et
if ($email === $dogruEmail && $sifre === $dogruSifre) {
  echo "<h2>Giriş başarılı! Hoş geldiniz, $email</h2>";
  echo "<p><a href='index.html'>Ana sayfaya git</a></p>";
} else {
  echo "<h2 style='color:red;'>Hatalı e-posta veya şifre!</h2>";
  echo "<p><a href='login.html'>Tekrar dene</a></p>";
}
?>
