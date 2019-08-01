<?php
while ($data = $response->fetch()) {
    echo
        '<div id="elt_' .
            // $count .
            'class="searchResults">
<img src="' .
            $data['img'] . // not working
            '" alt="placeholder">
<div class="searchResults">
    <h3>' .
            $data['name'] .
            '</h3>' .
            '<br> <div id=shortTxt>' .
            $data['shortTxt'] .
            '<p>' .
            $data['minP'] .
            '-' .
            $data['maxP'] .
            ' players' .
            ' | Rating: ' .
            $data['rating'] .
            '</p>
    <a href="#">More</a>
</div>
</div> <br>';
}