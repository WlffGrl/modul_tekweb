<?php
    $koneksi=mysqli_connect("localhost","root","","unjani") or die("Gagal Koneksi Database");
    $nim=$_POST['nim']; 
    $nama=$_POST['nama'];
    $email=$_POST['email'];  
    $query="update mahasiswa set nama='$nama', email='$email' where nim='$nim'";
    $sql=mysqli_query($koneksi,$query) or die("gagal ubah ".$query); 
 
header("location:tampil.php");  
?> 