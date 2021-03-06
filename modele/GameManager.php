<?php
     require_once "Manager.php";
     require_once "Game.php";
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


        public function newGameDB($title, $nbplayers){
            $req = "INSERT INTO games (title, nbplayers) VALUES  (:title, :nbplayers)";
            $stat = $this->getBdd()->prepare($req);
            $stat->bindValue(":title", $title, PDO::PARAM_STR);
            $stat->bindValue(":nbplayers", $nbplayers, PDO::PARAM_INT);
            $result= $stat->execute(); 
            $stat->closeCursor(); 

            if($result){
                $game= new Game($this->getBdd()->lastInsertId(), $title, $nbplayers); 
                $this->addGame($game); 

            }
        }
    
    
    }


/**
 * Gestion de l’entité
game et des games
dans notre app
 */
