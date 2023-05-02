<?php

session_start();


if(!empty($_POST))
{
    include ('connection.php');

    
    if(strlen($_POST['nokp']) != 12 or !is_numeric($_POST['nokp']))
    {
        die ("<script>alert ('Ralat Pada No Kad Pengenalan');
        window.location.href='pembeli-signup-borang.php'; </script>");
    }

    
    $sql_simpan = "insert into pembeli 
    (nama_pembeli, nokp_pembeli)
    values
    ('".$_POST['nama']."', '".$_POST['nokp']."') ";

    
    $laksana_query = mysqli_query($condb,$sql_simpan);

    
    if($laksana_query)
    {
        
        echo"<script>alert('Pendaftaran Berjaya.');
        window.location.href='index.php'; </script>";
    }
    else
    {
        
        echo"<script>alert('Pendaftaran Gagal');
        window.location.href='pembeli-signup-borang.php'; </script>";
    }
}
else
{
    
    echo"<script>alert('Sila lengkapkan maklumat');
    window.location.href='pembeli-signup-borang.php'; </script>";
}
?>