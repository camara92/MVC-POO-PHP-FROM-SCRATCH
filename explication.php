<?php  ob_start();

abstract class Mere {

    //Abstract permt de limiter la creation et permettre d'hériter la class Mere 
    //on mettant $nom en commenataire on peut quand même faire l'heritage de la classe 
    // Class Mere 
    //si nous mettons l avariable $bdd en private il y aura forcément une erreur 
    // faites pour voir => vive la POO 
    public $bdd ="connexion"; 
}

class Fille extends Mere{
    public function getBDD(){
        return $this->bdd; 
    }
}

//$nom = new Mere(); 
$fille = new Fille(); 

// echo $fille-> bdd; 
echo $fille-> getBDD; 

?>



<p>Bienvenue sur notre store !</p>




<?php

$content =ob_get_clean();
$title = "Bienvenue chez Game-X";
require_once "base.html.php";




// $phrase = "Test c'est génial ";
// echo $phrase; 
// $exploz = explode(" ");


// var_dump($exploz); 



define("URL" , str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http") . 
"://".$_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] ));

require_once "controller/GameController.php";
$gameController = new GameController();

if(empty($_GET['page'])){
    require_once "view/home.view.php";
}else{
    $url = explode("/", filter_var($_GET['page'], FILTER_SANITIZE_URL) );
    switch ($url[0]) {
        case 'accueil': require_once "view/home.view.php";
        break;

        case 'games': 
            if(empty($url[1])){
                $gameController->displayGames();
            }elseif($url[1] == "add"){
                echo "Ajout d'un jeu";
            }elseif($url[1] == "edit"){
                echo "Modifier un jeu";
            }elseif($url[1] == "delete"){
                echo "Supprimer un jeu";
            }
        break;

        
        case 'users': require_once "view/users.view.php";
        break;
    }
}


?>