<?php
session_start();

include('header.php');
include('guard-staff.php');
?>

<h3>Muat naik data staff (*.txt) </h3>

<form action='staff-upload-proses.php' method='POST' enctype='multipart/form-data'>

<h3><b>Choose txt file to upload</b></h3>
<input type='file' name='data_staff'>
<button type='submit' name='btn-upload'>muat naik</button>

</form>

<?php include('footer.php'); ?>