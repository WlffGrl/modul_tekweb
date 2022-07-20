<?php
    session_start();
    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
    }

  $koneksi=mysqli_connect("localhost","root","","unjani") or die("Gagal Koneksi Database");
?>
<html>
	<head>
    <title> </title>
    <link rel="stylesheet" href="style.css">
    <script src="indexjs.js"></script>
	</head>
	<body>
		<section>
  <h1>TABLE MAHASISWA</h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
				<th>nim</th> 
				<th>nama</th> 
				<th>email</th> 
				<th>Setting</th>  
			</tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <?php
				$query="select * from mahasiswa";
				$data=mysqli_query($koneksi,$query) or die ("Gagal query:".$query);
			?> 
			 
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
        <?php while($v=mysqli_fetch_array($data)):;?>
      <tr> 
				<td><?php echo $v["nim"];?></td> 
				<td><?php echo $v["nama"];?></td> 
				<td><?php echo $v["email"];?></td> 
				<td>
				<a href="hapus.php?nim=<?php echo $v["nim"];?>">Hapus </a> &nbsp;
				<a href="formupdate.php?nim=<?php echo $v["nim"];?>">Edit </a> &nbsp; 
				</td>
      </tr>
      <?php endwhile;?>
      </tbody>
    </table>
		
  </div>
</section>
<form action="input.php">
  <input type="submit" name="submit" value="Tambahkan Data" />
</form>
	</body>

</html>