var topFiveDivs = document.querySelectorAll(".topFive"),
    i;
var modalBg = document.querySelector(".modalBg");
var closeModal = document.querySelector(".closeModal");

for (var i = 0; i < topFiveDivs.length; i++) {
    topFiveDivs[i].addEventListener('click', function () {
        modalBg.classList.add('modalActive');
    });
}

modalBg.addEventListener('click', function () {
    modalBg.classList.remove('modalActive');
});

closeModal.addEventListener('click', function () {
    modalBg.classList.remove('modalActive');
});

// function startModal(div) {

// }