const localhost = "http://localhost:8888/Sites/gamefinder/";

var topFiveDivs = document.querySelectorAll("div[modal=game]");

for (let i = 0; i < topFiveDivs.length; i++) {
    topFiveDivs[i].addEventListener('click', function (e) {
        var modalBg = generate_modal();
        var closeModal = document.querySelector(".closeModal");
        closeModal.addEventListener('click', function () {
            modalBg.classList.remove('modalActive');
            document.body.removeChild(modalBg);
        });

        // get back content from backend

        var topFiveContainer = e.target.parentNode;

        if (topFiveContainer.className == "topFiveContent" || topFiveContainer.className == "sectionCont") {
            topFiveContainer = e.target;
        }
        // cardgame handle
        console.log(topFiveContainer);
        while (topFiveContainer.className != "cardCont") {
            topFiveContainer = topFiveContainer.parentNode;
        }
        var game_id = "game_id=" + topFiveContainer.getAttribute("game-id");

        //AJAX
        var xhr = new XMLHttpRequest();
        xhr.open("GET", localhost + "backend/gameView.php?" + game_id, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var content = JSON.parse(xhr.responseText);
                var div_generated = generate_content_modal(content);
                modalBg.firstElementChild.firstElementChild.appendChild(div_generated);
                var rating = generate_rating_System(game_id);
            }
        };

        xhr.send();
    });
}

function generate_modal(div) {
    let modalBg = document.createElement('div');
    modalBg.className = "modalBg";
    modalBg.classList.add('modalActive');

    let viewCont = document.createElement('div');
    viewCont.className = "modalGameViewContainer";

    let gameCont = document.createElement('div');
    gameCont.className = "gameInfosContainer";


    let closeModal = document.createElement('span');
    closeModal.className = "closeModal";
    closeModal.textContent = "X";

    viewCont.appendChild(gameCont);
    viewCont.appendChild(closeModal);
    modalBg.appendChild(viewCont);

    return document.body.appendChild(modalBg);
}

function generate_content_modal(content) {
    console.log(content.img);

    let gameView = document.createElement('div');
    gameView.className = "gameView";

    let gameViewHeader = document.createElement('div');
    gameViewHeader.className = "gameViewHeader";

    let gameViewImg = document.createElement('img');
    gameViewImg.className = "gameViewImg";
    gameViewImg.src = "http://localhost:8888/Sites/gamefinder/images/" + content.img;

    let gameViewName = document.createElement('h3');
    gameViewName.textContent = content.name;

    gameViewHeader.appendChild(gameViewImg);
    gameViewHeader.appendChild(gameViewName);

    let gameViewContent = document.createElement('div');
    gameViewContent.className = "gameViewContent";

    let gameViewText = document.createElement('p');
    gameViewText.textContent = content.fullTxt;

    let gameViewinfo = document.createElement('p');
    gameViewinfo.textContent =
        content.minP + " - " + content.maxP + ' Players | ' + content.minT + " - " + content.maxT + " Minutes";

    let rating = document.createElement('div');
    rating.id = "rating";
    gameViewContent.appendChild(gameViewText);
    gameViewContent.appendChild(gameViewinfo);
    gameViewContent.appendChild(rating);

    gameView.appendChild(gameViewHeader);
    gameView.appendChild(gameViewContent);

    return gameView;
}

function generate_rating_System(game_id) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", localhost + "frontend/ratingFrontEnd.php?" + game_id, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var content = xhr.responseText;
            console.log(content);
            let container = document.querySelector("#rating");
            container.innerHTML = content;
        }
    };

    xhr.send();
}