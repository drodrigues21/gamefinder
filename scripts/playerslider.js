function playerSliderValue() {
    var playerBulletRange = document.getElementById("playerBullet");
    var playerSliderRange = document.getElementById("playerRange");


    if (playerBulletRange && playerSliderRange) {
        var anyAmountPlayer = document.getElementById("anyP");
        playerSliderRange.addEventListener("input", playerSliderValue, false);
        playerBulletRange.innerHTML = playerSliderRange.value;
        var bulletPosition = ((playerSliderRange.value - 2) / playerSliderRange.max);
        playerBulletRange.style.left = (bulletPosition * 250) + "px";
        // anyAmountPlayer.removeAttribute("checked"); This breaks my code
        if (playerSliderRange.value != 2) {
            anyAmountPlayer.removeAttribute("checked");
        }
    }
}

function timeSliderValue() {
    var timeSliderRange = document.getElementById("timeRange");
    var timeBulletRange = document.getElementById("timeBullet");

    if (timeSliderRange && timeBulletRange) {
        var anyAmountTime = document.getElementById("anyT");
        timeSliderRange.addEventListener("input", timeSliderValue, false);
        timeBulletRange.innerHTML = timeSliderRange.value;
        var bulletPosition = ((timeSliderRange.value - 5) / timeSliderRange.max);
        timeBulletRange.style.left = (bulletPosition * 250) + "px";

        if (timeSliderRange.value != 5) {
            anyAmountTime.removeAttribute("checked");
        }
    }

}

{
    timeSliderValue();
    playerSliderValue();
}