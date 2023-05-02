<?php

session_start();


if(!empty($_POST))
{
    include ('connection.php');

    
    $sql_simpan = "insert into jenama 
    (kod_jenama, jenama_barang)
    values
    ('".$_POST['kod_jenama']."', '".$_POST['jenama_barang']."') ";

    
    $laksana_query = mysqli_query($condb,$sql_simpan);

    
    if($laksana_query)
    {
        
        die("<script>alert('Pendaftaran Berjaya.');
        window.location.href='barang-daftar-borang.php'; </script>");
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
    window.location.href='barang-jenama-borang.php'; </script>");
}
?>