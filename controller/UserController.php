<?php

require_once "modele/UserManager.php";
class UserController {
    private $userManager;


    public function __construct(){
        $this->userManager = new UserManager();
        $this->userManager->loadUser();        
    }

    public function displayUsers(){
        $games = $this->userManager->getUser();
        require_once "View/users.view.php";
    }


}

