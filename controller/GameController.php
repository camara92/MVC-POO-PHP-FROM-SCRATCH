<?php

require_once "modele/GameManager.php";
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
    public function newGameForm(){
        require_once "view/new.game.view.php";
    }


}


  


// $games = $gameManager->getGames();

// $gameManager->loadGames();
