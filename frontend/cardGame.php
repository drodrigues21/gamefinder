<div class="cardCont">
    <img src=".<?= $data['img'] ?>" alt="placeholder">
    <div class="searchResults">
        <h3 class="topFiveTitle"><?= $data['name'] ?></h3>
        <div id=shortTxt>
            <div id='descriptionShort'>
                <?= $data['shortTxt'] ?>
            </div>
            <p id='bottomtxt'> <?= $data['minP'] ?> - <?= $data['maxP'] ?> players | Rating: <?= $data['rating'] ?> |
                <a href="#">
                    More</a> </p>

        </div>
    </div>
</div>