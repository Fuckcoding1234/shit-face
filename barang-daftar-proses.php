<?php

session_start();

if(!empty($_POST))
{
    
    include ('connection.php');

    
    if($_POST['harga'] <= 0)
    {
        die ("<script>alert ('Ralat Pada harga');
        window.history.back(); </script>");
    }

    
    $timetmp           =   date("Y-m-d-His");
    $nama_fail          =   basename($_FILES["gambar"]["name"]);
    $format_gambar      =   pathinfo($nama_fail,PATHINFO_EXTENSION);
    $lokasi             =   $_FILES['gambar']['tmp_name'];
    $nama_baru          =   $timetmp.".".$format_gambar;

    
    $sql_simpan = "insert into barang 
    (nama_barang, kod_jenama, harga, ciri, gambar, nokp_staff) values
    ( '".$_POST['nama']."', '".$_POST['kod_jenama']."', '".$_POST['harga']."', 
      '".$_POST['ciri']."', '$nama_baru', '".$_SESSION['nokp_staff']."' ) ";
    
    
    $laksana_sql = mysqli_query($condb,$sql_simpan);

    if($laksana_sql)
    {
         
        move_uploaded_file($lokasi,"img/".$nama_baru);

        
        die("<script>alert('Pendaftaran Berjaya.');
        window.location.href='senarai-barang.php'; </script>");
    }
    else
    {
        
        die("<script>alert('Pendaftaran Gagal');
        window.history.back(); </script>");
    }
}
else
{
    die("<script>alert('Sila lengkapkan maklumat');
    window.location.href='barang-signup-borang.php'; </script>");
}
?>