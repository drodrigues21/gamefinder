<form action="./backend/getResultsFromCat.php" method="POST" id="subSectionForm">
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
            <input type="checkbox" name="social[]" value="partyClose" id="partyClose" /> Party with close friends
            <input type="checkbox" name="social[]" value="partyFar" id="partyFar" /> Party with acquaintances
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
        <input type="radio" name="radiogroup1" value="null" id="no" /> No
    </div>
    <div id="playerRange"> Amount of players <br>
        2 players<input type="range" min="2" max="20" value="0" class="slider" name="playerRange" id="playerRange">20+
        players
        <!-- <span id="slider_value2" style="color:black;font-weight:bold;"></span> -->
    </div>
    <div id="timeRange"> Amount of time <br>
        5 minutes<input type="range" min="5" max="60" value="0" class="slider" name="timeRange"
            onchange="show_value(this.value);" id="timeRange"> 60+ minutes
        <!-- <span id="slider_value2" style="color:black;font-weight:bold;"></span> -->
    </div>
    <div id="prepAmount"> Amount of preparation needed :
        <input type="radio" name="radiogroup2" value="min" id="min" /> Minimal Amount
        <input type="radio" name="radiogroup2" value="med" id="med" /> Medium Amount
        <input type="radio" name="radiogroup2" value="max" id="max" /> High Amount
    </div>
    <p>
        <button type="submit" id="subscribe">Find!</button>
        <button type="reset" id="reset">Reset</button>
    </p>
</form>