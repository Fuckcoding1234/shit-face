<?php

session_start();

if(!empty($_POST['nokp_staff']) and !empty($_POST['nama_staff']))
{
    include('connection.php');

    $query_login = "select * from staff 
    where 
          nokp_staff  =  '".$_POST['nokp_staff']."'
    and   nama_staff  =  '".$_POST['nama_staff']."' ";

    $laksana_query = mysqli_query($condb,$query_login);

    if(mysqli_num_rows($laksana_query)==1)
    {
        $m = mysqli_fetch_array($laksana_query);

        $_SESSION['nokp_staff'] = $m['nokp_staff'];
        $_SESSION['tahap'] =  "staff";

        echo "<script>window.location.href = 'index.php'; </script>";
    }
    else
    {
        die("<script> alert ('login gagal');
        window.location.href='staff-login-borang.php';</script>");

    }

}
else
{
    die("<script>alert('sila masukkan nokp dan nama staff');
    window.location.href='staff-login-borang.php';</script>");
}
?>
