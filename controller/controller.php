<?php

require_once("model/GameManager.php");
require_once("model/UserManager.php");

function mainPage()
{
    $gameManager = new GameManager();
    $games = $gameManager->getTopFive();

    require("view/mainPage.php");
}

function searchResults($postParams)
{
    $gameManager = new GameManager();
    if (empty($postParams["filterCat"])) {
        $games = $gameManager->searchBackend($postParams);
        $checks = null;
    } else {
        $result = $gameManager->getResultsFromCat($postParams);
        $games = $result["db_result"];
        $checks =  $result["checks"];
       
    }
    $count = 0;
    require("view/searchGamesResults.php");
}

function  loadUserGames($userId) {
    $gameManager = new GameManager();
    $user_games = $gameManager->getUserGames($userId);

    require("view/myGames.php");
}

function addGame($postParams){
    $gameManager = new GameManager();
    $gameManager->addGame($postParams);
    header("Location:index.php?action=myGames");
}

function logOut() {
    $userManager = new UserManager();
    $userManager->logOut();
    header('Location: index.php');
}

function signIn($postParams) {
    $userManager = new UserManager();
    $location = $userManager->signIn($postParams);
    header($location); 
}

function signUp($postParams) {
    $userManager = new UserManager();
    $location = $userManager->signUp($postParams);
    header($location); 
}

function loadUserInfos($user_id) {
    $userManager = new UserManager();
    $user = $userManager->loadUserInfos($user_id);

    require("./view/memberAccount.php");
}

function uploadImgUser($user_id, $postParams, $files) {
    $userManager = new UserManager();
    $location = $userManager->uploadImgUser($user_id, $postParams, $files);

    header($location); 
}

function gameView($getParams){
    
    $gameManager = new GameManager();
    $gameManager->loadGame($getParams);
}


// function post($postId)
// {
//     $postManager = new PostManager();
//     $commentManager = new CommentManager();
//     $post = $postManager->getPost($postId);
//     $comments = $commentManager->getComments($postId);

//     require("view/postView.php");
// }

// function addComment($postId, $author, $comment)
// {
//     $commentManager = new CommentManager();
//     $affectedLines = $commentManager->postComment($postId, $author, $comment);

//     if ($affectedLines === false) {
//         throw new Exception("Impossible to add comments!");
//     } else {
//         header('Location: index.php?action=post&article_id=' . $postId);
//     }
// }
