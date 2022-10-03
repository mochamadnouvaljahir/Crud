<?php
include_once ("koneksi.php");
$query= "SELECT * FROM tb_databarang";

$hasil = mysqli_query($conn, $query);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="alert alert-success text-center" role="alert">
     <h2>Data Barang N7SPORTS</h2>
    </div>
  <div class="container">
    <table class="table table-striped table-hober mt-5">
      <thead class=thead-dark>
    <a href="tambahbarang.php" class="btn btn-primary mb-lml-l">
      <i class="fas fa-user-plus mr-2"></i>Tambah Data</a>    
      <tr class="text-center">
          <th scope="col">NO</th>
          <th scope="col">Kode Barang</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Aksi</th>
      </tr>
        </thead>
        <tbody>
          <?php $nomor=1; while ($data=mysqli_fetch_array($hasil)) { ?>
          <tr class="text-center">
            <th scope="row"> <?php echo $nomor; ?> </th>
              <td><?php echo $data['kode_barang'];?></td>
              <td><?php echo $data['nama_barang']; ?></td>
              <td><?php echo $data['harga']; ?></td>
              <td><?php echo $data['stok']; ?></td>
              <td width="15%">
              <a href="editdatabarang.php?id=<?php echo $data['id_barang'];?>" class="btn stn-sm btn-warning">EDIT</a>
              <a href="hapusdatabarang.php?id=<?php echo $data['id_barang'];?>" class="btn stn-sm btn-danger">DELETE</a>
               </td>
            </tr>
           <?php $nomor++; }?>
        </tbody>
      </table>
    </div> 
      <!-- Optional JavaScript -->
        
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>