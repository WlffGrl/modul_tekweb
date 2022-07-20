<?php
 
    $koneksi=mysqli_connect("localhost","root","","unjani") or die("Gagal Koneksi Database");
        $nim=$_POST['nim']; 
        $nama=$_POST['nama'];
        $email=$_POST['email'];  
        $query="insert into mahasiswa values ('$nim','$nama','$email')";
 
    $sql=mysqli_query($koneksi,$query) or die("gagal input".$query); 
 
header("location:tampil.php"); 