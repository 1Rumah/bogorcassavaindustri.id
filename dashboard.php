<?php session_start(); if(!isset($_SESSION['loggedin'])){ header('Location: login.php'); exit; } ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dasbor Anggota</title>
<style>
.slider {
  width: 100%;
  overflow: hidden;
  margin-top: 20px;
}
.slides {
  display: flex;
  width: 300%;
  animation: slide 12s infinite;
}
.slides img {
  width: 100%;
  flex-shrink: 0;
}
@keyframes slide {
  0%   { transform: translateX(0); }
  33%  { transform: translateX(-100%); }
  66%  { transform: translateX(-200%); }
  100% { transform: translateX(0); }
}
</style>
</head>
<body>
<h2>Selamat Datang di Dasbor Anggota</h2>
<a href="formulir.php">Isi Formulir Pendaftaran</a><br>
<div class="slider">
  <div class="slides">
    <img src="logo.gif" alt="Slide 1">
    <img src="FORMULIR ANGGOTA KOPERASI.png" alt="Slide 2">
    <img src="Icon-x.png" alt="Slide 3">
  </div>
</div>
</body>
</html>
