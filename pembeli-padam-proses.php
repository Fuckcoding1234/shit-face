 <?php

 session_start();

if(!empty($_GET))
{
    include('connection.php');

    $arahan = "delete from pembeli where no_kppembeli='".$_get['no_kp']."'";

    if(mysqli_query($condb,$arahan))
    {
        echo"<script>alert('padam data berjaya');
        window.location.href='senaraipembeli.php;</script>";
    }
    else
    {
        echo"<script>alert('padam data gagal');
        window.location.href='senarai-pembeli.php';</script>"
    
    }
}
else
{
    die("<script>alert('error! fucking access shit or something');
    window.location.herf='senarai-pembeli.php';</script>");

}
?>