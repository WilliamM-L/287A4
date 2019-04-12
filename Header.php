<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title?></title>
    <link rel="stylesheet" href="Hotel.css">
<!--    For some reason, having embedded CSS here causes the web server to throw a 502 Bad Gateway error-->
</head>

<body>
<table>
    <tr>
        <td>
            <img src="Gothic.jpg" alt="Gothic hotel"
                 onclick="window.location.href='Home.php'"/>
            <h1><br>Hotel Reservation Form</h1>
        </td>
    </tr>
</table>
<div id="time">

</div>
<script src="Active.js"></script>

