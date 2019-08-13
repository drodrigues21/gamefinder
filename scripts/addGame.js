// Add Game Modal

var addGameBtn = document.querySelector(".addGameBtn");
var addGameForm = document.querySelector(".addGameForm");
var closeAddGame = document.querySelector(".closeAddGame");


addGameBtn.addEventListener('click', function () {
    addGameForm.classList.add("addGameFormActive");
});

closeAddGame.addEventListener('click', function () {
    addGameForm.classList.remove("addGameFormActive");
});