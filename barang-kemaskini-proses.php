<?php
# memulakan fungsi session
session_start();

# memanggil fail guard-staff.php
include('guard-staff.php');


if(!empty($_POST)) 
{
    
    include('connection.php');

    
    if($_POST['harga'] <= 0)
    {
        die("<script>alert('Ralat maklumat');
        window.history.back();</script>");
    }

    
    $arahan     =   "update barang set
    harga           =   '".$_POST['harga']."',
    nokp_staff      =   '".$_SESSION['nokp_staff']."'
    where       
    kod_barang      =   '".$_GET['kod_barang_lama']."' ";

    
    if(mysqli_query($condb,$arahan))
    {
        
        echo "<script>alert('Kemaskini Berjaya');
        window.location.href='senarai-barang.php';</script>";
    }
    else
    {
       
        echo "<script>alert('kemaskini Gagal');
        window.history.back();</script>";
    }
}
else
{
    die("<script>alert('sila lengkapkan data');
    window.location.href='senarai-barang.php';</script>");
}
?>