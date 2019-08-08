//Player Range Slider 
var playerSliderRange = document.getElementById("playerRange");
var playerBulletRange = document.getElementById("playerBullet");
var anyAmountPlayer = document.getElementById("anyP");
var anyAmountTime = document.getElementById("anyT");

playerSliderRange.addEventListener("input", playerSliderValue, false);

function playerSliderValue() {
    playerBulletRange.innerHTML = playerSliderRange.value;
    var bulletPosition = ((playerSliderRange.value - 2) / playerSliderRange.max);
    playerBulletRange.style.left = (bulletPosition * 250) + "px";
    anyAmountPlayer.removeAttribute("checked");
}

// Time Range Slider
var timeSliderRange = document.getElementById("timeRange");
var timeBulletRange = document.getElementById("timeBullet");

timeSliderRange.addEventListener("input", timeSliderValue, false);

function timeSliderValue() {
    timeBulletRange.innerHTML = timeSliderRange.value;
    var bulletPosition = ((timeSliderRange.value - 5) / timeSliderRange.max);
    timeBulletRange.style.left = (bulletPosition * 250) + "px";
    anyAmountTime.removeAttribute("checked");
}

timeSliderValue();
playerSliderValue();
