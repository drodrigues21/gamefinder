<h3>Find your game</h3>
<form action="../backend/getResultsFromCat.php" method="POST" id="filterForm">
    <div id="filterFormContainer">
        <div class="leftSideForm">
            <p>Location:</p>
            <div class="placesContainer">
                <!-- <p>Location:</p> -->
                <fieldset class="placesFieldset checkBoxStyle">
                    <legend class="placesLegend">
                        <input type="checkbox" name="indoor" value="1" id="indoor" />
                        <label for="indoor"><span></span>Indoor</label>
                    </legend>
                    <div class="placesCheckboxes">
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="bar" id="bar" />
                            <label for="bar"><span></span> Bar</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="house" id="house" />
                            <label for="house"><span></span>House</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="school" id="school" />
                            <label for="school"><span></span>School</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="office" id="office" />
                            <label for="office"><span></span>Office</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset class="placesFieldset checkBoxStyle">
                    <legend class="placesLegend">
                        <input type="checkbox" name="outDoor" value="1" id="outdoor" />
                        <label for="outdoor"><span></span>Outdoor</label>
                    </legend>
                    <div class="placesCheckboxes">
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="beach" id="beach" />
                            <label for="beach"><span></span>Beach</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="car" id="car" />
                            <label for="car"><span></span>Car</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="plane" id="plane" />
                            <label for="plane"><span></span>Plane</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="boat" id="boat" />
                            <label for="boat"><span></span>Boat</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="park" id="park" />
                            <label for="park"><span></span>Park</label>
                        </div>
                    </div>
                </fieldset>
            </div>
            

            <div class="timeRange">
                <!-- <p>Time:</p> -->
                <div id="timeSlider" class="range-slider ">
                    <span id="timeBullet" class="timeSliderLabel">5</span>
                    <input id="timeRange" type="range" min="5" max="60" value="0" class="slider" name="timeRange"
                        onchange="show_value(this.value);">
                </div>
                <div class="timeBoxMinmax">
                    <span>5</span>
                    <span>60+</span>
                </div>
                <div class="checkBoxStyle">
                    <input type="checkbox" name="anyT" value="1" id="anyAmountTime" checked />
                    <label for="anyAmountTime"><span></span>Any amount of time</label>
                </div>
            </div>



            <div class="playerRangeContainer">
                <!-- <p>Number of players:</p> -->
                <div class="rangeSlider">
                    <span id="playerBullet" class="playerSliderLabel">2</span>
                    <input id="playerRange" class="slider" name="playerRange" type="range" value="2" min="2" max="20">
                </div>
                <div class="playerBoxMinmax">
                    <span>2</span>
                    <span>20+</span>
                </div>
                <div class="checkBoxStyle">
                    <input type="checkbox" name="anyP" value="1" id="anyAmountPlayer" checked />
                    <label class="test" for="anyAmountPlayer"><span></span>Any amount of players</label>
                </div>
            </div>
        </div>
        <div class="rightSideForm">
            <p>Social Setting:</p>
            <div class="settingContainer">
                <!-- <p>Social Setting:</p> -->
                <fieldset class="settingFieldset">
                    <legend class="settingLegend"></legend>
                    <div class="settingCheckboxes">
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="social[]" value="partyWork" id="partyWork" />
                            <label for="partyWork"><span></span>Work Party</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="social[]" value="partyFriends" id="partyFriends" />
                            <label for="partyFriends"><span></span>Friends Party</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="social[]" value="family" id="family" />
                            <label for="family"><span></span>Family</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="social[]" value="date" id="date" />
                            <label for="date"><span></span>Date</label>
                        </div>
                    </div>
                    <div class="settingCheckboxes">
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="social[]" value="camping" id="camping" />
                            <label for="camping"><span></span>Camping</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="social[]" value="icebreaker" id="icebreaker" />
                            <label for="icebreaker"><span></span>Icebreaker</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="social[]" value="classmates" id="classmates" />
                            <label for="classmates"><span></span>Classmates</label>
                        </div>
                    </div>
                </fieldset>
            </div>

            <div class="isDrink">
                <p>Drinking game? </p>
                <div class="radioGroup">
                    <input type="radio" id="yes" name="playerSelector"><label for="yes">Yes</label><input type="radio"
                        id="no" name="playerSelector" checked><label for="no">No</label>
                </div>
            </div>


            <div class="prepAmount">
                <p>Amount of preparation:</p>
                <div class="radioGroup">
                    <input type="radio" id="low" name="prepSelector" checked><label for="low">Low</label><input
                        type="radio" id="medium" name="prepSelector"><label for="medium">Medium</label><input
                        type="radio" id="max" name="prepSelector"><label for="max">Max</label>
                </div>
            </div>
            




        </div>
    </div>
    <div class="FromButton">
        <button type="submit" id="subscribe">Find!</button>
        <button type="reset" id="reset">Reset</button>
    </div>
</form>