<?php
     require_once "Manager.php";
     class GameManager extends Manager {

        private $games;
    
        public function addGame($game){
            $this->games[] = $game;
        }
    
        public function getGames(){
            return $this->games;
        }
    
        public function loadGames(){
            $req = $this->getBdd()->prepare("SELECT * FROM games");
            $req->execute();
            $myGames = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor(); 

            foreach($myGames as $game){
                
                $g= new Game($game['id'], $game["title"], $game['nbplayers']); 
                $this->addGame($g); 
            }
    
           // var_dump($myGames);
    
        }
    
    
    }


/**
 * Gestion de l’entité
game et des games
dans notre app
 */
