<?php
while ($data = $response->fetch()) {
    echo '<div class = "searchResults">' .
        $data['name'] .
        '<br>' .
        $data['minP'] .
        '-' .
        $data['maxP'] .
        ' players' .
        '</div> </br>';
}