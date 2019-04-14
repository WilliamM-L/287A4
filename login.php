<?php
require "Header.php";
$intake = true;
?>
<h2>Login Page</h2>
<?php
if (isset($_SESSION["username"])){
    echo "<h3>You have previously logged in as ".$_SESSION["username"].".</h3>";
}
if (!empty($_POST)) {
    //checking if the format is valid
    if (preg_match("/^[A-Za-z0-9]+$/",$_POST["username"]) and preg_match("/^[A-Za-z0-9]+$/",$_POST["password"])
    and strlen($_POST["password"])>=6 and preg_match("/[A-Za-z]/",$_POST["password"])
        and preg_match("/[0-9]/",$_POST["password"])) {
        //The fields are in the good format, don't need to get input again.
        $intake = false;
    } else{
        echo "<h2>The format of the username and/or password is wrong!</h2>";
    }
    //The user is informed if s/he is already logged in, however the user may log into another account

    ?>


    <?php
} if ($intake){
    ?>
    <form action="login.php" method="post">
        <fieldset class="first">
            <label>Username: <input type="text" name="username"></label>
            <label>Password: <input type="text" name="password"></label>
            <label><input type="submit" value="Log in"></label>
        </fieldset>
    </form>
    <div id="information"><strong> Username Guidelines</strong>
        <ul>
            <li>Can contain letters (both upper and lower case) and digits only.</li>
        </ul>
        <strong> Password Guidelines</strong>
        <ul>
            <li>Must contain one letter (both upper and lower case).</li>
            <li>Must contain one digit.</li>
            <li>Must be at least 6 characters long.</li>
        </ul>
    </div>
<?php
//Now, we know that the format of the password and the username are correct,  we now simply check if the pair is there or not
} else{
    $updateFile = true;
    $_SESSION["username"] = $_POST["username"];
    $token = $_POST["username"].":".$_POST["password"];
    //loop to find token in file
    $accounts = file("login.txt");

    foreach ($accounts as $account){
        if (trim($account) == trim($token)){
            $updateFile = false;
        }
    }

    if ($updateFile){
        $file = fopen("login.txt", "a");
        fwrite($file,$token."\n");
        fflush($file);
        fclose($file);
    }

    //Here we say: welcome user! The user input form is not displayed
    echo "<h3>Welcome ".$_POST["username"]." </h3>";
    //A button to go back
    ?>
    <form action="Home.php">
        <input type="submit" value="Go Back">
    </form>
<?php
}
//post to itself, if it's invalid, post html that tells it to start again, if it's valid, then
require "Footer.php";
?>

