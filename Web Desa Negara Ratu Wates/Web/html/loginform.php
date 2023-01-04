<?php
 session_start();
?> 

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="form.css">
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Login Form</title>
</head>

<body>
<form method="post" action="loginact.php">
    <input type="text" name="username" placeholder="Masukan Username"><br/>
    <input type="password" name="password" placeholder="Masukan Password"><br/>
    <input type="submit" value="Login"><br/>
</form>
</body>

</html>

