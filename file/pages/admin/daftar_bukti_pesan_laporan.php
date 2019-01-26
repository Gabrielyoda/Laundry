<?php
include "../../config/connection.php";

// Koneksi library FPDF
include "../../Laporan/fpdf.php";
// Setting halaman PDF
$pdf = new FPDF('l','mm','A5');
// Menambah halaman baru
$pdf->AddPage();
// Setting jenis font
$pdf->SetFont('Arial','B',16);
// Membuat string
$pdf->Cell(190,7,'Daftar Pesanan Laundry Rangga',0,1,'C');
$pdf->SetFont('Arial','B',9);
$pdf->Cell(190,7,'Wisma Alamanda,Blok E7/27 Tangerang',0,1,'C');
// Setting spasi kebawah supaya tidak rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(10,6,'NO',1,0);
$pdf->Cell(50,6,'NAMA PELANGGAN',1,0);
$pdf->Cell(35,6,'NO PESANAN',1,0);
$pdf->Cell(30,6,'TANGGAL',1,1);
$no = 1;
 
$pdf->SetFont('Arial','',10);
$query = mysqli_query($connection, "SELECT * FROM  daftar_pesanan inner join user on daftar_pesanan.id_user=user.id_user where status='selesai'");
while ($row = mysqli_fetch_array($query)){
    $pdf->Cell(10,6,$no,1,0);
    $pdf->Cell(50,6,$row['nama_user'],1,0);
    $pdf->Cell(35,6,$row['no_pesanan'],1,0);
    $pdf->Cell(30,6,$row['tanggal'],1,1);
    $no++;
}

$pdf->Output();
?>