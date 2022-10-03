<?php
include_once("koneksi.php");
$id = $_POST['id'];
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga= $_POST['harga'];
$stok= $_POST['stok'];
$query="UPDATE tb_databarang SET kode_barang='$kode', nama_barang='$nama', harga='$harga', stok='$stok' WHERE id_barang='$id'";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
header('location:index.php');
} else {
echo "input data gagal";
}
?>