<form action="./backend/getResultsFromCat.php" method="POST">
    <div id="places"> Location :
        <fieldset>
            <legend>
                <input type="checkbox" name="indoor" value="1" id="indoor" /> Indoor
            </legend>
            <div>
                <input type="checkbox" name="location[]" value="bar" id="bar" /> Bar
                <input type="checkbox" name="location[]" value="house" id="house" /> House
                <input type="checkbox" name="location[]" value="school" id="school" /> School
                <input type="checkbox" name="location[]" value="office" id="office" /> Office
            </div>
        </fieldset>
        <fieldset>
            <legend>
                <input type="checkbox" name="outDoor" value="1" id="outdoor" /> Outdoor
            </legend>
            <div>
                <input type="checkbox" name="location[]" value="beach" id="beach" /> Beach
                <input type="checkbox" name="location[]" value="car" id="car" /> Car
                <input type="checkbox" name="location[]" value="plane" id="plane" /> Plane
                <input type="checkbox" name="location[]" value="boat" id="boat" /> Boat
                <input type="checkbox" name="location[]" value="park" id="park" /> Park
            </div>
        </fieldset>
    </div>
    <div id="setting"> Social Setting :
        <div>
            <input type="checkbox" name="social[]" value="partyWork" id="partyWork" /> Work Party
            <input type="checkbox" name="social[]" value="partyFriends" id="partyFriends" /> Party with friends
            <input type="checkbox" name="social[]" value="family" id="family" /> Family
            <input type="checkbox" name="social[]" value="date" id="date" /> Date
        </div>
        <div>
            <input type="checkbox" name="social[]" value="camping" id="camping" /> Camping
            <input type="checkbox" name="social[]" value="icebreaker" id="icebreaker" /> Icebreaker
            <input type="checkbox" name="social[]" value="classmates" id="classmates" /> Classmates
        </div>
    </div>
    <div id="isDrink"> Looking for a drinking game? :
        <input type="radio" name="radiogroup1" value="1" id="yes" /> Yes
        <input type="radio" name="radiogroup1" value="NULL" id="no" /> No
    </div>
    <div class="playerRange"> Amount of players <br>
        2 players<input type="range" min="2" max="21" value="2" class="slider" name="playerRange" id="playerRange">20+
        players
        <input type="checkbox" name="anyP" value="anyP" checked> Any amount of players<br>
        <!-- <span id="slider_value2" style="color:black;font-weight:bold;"></span> -->
    </div>
    <div class="timeRange"> Amount of time <br>
        5 minutes<input type="range" min="5" max="61" value="2" class="slider" name="timeRange"
            onchange="show_value(this.value);" id="timeRange"> 60+ minutes
        <input type="checkbox" name="anyT" value="anyT" checked> Any amount of time<br>
        <!-- <span id="slider_value2" style="color:black;font-weight:bold;"></span> -->
    </div>
    <div id="prepAmount"> Amount of preparation needed :
        <input type="radio" name="radiogroup2" value="min" id="min" /> Minimal Amount or Less
        <input type="radio" name="radiogroup2" value="med" id="med" /> Medium Amount or Less
        <input type="radio" name="radiogroup2" value="max" id="max" /> High Amount or Less
    </div>
    <p>
        <button type="submit" id="subscribe">Find!</button>
        <button type="reset" id="reset">Reset</button>
    </p>
</form>