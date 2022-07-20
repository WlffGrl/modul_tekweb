<?php
    $koneksi=mysqli_connect("localhost","root","","unjani") or die("Gagal Koneksi Database");
        $nim=$_GET['nim']; 
        $query="select * from mahasiswa where nim='$nim'"; 
        $data=mysqli_query($koneksi,$query) or die ("Gagal Menampilkan".$query); 
        $sql=mysqli_fetch_array($data); 
?>
<html>

<body>

    <head>
        <link rel="stylesheet" href="style.css">
        <script src="indexjs.js"></script>
    </head>

    <div class="form">
        <form action="update.php" method="post">
                <h3>
                    Ubah Data
                </h3>
        <hr>
            <tr>
                <td><label>Nama: </label></td>
                <td><input type="text" name="nama" value="<?php echo $sql['nama'];?>" /></td>
            </tr>
        <br>
       <tr>
                <td><label>NIM : </label></td>
                <td><input type="text" name="nim" value="<?php echo $sql['nim'];?>" /></td>
            </tr>
            <br>
            <tr>
                <td><label>Email: </label></td>
                <td><input type="text" name="email" value="<?php echo $sql['email'];?>" /></td>
            </tr>
            <br>
            <tr>
                <td colspan="4" align="center">
                    <input type="submit" name="submit" value="Submit" />
                </td>
            </tr>
        </form>
    </div>
    <form type="form" action="tampil.php">
            <input type="submit" name="return" value="Kembali" />
    </form>
</body>

</html>
 