<?php

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") .
    "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));
//debuter  la racine du projet : explication amateur 
// echo URL;
require_once "controller/GameController.php";

$gameController = new GameController();
if (empty($_GET['page'])) {
    require_once "view/home.view.php";
} else {

    $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL));
    // var_dump($url); 


    switch ($url[0]) {
        case 'accueil':
            require_once("./view/home.view.php");
            break;
        case 'games':
            if (empty($url[1])) {
                $gameController->displayGames();
            } elseif (empty($url[1] === "add")) {
                echo "Créer un jeu";
            } elseif (empty($url[1] === "edit")) {
                echo "CModifier un jeu";
            } elseif (empty($url[1] === "delete")) {
                echo "Supprimer un jeu";
            }
            break;
            //  case 'users': require_once ("./view/users.view.php");
            //  break; 
        case 'users':
            require_once("./view/users.view.php");
            break;
            //  case 'prout': echo "Daouda";
            //  break; 
    }
}



//  define("URL" , str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http") . 
// "://".$_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ));

// echo URL;