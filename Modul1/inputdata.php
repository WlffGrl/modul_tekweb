<html>

<body>

    <head>
        <link rel="stylesheet" href="style.css">
        <script src="indexjs.js"></script>
    </head>

    <div class="form">
        <form action="tambahdata.php" method="post">
                <h3>
                    Input data
                </h3>
            <hr>
            <tr>
                <td><label>Nama : </label></td>
                <td><input type="text" name="nama" placeholder="nama" /></td>
            </tr>
            <br>
            <tr>
                <td><label>NIM : </label></td>
                <td><input type="text" name="nim" placeholder="nim" /></td>
            </tr>
            <br>
            <tr>
                <td><label>Email : </label></td>
                <td><input type="text" name="email" placeholder="email" /></td>
            </tr>
            <br>
            <tr>
                <td colspan="4" align="center">
                    <input type="submit" name="submit" value="Submit" />
                </td>
                
            </tr>
        </form>
    </div>
</body>

</html>