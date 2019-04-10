<?php
session_start();
if (isset($_POST["reset"]) and $_POST["reset"]=="yes"){
    session_unset();
    session_destroy();

} else if(isset($_POST["username"])){
    $_SESSION["name"] = $_POST["username"];
    $_SESSION["visits"]=0;
}

?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Question2</title>
    </head>
    <body>
    <h1>Assignment 4 Question 2</h1>
    <?php
    if (!isset($_SESSION["name"])) {?>
    <form action="a4q2.php" method=POST>
        <label>What is your name? <input name="username" value="Vlad" type="text"><input type="submit" value="Send"></label>
    </form>
    <?php}
    if( !empty($_SESSION["name"])){
        $_SESSION["visits"]++;
        ?>
    <form action="a4q2.php" method=POST>
        <?php
        //echo hi username, you've been here x times!
        ?>
        <label><input value="yes" name="reset" type="hidden"></label>
        <label><input type="submit" value="Reset"></label>
    </form>
    <?php}

    ?>

    </body>
    </html>
