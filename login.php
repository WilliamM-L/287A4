<?php
require "Header.php";
$intake = true;
?>
<h2>Login Page</h2>
<?php
if (!empty($_POST)) {
    //checking if the format is valid
    if (preg_match("//",$_POST["username"]) and preg_match("//",$_POST["password"])) {
        //The fields are in the good format, don't need to get input again.
        $intake = false;
    } else{
        echo "The format of the username and/or the password is wrong!";
    }

    ?>


    <?php
} if ($intake){
    //There is some
    ?>
    <form action="login.php" method="post">
        <label>Username: <input type="text" name="username"></label>
        <label>Password: <input type="text" name="password"></label>
        <label><input type="submit" value="Log in"></label>
    </form>
<?php
//Now, we know that the format of the password and the username are correct,  we now simply check if the pair is there or not
} else{
    //checking if it's in the file
    $token = $_POST["username"].":".$_POST["password"];

}
//post to itself, if it's invalid, post html that tells it to start again, if it's valid, then
require "Footer.php";
?>

