<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="logincheck.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($error)) { ?>
        <h3>username/password salah!</h3>
        <?php } ?>
        <label>UserName</label>
        <input type="text" name="username" placeholder="User Name"><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="Password"><br>
        
        <button type="submit" value="login">Login</button>
    </form>
</body>
</html>