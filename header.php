<h1>Speed-sort</h1>
<p>Buy something or leave nigga</p>
<hr>




<?php
if (!empty($_SESSION['tahap'])and $_SESSION['tahap'] == "staff")
{
    echo "
    | <a href='index.php'>Laman Utama</a>
    | <a href='senarai-pembeli.php'>Senarai Pembeli</a>
    | <a href='senarai-staff.php'>Senarai Staff</a>
    | <a href='senarai-barang.php'>Senarai Barang</a>
    | <a href='logout.php'>Logout</a>
    <hr>";
}
else if(!empty($_SESSION['tahap'])and $_SESSION['tahap'] == "pembeli")
{
    echo "
    | <a href='index.php'>Laman Utama</a>
    | <a href='pembeli-pilih.php'>FInd</a>
    | <a href='logout.php'>Logout</a>
    | <hr>";

}else {
    echo "
    | <a href='index.php'>Laman Utama
    | <a href='pembeli-signup-borang.php'>Pengguna Baru</a>
    | <a href='pembeli-login-borang.php'>Login Pengguna</a>
    | <a href='staff-login-borang.php'>Login Staff</a>
    <hr>";
}
?>