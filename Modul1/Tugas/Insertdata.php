<?php
    $conn=mysqli_connect("localhost","root","","hotel") or die("Gagal Koneksi Database");
    $nmtamu=$_POST['nmtamu'];
    $email=$_POST['email'];
    $query="insert into tamu values ('','$nmtamu','$email')";

    $sql=mysqli_query($conn,$query) or die("gagal input".$query);
?>