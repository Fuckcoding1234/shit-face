<?php 

session_start();


include('header.php');
include('connection.php');
include('guard-staff.php');


if(empty($_GET)) { 
    die("<script>window.location.href='senarai-barang.php';</script>"); 
}
?>

<h3>Kemaskini Data Barang</h3>


<form action='barang-kemaskini-proses.php?kod_barang_lama=
<?= $_GET['kod_barang'] ?>' method='POST'>

<img src='img/<?= $_GET['gambar'] ?>' width='10%'> <br>
Jenama Barang   :   <?= $_GET['jenama_barang'] ?> <br>       
Nama Barang     :   <?= $_GET['nama_barang'] ?> <br>         
Ciri            :   <?= $_GET['ciri'] ?> <br> 

Harga
<input  type='text' name='harga' value='<?= $_GET['harga'] ?>' required><br>
  
<input type='submit' value='Kemaskini'>

</form>
<?php include ('footer.php'); ?>