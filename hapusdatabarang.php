<?php
include_once("koneksi.php");
$id=$_GET['id'];
$query="DELETE FROM tb_databarang WHERE id_barang= $id";
$hasil=mysqli_query($conn,$query);
if ($hasil) {
header('location:index.php');
} else {
echo "hapus data gagal";
} 
?>