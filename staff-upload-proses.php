<?php


if(isset($_POST['btn-upload']))
{
    include('connection.php');

    $namafailsementara= $_FILES["data_staff"] ["tmp_name"];

    $namafail= $_FILES['data_staff'] ['name'];

    $jenisfail=pathinfo($namafail,PATHINFO_EXTENSION);

    if($_FILES["data_staff"]["size"]>0 AND $jenisfail=="txt")
    {
        $fail_data_staff=fopen($namafailsementara,"r");

        while(!feof($fail_data_staff))
        {
            $ambilbarisdata=fgets($fail_data_staff);

            $pecahkanbaris = explode("|",$ambilbarisdata);

            list($nokp_staff,$nama_staff)=$pecahkanbaris;

            $arahan_sql_simpan="insert into staff
            (nokp_staff,nama_staff)
            VALUES
            ('$nokp_staff','$nama_staff')";

            $laksnakan_arahan_simpan=mysqli_query($condb,$arahan_sql_simpan);
            echo"<script>alert('import fail data selesai');
            window.location.href='senarai-staff.php';</script>";

        
        }
        fclose($fail_data_staff);
    }
    else
    {
        echo"<script>alert('only txt file faggot');</script>";
    }

}
else
{
    die("<script>alert('Ralat! akses secara terus');
window.location.href='staff-upload-borang.php';</script>");
}
?>