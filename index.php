<?php
require_once "controller/GameController.php";

$gameController = new GameController(); 
 if(empty($_GET['page'])){
    require_once "view/home.view.php";
  
 }else{
     switch($_GET['page']){
         case 'accueil': require_once ("./view/home.view.php");
         break; 
         case 'games': $gameController->displayGames();
         break; 
        //  case 'users': require_once ("./view/users.view.php");
        //  break; 
         case 'users': require_once ("./view/users.view.php");
         break; 
        //  case 'prout': echo "Daouda";
        //  break; 
     }
 }
