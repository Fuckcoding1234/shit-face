<?php

session_start();


include('guard-staff.php');


if(!empty($_GET))
{
    
    include('connection.php');

    
    $arahan     =   "delete from barang where kod_barang='".$_GET['kod']."'";

   
    if(mysqli_query($condb,$arahan))
    {
        
        echo "<script>alert('Padam data Berjaya');
        window.location.href='senarai-barang.php';</script>";
    }
    else
    {
        
        echo "<script>alert('Padam data gagal');
        window.location.href='senarai-barang.php';</script>";
    }
}
else
{
    
    die("<script>alert('Ralat! akses secara terus');
    window.location.href='senarai-barang.php';</script>");
}
?>