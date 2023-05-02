<?php

session_start();


include('guard-staff.php');


if(!empty($_POST))
{
    
    include('connection.php');

    
    if(strlen($_POST['nokp']) != 4 or !is_numeric($_POST['nokp']))
    {
        die("<script>alert('Ralat Nokp');
        window.history.back();</script>");
    }

    
    $arahan     =   "update staff set
    nama_staff            =   '".$_POST['nama']."',
    nokp_staff            =   '".$_POST['nokp']."'
    where       
    nokp_staff            =   '".$_GET['nokp_lama']."' ";

    if(mysqli_query($condb,$arahan))
    {
        
        echo "<script>alert('Kemaskini Berjaya');
        window.location.href='senarai-staff.php';</script>";
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
    window.location.href='senarai-staff.php';</script>");
}
?>