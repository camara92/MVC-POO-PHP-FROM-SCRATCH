<?php
     require_once "Manager.php";
     require_once "User.php";
     class UserManager extends Manager {

        private $user;
    
        public function addUser($user){
            $this->user[] = $user;
        }
    
        public function getUser(){
            return $this->user;
        }
    
        public function loadUser(){
            $req = $this->getBdd()->prepare("SELECT * FROM users");
            $req->execute();
            $users = $req->fetchAll(PDO::FETCH_ASSOC);
            $req->closeCursor(); 

            foreach($users as $user){

                $u= new User($user['id'], $user["name"], $user['email'],$user['age']); 
                $this->addUser($u); 
            }
    
           // var_dump($myGames);
    
        }
    
    
    }