<?php
$title = "Home";
require "Header.php";
?>
<form action="login.php">
    <label><input type="submit" id="login" value="LOGIN"></label>
</form>

<?php
if (isset($_SESSION["username"])){
   echo "<h4 id='login2'>Welcome, ".$_SESSION["username"].".</h4>";
}
?>

<form action="Home.php" method="post">
    <fieldset class="first">
        <legend class="first">Reservation Information</legend>
        <label class="first">Number of Rooms (Maximum Room Capacity: 5)<input type="Number" name="NbOfRooms"></label> <br><br>
        <!--We put the input inside the label so that when we click on "Number of rooms", the cursor goes to the box.-->
        <label class="first">Classical music enthusiast?</label> <br>
        <label><input type="radio" name="ClassicalMusicFan" value="y">Yes</label><br>
        <label><input type="radio" name="ClassicalMusicFan" value="n">No</label><br><br>
        <label class="first">Check-in: &nbsp;&nbsp;<input type="date"></label><br><br>
        <label class="first">Check-out:	<input type="date"></label><br>
    </fieldset>

    <br>
<?php if (isset($_SESSION["username"])){

?>
    <fieldset class="second" name="second">
        <legend class="second">Room Specification</legend>
        <ul>
            <li>
                <label class="second">Number of single/double beds:</label><br>
                <label ><input type="checkbox" name="single/double" value="0/1">0/1</label>
                <label><input type="checkbox" name="single/double" value="0/2">0/2</label>
                <label><input type="checkbox" name="single/double" value="1/0">1/0</label>
                <label><input type="checkbox" name="single/double" value="1/1">1/1</label>
                <label><input type="checkbox" name="single/double" value="1/2">1/2<br><br></label>
            </li>
            <li>
                <label class="second">Do you have preferred locations for the hotel?<br></label>
                <label><input id="Downtown" type="checkbox" name="Downtown" value="Downtown">Downtown</label>
                <label><input type="checkbox" value="y" name="Mtl East">Montreal East</label>
                <label><input type="checkbox" value="y" name="Mtl West">Montreal West</label>
                <label><input type="checkbox" value="y"" name="Airport">Near the airport</label>
                <label><input type="checkbox" value="y" name="Oldport">Oldport</label>
                <label><input type="checkbox" value="y" name="Any">Don't care</label><br><br>
            </li>
            <li>
                <label class="second">Price Range/Cost per Night:
                    <select name="cost" id="cost">
                        <option value="<50">&lt;$50 </option>
                        <option value="<100">&lt;$100</option>
                        <option value="<200">&lt;$200</option>
                        <option value="Rich">No Price Limit</option>
                    </select>
                </label><br><br>
            </li>
            <li>
                <label class="second">Number of Private Parkings</label><br>
                <label><input type="radio" name="Parkings" value="0">0</label><br>
                <label><input type="radio" name="Parkings" value="1">1</label><br>
                <label><input type="radio" name="Parkings" value="2">2</label><br>
                <label><input type="radio" name="Parkings" value="3">3</label><br>
                <label><input type="radio" name="Parkings" value="4">4</label><br><br>
            </li>
            <li>
                <label class="second">Special Facilities</label><br>
                <label><input type="checkbox" value="y" name="Minibar">Minibar</label>
                <label><input type="checkbox" value="y" name="Balcony">Balcony</label>
                <label><input type="checkbox" value="y" name="Pool">Pool</label>
                <label><input type="checkbox" value="y" name="Water Front">Water Front</label>
                <label><input type="checkbox" value="y" name="Garden Front">Garden Front</label>
            </li>
        </ul>
    </fieldset>
    <br>


    <?php
    }
    ?>
    <p>Let's see what we can find...</p>
    <input type="submit" value="Search">
    <input type="reset">
</form>
<?php if (!isset($_SESSION["username"])) {
    //It must be put here, since putting this form in the other form would send us to Home.php again
    ?>
    <div id="restriction">
        <p class="restriction">Most of the search options are only available to logged users! Log in to unlock them!</p>
        <form action="login.php">
            <label><input type="submit" value="LOGIN"></label>
        </form>
    </div>
    <?php
}
if (isset($_POST)){
    //display the results of the search:
    var_dump($_POST);
    //Format of hotel.txt
    //
    foreach ($_POST as $key=>$value){
        echo "$key=>$value";
    }
    $found =0;
    $dataSource = file("hotel.txt");
    foreach ($dataSource as $hotel){
        //dealing if one big string, containing all the info
        foreach ($_POST as $key=>$value){
            $satisfied = true;
            // the === false is necessary because it may return 0 as an offset, which is considered false in php
            //regular expressions can be used as well
            if (strpos($hotel, "$key=>$value") === false)
                $satisfied = false;
        }
        if ($satisfied){
            $found++;
        }
    }
}


require "Footer.php";
?>


<!--<fieldset id="advice" class="second">-->
<!--    <legend class="second">Expert Suggestion</legend>-->
<!--    <ul>-->
<!--        <li>-->
<!--            It is very difficult to find a hotel room in this price range in Downtown-->
<!--        </li>-->
<!--    </ul>-->
<!--</fieldset>-->
