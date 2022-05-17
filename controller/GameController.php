<?php

require_once "GameManager.php";
class GameController {
    private $gameManager;


    public function __construct(){
        $this->gameManager = new GameManager();
        $this->gameManager->loadGames();        
    }

    public function displayGames(){
        $games = $this->gameManager->getGames();
        require_once "View/games.view.php";
    }


}


  


// $games = $gameManager->getGames();

// $gameManager->loadGames();
