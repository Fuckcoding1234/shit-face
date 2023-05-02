<?php 
$nama_host = "localhost";

$nama_sql = "root";

$pass_sql = "";

$nama_db = "store_select";

$condb  =  mysqli_connect($nama_host, $nama_sql, $pass_sql, $nama_db);

if (!$condb)
{
    die("sambungan ke pangkalan data gagal");
}

else
{
"sambungan good";
}
?>