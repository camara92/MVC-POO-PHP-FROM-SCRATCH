<?php ob_start(); ?>



<p>Formualire ajout game </p>




<?php

$content = ob_get_clean();
$title = "Ajouter un jeu ";
require_once "base.html.php";

?>