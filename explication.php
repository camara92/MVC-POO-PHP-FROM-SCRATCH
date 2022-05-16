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

?>