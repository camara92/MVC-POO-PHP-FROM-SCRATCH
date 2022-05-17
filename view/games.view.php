<?php
// require_once("Game.php");
require_once("GameManager.php");
// require_once("UserManager.php");
$gameManager = new GameManager();
//user 

$gameManager->loadGames();

$games = $gameManager->getGames();


// $game1 = new Game(1, "Jump for Wars 3", 10);
// $game2 = new Game(2, "Tarkov", 10);
// $game3 = new Game(3, "Starcraft 2", 10);
// $game4 = new Game(4, "Pokemon ", 25);
// $game5 = new Game(4, "Moblizy ", 100);

//$games = [$game1, $game2, $game3, $game4, $game5]; 
// $gameManager = new GameManager();
// $gameManager->addGame($game1);
// $gameManager->addGame($game2);
// $gameManager->addGame($game3);
// $gameManager->addGame($game4);
// $gameManager->addGame($game5);

$games = $gameManager->getGames();

$gameManager->loadGames();



ob_start(); ?>

<table class="table  table-hover text-center shadow">
  <thead class="bg-primary text-white">

    <tr>
      <th scope="col">Titre</th>
      <th scope="col">Nombres de joueurs</th>
      <th scope="col" colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
    <!-- <tr>
      <td>Starcraft 2</td>
      <td>8</td>
      <td><a href=""><i class="fa-solid fa-edit"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
    </tr>
    <tr>
      <td>Valorant</td>
      <td>10</td>
      <td><a href=""><i class="fa-solid fa-edit"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
    </tr>
    <tr>
      <td>Among US</td>
      <td>15</td>
      <td><a href=""><i class="fa-solid fa-edit"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
    </tr> -->
    <?php foreach ($games as $game) : ?>
      <tr>
        <td><?= $game->getTitle() ?></td>
        <td><?= $game->getNbplayers() ?></td>
        <td><a href=""><i class="fa-solid fa-edit"></i></a></td>
        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>

      </tr>
    <?php endforeach; ?>
  </tbody>
 

</table>


<a class="btn btn-success w-25 d-block m-auto" href="">Ajouter un jeu</a>

<?php

$content = ob_get_clean();
$title = "Liste de jeux";
require_once "base.html.php";

?>

