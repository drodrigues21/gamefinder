
<div id="elt_<?=$count;?>" class="topFive">
    <div class="TopFiveIcon"><?php
        $topPosition = $count+1;
        echo "#$topPosition";
    ?></div>
    <p class="topFiveTitle"><?= $data['name'];?></p>
    <p class="topFiveText">Click to see more.</p>
</div>
<!-- 
<div id="elt_<?=$count;?>" class="topFive">
    <img src="../images/example.jpg" alt="">
    <div class="icon">#1</div>
    <div class="topFiveDescription">
        <h3><?= $data;?></h3>
        <p><?= $data;?></p>
        <a href="#">More</a>
    </div>
</div>
 -->

