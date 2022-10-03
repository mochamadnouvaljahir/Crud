<?php
include_once("koneksi.php");
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga= $_POST['harga'];
$stok= $_POST['stok'];
$query="INSERT INTO tb_databarang (kode_barang,nama_barang, harga, stok) VALUE ('$kode','$nama','$harga','$stok')";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
header('location:index.php');
} else {
echo "input data gagal";
}
?>