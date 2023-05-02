<?php
 session_start();

 include('header.php');
 include("guard-staff.php");
 ?>

 <h3>Pendaftaran staff baru</h3>

 <form action='staff-signup-proses.php' method ='POST'>

Nama staff <input type ='text' name='nama' required><br>
Nokp staff<input type ='text' name='nokp'required><br>
          <input type ='submit' value='daftar'>

</form>
<?php include ('footer.php');?>
