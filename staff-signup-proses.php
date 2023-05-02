<?php
session_start();

if(!empty($_POST))
{
    include ('connection.php');

    $nokp_lama= "
    SELECT nokp_staff FROM staff";

    $run_query = mysqli_query($condb,$nokp_lama);

    if($run_query)
    {
        echo ;
    }

    
    if(strlen($_POST['nokp']) !=4 or !is_numeric($_POST['nokp']) or )
    {
        die("<script>alert ('Ralat pada no kad pengenalan');
        window.location.href='staff-signup-borang.php'; </script>");
    }


    $sql_simpan = "insert into staff (nama_staff, nokp_staff) 
    VALUES 
    ('" .$_POST['nama']."', '" .$_POST['nokp']."') ";

    $laksana_query = mysqli_query($condb, $sql_simpan);

    if($laksana_query)
    {
        echo"<script>alert('pendaftaran berjaya');
        window.location.href='senarai-staff.php';</script>";
    }
    else
    {
        echo"<script>alert('pendaftaran Gagal');
        window.location.href='staff-signup-borang.php';</script>";

    }
}
else
{
    echo"<script>alert('sila lengkapkan maklumat');
    window.location.href='staff-signup-borang.php';</script>";
}

?>