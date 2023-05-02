<?php

session_start();

include('header.php');
include('connection.php');
include('guard-staff.php');
?>

<h3>Senarai pembeli </h3>

<form action=''method='POST'>
    Carian pembeli <br>
    Nama pembeli <input type='text' name='nama'>
                 <input type='submit' value='Cari'>
</form>

<?php include('butang-size.php'); ?>

<table width='100%' border='1' id='saiz'>
    <tr>
        <td>Nama</td>
        <td>NoKP</td>
        <td>NamaStaff</td>
        <td>Tindakan</td>

</tr>

<?php
$tambahan="";
if(!empty($_POST['nama']))
{
    $tambahan="where nama_pembeli like '%".$_POST['nama']."%'";
}

$arahan_papar="select * from pembeli $tambahan ";

$laksana = mysqli_query($condb,$arahan_papar);

while($m=mysqli_fetch_array($laksana))
{
    echo"<tr>
    <td>".$m['nama_pembeli']."</td>
    <td>".$m['nokp_pembeli']."</td>";
    

    echo"<td>
    |<a href='pembeli-padam-proses.php?nokp=".$m['nokp_pembeli']."'
    onClick=\"return confirm('anda pasti anda ingan memandam data ini.')\">
    Hapus</a>|
    
    </td>
    </tr>";

}

?>
</table>
<?php include ('footer.php'); ?>


