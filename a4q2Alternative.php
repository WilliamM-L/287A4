<?php
//session_start();
$name="user";
$visits = 1;
$lifetime= time() + 600;
setcookie($name,$visits,$lifetime);
//Note: cookies cannot have undefined names!
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question2 ALT</title>
</head>
<body>
<h1>Assignment 4 Question 2</h1>
<?php
if (empty($_POST["username"])){
    echo "No username so far";

} else{
    $_COOKIE[$name] = $_POST["username"];
    echo $_COOKIE[$name];

}
?>
<form action="a4q2Alternative.php" method=POST>
    <label>What is your name? <input name="username" value="Vlad" type="text"><input type="submit" value="Send"></label>
</form>
</body>
</html>
<?php

?>