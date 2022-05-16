
<?php ob_start() ?>

<p>Accueil Hello World ! </p>



<?php

$title = "Projet POO en PHP  "; 
//$content = "Projet crud en mode POO en PHP "; 
$content = ob_get_clean(); 
require_once "base.html.php";
?>