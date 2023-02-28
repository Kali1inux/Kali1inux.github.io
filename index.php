<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>My Website</title>
  </head>
  <body>
    <form action="index.php" method="post">
      <input type="text" name="t1"/>
      <input type="password" name="pw1"/>
      <input type="submit" value="login"/>
    </form>
  </body>
</html>

<?php
$username = $_POST["t1"];
$password = $_POST["pw1"];
if($username === "admin" && $password === "admin"){
  echo "<h1>Welcome!</h1>";
  die("error!");
}
?>
