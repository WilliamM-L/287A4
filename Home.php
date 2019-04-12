<?php
$title = "Home";
require "Header.php";
?>
<form action="login.php">
    <label><input type="submit" id="login" value="LOGIN"></label>
</form>
<form action="search.php">
    <fieldset class="first">
        <legend class="first">Reservation Information</legend>
        <label class="first">Number of Rooms (Maximum Room Capacity: 5)<input type="Number" name="NbOfRooms"></label> <br><br>
        <!--We put the input inside the label so that when we click on "Number of rooms", the cursor goes to the box.-->
        <label class="first">Classical music enthusiast?</label> <br>
        <label><input type="radio" name="ClassicalMusicFan" value="Yes">Yes</label><br>
        <label><input type="radio" name="ClassicalMusicFan" value="No">No</label><br><br>
        <label class="first">Check-in: &nbsp;&nbsp;<input type="date" name="CheckinDate"></label><br><br>
        <label class="first">Check-out:	<input type="date" name="CheckinDate"></label><br>
    </fieldset>

    <br>

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
                <label><input type="checkbox" name="locations" value="Mtl East">Montreal East</label>
                <label><input type="checkbox" name="locations" value="Mtl West">Montreal West</label>
                <label><input type="checkbox" name="locations" value="Airport">Near the airport</label>
                <label><input type="checkbox" name="locations" value="Oldport">Oldport</label>
                <label><input type="checkbox" name="locations" value="Any">Don't care</label><br><br>
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
                <label><input type="checkbox" name="Special" value="Minibar">Minibar</label>
                <label><input type="checkbox" name="Special" value="Balcony">Balcony</label>
                <label><input type="checkbox" name="Special" value="Pool">Pool</label>
                <label><input type="checkbox" name="Special" value="Water Front">Water Front</label>
                <label><input type="checkbox" name="Special" value="Garden Front">Garden Front</label>
            </li>
        </ul>
    </fieldset>
    <br>

    <fieldset id="advice" class="second">
        <legend class="second">Expert Suggestion</legend>
        <ul>
            <li>
                It is very difficult to find a hotel room in this price range in Downtown
            </li>
        </ul>
    </fieldset>
    <p>Let's see what we can find...</p>
    <input type="button" onclick="search()" value="Search">
    <input type="reset">
    <input type="submit" value="Search">
</form>
<?php
require "Footer.php";
?>
