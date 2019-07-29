<form action="submitform.php" method="POST" id="subSectionForm">
    <div id="places"> Location :
        <input type="checkbox" name="indoor" value="indoor" id="indoor" /> Indoor
        <input type="checkbox" name="bar" value="bar" id="bar" /> Bar
        <input type="checkbox" name="house" value="house" id="house" /> House
        <input type="checkbox" name="school" value="school" id="school" /> School
        <input type="checkbox" name="office" value="office" id="office" /> Office
        <input type="checkbox" name="outdoor" value="outdoor" id="outdoor" /> Outdoor
        <input type="checkbox" name="park" value="park" id="park" /> Park
        <input type="checkbox" name="beach" value="beach" id="beach" /> Beach
        <input type="checkbox" name="car" value="car" id="car" /> Car
        <input type="checkbox" name="plane" value="plane" id="plane" /> Plane
        <input type="checkbox" name="boat" value="boat" id="boat" /> Boat
    </div>
    <div id="setting"> Social Setting :
        <input type="checkbox" name="partyWork" value="partyWork" id="partyWork" /> Work Party
        <input type="checkbox" name="partyClose" value="partyClose" id="partyClose" /> Party with close friends
        <input type="checkbox" name="partyFar" value="partyFar" id="partyFar" /> Party with acquaintances
        <input type="checkbox" name="family" value="family" id="family" /> Family
        <input type="checkbox" name="date" value="date" id="date" /> Date
        <input type="checkbox" name="camping" value="camping" id="camping" /> Camping
        <input type="checkbox" name="icebreaker" value="icebreaker" id="icebreaker" /> Icebreaker
        <input type="checkbox" name="classmates" value="classmates" id="classmates" /> Classmates
    </div>
    <div id="isDrink"> Looking for a drinking game? :
        <input type="radio" name="radiogroup" value="yes" id="yes" /> Yes
        <input type="radio" name="radiogroup" value="no" id="no" /> No
    </div>
    <div id="playerRange"> Amount of players <br>
        2 players<input type="range" min="1" max="20" value="0" class="slider" name="playerRange" id="playerRange">20+
        players
        <!-- <span id="slider_value2" style="color:black;font-weight:bold;"></span> -->
    </div>
    <div id="timeRange"> Amount of time <br>
        5 minutes<input type="range" min="1" max="60" value="0" class="slider" name="timeRange"
            onchange="show_value(this.value);" id="timeRange"> 60+ minutes
        <!-- <span id="slider_value2" style="color:black;font-weight:bold;"></span> -->
    </div>
    <div id="prepAmount"> Amount of preparation needed :
        <input type="radio" name="radiogroup" value="min" id="min" /> Minimal Amount
        <input type="radio" name="radiogroup" value="med" id="med" /> Medium Amount
        <input type="radio" name="radiogroup" value="max" id="max" /> High Amount
    </div>
    <div id="btnFormContainer">
        <button type="submit" id="subscribe">Find!</button>
        <button type="reset" id="reset">Reset</button>
    </div>
</form>