<?php require_once("../utils.php"); ?>
<div class="cardCont" modal="game" game-id="<?= $data['id']; ?>">
    <img src="<?= LOCALHOST ?>images/<?= $data['img'] ?>" alt="placeholder">
    <div class="searchResults">
        <h3 class="topFiveTitle"><?= $data['name'] ?></h3>
        <div id=shortTxt>
            <div id='descriptionShort'>
                <?= $data['shortTxt'] ?>
            </div>
            <p id='bottomtxt'> <?= $data['minP'] ?> - <?= $data['maxP'] ?> players</p>

        </div>
    </div>
</div>