<?php

session_start();

include('header.php');
include('connection.php');
include('guard-staff.php');
?>

<h3>Senarai Staff</h3>

| <a href='staff-signup-borang.php'>Daftar Staff Baru</a>
| <a href='staff-upload-borang.php'>Muat naik staff</a>
|
<?php include('butang-size.php'); ?>

<table width='100%' border='1' id='saiz'>
    <tr>
        <td>Nama</td>
        <td>Nokp</td>
        <td>Tindakan</td>
</tr>

<?php
$arahan_papar="select* from staff";

$laksana= mysqli_query($condb,$arahan_papar);

while($m= mysqli_fetch_array($laksana))
{
    $data_get=array(
        'nama' => $m['nama_staff'],
        'nokp' => $m['nokp_staff'],

    );
    echo"<tr>
    <td>".$m['nama_staff']."</td>
    <td>".$m['nokp_staff']."</td>" ;

    echo "<td>
    |<a href='staff-kemaskini-borang.php?".http_build_query($data_get)."'>
    Kemaskini</a>

    |<a href='staff-padam-proses.php?nokp=".$m['nokp_staff']."'
    onClick=\"return confirm('Anda pasti anda ingin memadam data ini.')\">
    hapus</a>|

    </td>
    </tr>";
}
?>
</table>
<?php include ('footer.php'); ?>