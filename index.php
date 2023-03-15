<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="pass.js"></script>
</head>
<body>

<form action="login.php" method="post">
    <h1>LOGIN</h1>

    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>

    <label>Username</label><br>
    <input type="text"" id="email" name="uname"><br>

    <label>Password</label><br>
    <input type="password" id="pass" name="password"><br>

    <label>Show Password</label>
    <input type="checkbox" id="check" onclick="myFunction()">
    <input type =  "submit" id = "btn" value = "Login" />

</form>
</body>
</html>