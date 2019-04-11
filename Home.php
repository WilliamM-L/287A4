<?php
$title = "Home";
require "Header.php";
?>
<form action="search.php">
    <fieldset class="first">
        <legend class="first">Reservation Information</legend>
        <label class="first">Number of Rooms (Maximum Room Capacity: 5)<input type="number" name="NbOfRooms"></label> <br><br>

    </fieldset>
    <br>
</form>
<?php
require "Footer.php";
?>
