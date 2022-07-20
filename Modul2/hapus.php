<?php
    $koneksi=mysqli_connect("localhost","root","","unjani") or die("GagalKoneksi Database");
    $nim=$_GET['nim']; 
    $query="delete from mahasiswa where nim='$nim'";
    $sql=mysqli_query($koneksi,$query) or die("gagal input".$query); 
    header("location:tampil.php"); 
?>
