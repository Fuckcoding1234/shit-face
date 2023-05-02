 <?php

 session_start();

 include('header.php');
 ?>

 <h3>Login staff</h3>

 <form action='staff-login-proses.php' method='POST'>

 nama staff <input type='text' name='nama_staff'><br>
 nokp staff <input type='text' name='nokp_staff'><br>
            <input type='submit' value='login'>

</form>

<?php include ('footer.php'); ?>