<div class="    ">
    <img src="<?= $data['img'] ?>" alt="placeholder">
    <div class="searchResults">
        <h3 class="topFiveTitle"><?= $data['name'] ?></h3>
        <div id=shortTxt>'
            <?= $data['shortTxt'] ?>
            <p><?= $data['minP'] ?> - <?= $data['maxP'] ?> players | Rating: <?= $data['rating'] ?> </p>
            <a href="#">More</a>
        </div>
    </div>
</div>