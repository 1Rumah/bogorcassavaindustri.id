<?php
session_start();
if(!isset($_SESSION['loggedin'])){ header('Location: login.php'); exit; }
require('fpdf/fpdf.php');

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$no_tlp = $_POST['no_tlp'];

$upload_dir = "uploads/";
if (!is_dir($upload_dir)) { mkdir($upload_dir, 0777, true); }

// Save KTP
$ktp_path = "";
if (isset($_FILES['foto_ktp'])) {
    $ktp_path = $upload_dir . time() . "_" . basename($_FILES["foto_ktp"]["name"]);
    move_uploaded_file($_FILES["foto_ktp"]["tmp_name"], $ktp_path);
}

// Generate PDF
$pdf_file = $upload_dir . "form_" . time() . ".pdf";
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,10,'Data Anggota Koperasi',0,1,'C');
$pdf->SetFont('Arial','',12);
$pdf->Ln(10);
$pdf->Cell(0,10,"Nama: $nama",0,1);
$pdf->Cell(0,10,"NIK: $nik",0,1);
$pdf->Cell(0,10,"Tempat Lahir: $tempat_lahir",0,1);
$pdf->Cell(0,10,"Tanggal Lahir: $tanggal_lahir",0,1);
$pdf->Cell(0,10,"Alamat: $alamat",0,1);
$pdf->Cell(0,10,"Pekerjaan: $pekerjaan",0,1);
$pdf->Cell(0,10,"No Tlp: $no_tlp",0,1);
if($ktp_path){ $pdf->Image($ktp_path,10,120,50); }
$pdf->Output('F', $pdf_file);

echo "Data berhasil disimpan.<br>";
echo "<a href='$pdf_file' download>Download PDF</a><br>";
if($ktp_path){ echo "<a href='$ktp_path' target='_blank'>Lihat Foto KTP</a>"; }
?>
