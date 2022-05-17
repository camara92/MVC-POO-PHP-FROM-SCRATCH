<?php ob_start(); ?>



<p>Formualire ajout de jeu  </p>

<form method="POST" action="<?= URL ?>games/gvalid">
  <div class="form-group">
    <label for="title">Titre du jeu</label>
    <input type="text" name="title" class="form-control" id="title">
  </div>
  <div class="form-group">
    <label for="nbplayers">Nombres de joueurs</label>
    <input type="number" name="nbplayers" class="form-control" id="nbplayers">
  </div>
  <button class="btn btn-success" type="submit">Ajouter un jeu</button>
</form>




<?php

$content = ob_get_clean();
$title = "Ajouter un jeu ";
require_once "base.html.php";

?>