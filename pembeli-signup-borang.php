<?php

session_start();


include('header.php');

?>


<h3> Pendaftaran pembeli Baru </h3>


<form action = 'pembeli-signup-proses.php' method = 'POST'>

    Nama pembeli    <input type ='text' name ='nama' required> <br>
    NoKp pembeli    <input type ='text' name ='nokp' required> <br>  
                    <input type ='submit' value='Daftar'>
</form>
<?php include ('footer.php');?>
