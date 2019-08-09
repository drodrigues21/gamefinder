<h3>Find your game</h3>
<form action="http://localhost:8888/Sites/gamefinder/frontend/resultsPage.php" method="POST" id="filterForm">
    <input type="hidden" name="filterCat" value="filterCat" />
    <div id="filterFormContainer">
        <div class="leftSideForm">
            <p>Location:</p>
            <div class="placesContainer">
                <!-- <p>Location</p> -->
                <fieldset class="placesFieldset checkBoxStyle">
                    <legend class="placesLegend">
                        <input type="checkbox" name="indoor" value="1" id="indoor" />
                        <label for="indoor"><span></span>Indoor</label>
                    </legend>
                    <div class="placesCheckboxes">
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="bar" id="bar" <?php
                                                                                            if (isset($locLength)) {
                                                                                                for ($i = 0; $i < $locLength; $i++) {
                                                                                                    if ($checks[$locations[$i]] == 'bar') {
                                                                                                        echo 'checked';
                                                                                                    } else {
                                                                                                        echo '';
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                            ?> />
                            <label for="bar"><span></span> Bar</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="house" id="house" <?php
                                                                                                if (isset($locLength)) {
                                                                                                    for ($i = 0; $i < $locLength; $i++) {
                                                                                                        if ($checks[$locations[$i]] == 'house') {
                                                                                                            echo 'checked';
                                                                                                        } else {
                                                                                                            echo '';
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                                ?> />
                            <label for="house"><span></span>House</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="school" id="school" <?php
                                                                                                if (isset($locLength)) {
                                                                                                    for ($i = 0; $i < $locLength; $i++) {
                                                                                                        if ($checks[$locations[$i]] == 'school') {
                                                                                                            echo 'checked';
                                                                                                        } else {
                                                                                                            echo '';
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                                ?> />
                            <label for="school"><span></span>School</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="office" id="office" <?php
                                                                                                if (isset($locLength)) {
                                                                                                    for ($i = 0; $i < $locLength; $i++) {
                                                                                                        if ($checks[$locations[$i]] == 'office') {
                                                                                                            echo 'checked';
                                                                                                        } else {
                                                                                                            echo '';
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                                ?> />
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
                            <input type="checkbox" name="location[]" value="beach" id="beach" <?php
                                                                                                if (isset($locLength)) {
                                                                                                    for ($i = 0; $i < $locLength; $i++) {
                                                                                                        if ($checks[$locations[$i]] == 'beach') {
                                                                                                            echo 'checked';
                                                                                                        } else {
                                                                                                            echo '';
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                                ?> />
                            <label for="beach"><span></span>Beach</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="car" id="car" <?php
                                                                                            if (isset($locLength)) {
                                                                                                for ($i = 0; $i < $locLength; $i++) {
                                                                                                    if ($checks[$locations[$i]] == 'car') {
                                                                                                        echo 'checked';
                                                                                                    } else {
                                                                                                        echo '';
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                            ?> />
                            <label for="car"><span></span>Car</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="plane" id="plane" <?php
                                                                                                if (isset($locLength)) {
                                                                                                    for ($i = 0; $i < $locLength; $i++) {
                                                                                                        if ($checks[$locations[$i]] == 'plane') {
                                                                                                            echo 'checked';
                                                                                                        } else {
                                                                                                            echo '';
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                                ?> />
                            <label for="plane"><span></span>Plane</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="boat" id="boat" <?php
                                                                                            if (isset($locLength)) {
                                                                                                for ($i = 0; $i < $locLength; $i++) {
                                                                                                    if ($checks[$locations[$i]] == 'boat') {
                                                                                                        echo 'checked';
                                                                                                    } else {
                                                                                                        echo '';
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                            ?> />
                            <label for="boat"><span></span>Boat</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="location[]" value="park" id="park" <?php
                                                                                            if (isset($locLength)) {
                                                                                                for ($i = 0; $i < $locLength; $i++) {
                                                                                                    if ($checks[$locations[$i]] == 'park') {
                                                                                                        echo 'checked';
                                                                                                    } else {
                                                                                                        echo '';
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                            ?> />
                            <label for="park"><span></span>Park</label>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="isDrink">
                <p>Drinking game? </p>
                <div class="radioGroup">
                    <input type="radio" id="yes" name="drink" value="drink" <?php if (isset($checks['drink']) and $checks['drink'] == "drink") {
                                                                                echo "checked";
                                                                            } else {
                                                                                echo "";
                                                                            } ?>><label for="yes">Yes</label><input
                        type="radio" id="no" name="drink" value="nodrink"
                        <?php if (isset($checks['drink']) and $checks['drink'] == "nodrink") {
                                                                                                                                                                            echo "checked";
                                                                                                                                                                        } else {
                                                                                                                                                                            echo "";
                                                                                                                                                                        } ?>><label
                        for="no">No</label>
                </div>
            </div>
            <div class="playerRangeContainer">
                <!-- <p>Number of players:</p> -->
                <div class="rangeSlider">
                    <span id="playerBullet" class="playerSliderLabel"><?php if (isset($players) and $players != 'anyP') {
                                                                            echo $players;
                                                                        } else {
                                                                            echo '2';
                                                                        } ?></span>
                    <input id="playerRange" class="slider" name="playerRange" type="range" value=<?php if (isset($checks['players']) and $checks['players'] != "anyP") {
                                                                                                        echo $players;
                                                                                                    } else {
                                                                                                        echo "2";
                                                                                                    } ?> min="2"
                        max="20">
                </div>
                <div class="playerBoxMinmax">
                    <span>2</span>
                    <span>20+</span>
                </div>
                <div>
                    <label><input type="checkbox" name="anyP" id="anyP" value="1" <?php if (isset($checks['players']) and $checks['players'] == "anyP") {
                                                                                        echo "checked";
                                                                                    } else {
                                                                                        echo "";
                                                                                    } ?>> Any amount of players</label>
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
                            <input type="checkbox" name="social[]" value="partyWork" id="partyWork" <?php
                                                                                                    if (isset($socLength)) {
                                                                                                        for ($i = 0; $i < $socLength; $i++) {
                                                                                                            if ($checks[$socials[$i]] == 'partyWork') {
                                                                                                                echo 'checked';
                                                                                                            } else {
                                                                                                                echo '';
                                                                                                            }
                                                                                                        }
                                                                                                    }
                                                                                                    ?>>
                            <label for="partyWork"><span></span>Work Party</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="social[]" value="partyFriends" id="partyFriends" <?php
                                                                                                            if (isset($socLength)) {
                                                                                                                for ($i = 0; $i < $socLength; $i++) {
                                                                                                                    if ($checks[$socials[$i]] == 'partyFriends') {
                                                                                                                        echo 'checked';
                                                                                                                    } else {
                                                                                                                        echo '';
                                                                                                                    }
                                                                                                                }
                                                                                                            }
                                                                                                            ?> />
                            <label for="partyFriends"><span></span>Friends Party</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="social[]" value="family" id="family" <?php
                                                                                                if (isset($socLength)) {
                                                                                                    for ($i = 0; $i < $socLength; $i++) {
                                                                                                        if ($checks[$socials[$i]] == 'family') {
                                                                                                            echo 'checked';
                                                                                                        } else {
                                                                                                            echo '';
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                                ?> />
                            <label for="family"><span></span>Family</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="social[]" value="date" id="date" <?php
                                                                                            if (isset($socLength)) {
                                                                                                for ($i = 0; $i < $socLength; $i++) {
                                                                                                    if ($checks[$socials[$i]] == 'date') {
                                                                                                        echo 'checked';
                                                                                                    } else {
                                                                                                        echo '';
                                                                                                    }
                                                                                                }
                                                                                            }
                                                                                            ?> />
                            <label for="date"><span></span>Date</label>
                        </div>
                    </div>
                    <div class="settingCheckboxes">
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="social[]" value="camping" id="camping" <?php
                                                                                                if (isset($socLength)) {
                                                                                                    for ($i = 0; $i < $socLength; $i++) {
                                                                                                        if ($checks[$socials[$i]] == 'camping') {
                                                                                                            echo 'checked';
                                                                                                        } else {
                                                                                                            echo '';
                                                                                                        }
                                                                                                    }
                                                                                                }
                                                                                                ?> />
                            <label for="camping"><span></span>Camping</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="social[]" value="icebreaker" id="icebreaker" <?php
                                                                                                        if (isset($socLength)) {
                                                                                                            for ($i = 0; $i < $socLength; $i++) {
                                                                                                                if ($checks[$socials[$i]] == 'icebreaker') {
                                                                                                                    echo 'checked';
                                                                                                                } else {
                                                                                                                    echo '';
                                                                                                                }
                                                                                                            }
                                                                                                        }
                                                                                                        ?> />
                            <label for="icebreaker"><span></span>Icebreaker</label>
                        </div>
                        <div class="checkBoxStyle">
                            <input type="checkbox" name="social[]" value="classmates" id="classmates" <?php
                                                                                                        if (isset($socLength)) {
                                                                                                            for ($i = 0; $i < $socLength; $i++) {
                                                                                                                if ($checks[$socials[$i]] == 'classmates') {
                                                                                                                    echo 'checked';
                                                                                                                } else {
                                                                                                                    echo '';
                                                                                                                }
                                                                                                            }
                                                                                                        }
                                                                                                        ?> />
                            <label for="classmates"><span></span>Classmates</label>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="prepAmount">
                <p>Amount of preparation:</p>
                <div class="radioGroup">
                    <input type="radio" id="low" name="prepSelector" value="min" <?php if (isset($checks['prep']) and $checks['prep'] == "min") {
                                                                                        echo "checked";
                                                                                    } else {
                                                                                        echo "";
                                                                                    } ?>>
                    <label for="low">Low</label><input type="radio" id="medium" name="prepSelector" value="med"
                        <?php if (isset($checks['prep']) and $checks['prep'] == "med") {
                                                                                                                    echo "checked";
                                                                                                                } else {
                                                                                                                    echo "";
                                                                                                                } ?>><label for="medium">Medium</label><input type="radio" id="max" name="prepSelector"
                        value="max"
                        <?php if (isset($checks['prep']) and $checks['prep'] == "max") {
                                                                                                                                                                                                                        echo "checked";
                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                        echo "";
                                                                                                                                                                                                                    } ?>><label
                        for="max">Max</label>
                </div>
            </div>
            <div class="timeRange">
                <!-- <p>Time:</p> -->
                <div id="timeSlider" class="range-slider ">
                    <span id="timeBullet" class="timeSliderLabel"><?php if (isset($time) and $time != 'anyT') {
                                                                        echo $time;
                                                                    } else {
                                                                        echo '5';
                                                                    } ?></span>
                    <input id="timeRange" type="range" min="5" max="60" value=<?php if (isset($checks['time']) and $checks['time'] != "anyT") {
                                                                                    echo $time;
                                                                                } else {
                                                                                    echo "5";
                                                                                } ?> class="slider" name="timeRange">
                </div>
                <div class=" timeBoxMinmax">
                    <span>5</span>
                    <span>60+</span>
                </div>
                <div>
                    <label><input type="checkbox" name="anyT" value="1" id="anyT" <?php if (isset($checks['time']) and $checks['time'] == "anyT") {
                                                                                        echo "checked";
                                                                                    } else {
                                                                                        echo "";
                                                                                    } ?>>Any amount of time </label>
                </div>
            </div>
        </div>
    </div>
    <div class="FromButton">
        <button type="submit" id="subscribe">Find!</button>
        <!-- <button type="reset" id="reset">Reset</button> -->
    </div>
</form>