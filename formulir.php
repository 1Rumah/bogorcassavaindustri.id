<?php session_start(); if(!isset($_SESSION['loggedin'])){ header('Location: login.php'); exit; } ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulir Pendaftaran</title>
</head>
<body>
<h2>Formulir Pendaftaran Anggota</h2>
<form method="POST" action="simpan.php" enctype="multipart/form-data">
  <label>Nama:</label><input type="text" name="nama" required><br>
  <label>No NIK:</label><input type="text" name="nik" required pattern="\d{16}"><br>
  <label>Tempat Lahir:</label><input type="text" name="tempat_lahir" required><br>
  <label>Tanggal Lahir:</label><input type="date" name="tanggal_lahir" required><br>
  <label>Alamat Rumah:</label><input type="text" name="alamat" required><br>
  <label>Pekerjaan:</label><input type="text" name="pekerjaan" required><br>
  <label>No Tlp:</label><input type="text" name="no_tlp" required><br>
  <label>Upload Foto KTP:</label><input type="file" name="foto_ktp" accept="image/*" required><br>
  <button type="submit">Kirim</button>
</form>
</body>
</html>
