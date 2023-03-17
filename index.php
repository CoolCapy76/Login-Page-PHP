<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login page</title>
    <link rel="stylesheet"  href="style.css">
    <script src="pass.js"></script>
</head>
<body>
<form id="form" action="login.php" method="post" >
    <h1>Login</h1>


    <label>Username:</label><br>
    <input type="text" id="user" name="uname" required ><br>

    <label>Password:</label><br>
    <input type="password" id="pass" name="password" required"><br>

    <div id="showpass">
        <label>Show Password</label>
        <input type="checkbox" id="check" onclick="myFunction()">
    </div>

    <input type="submit" id="btn" value="Login">
</form>
</body>
</html>