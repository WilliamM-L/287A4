<?php
$lastName = $_POST["lastName"];
$number = $_POST["phoneNumber"];

if (preg_match("/^[A-Z][a-z]{1,29}$/",$lastName) and preg_match("/^\(\d{3}\)-\d{3}-\d{4}$/",$number)){
    echo ("<strong>This is valid!</strong>");
} else{
    echo ("<strong>This is wrong!</strong>");
}
?>