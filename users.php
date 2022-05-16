<?php
// require_once("Game.php");

require_once("UserManager.php");

//user 
$userManager = new UserManager();

$userManager->loadUser();

$users = $userManager->getUser();

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


$userManager->loadUser();


ob_start(); ?>

<table class="table  table-hover text-center shadow">
  <thead class="bg-primary text-white">

    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Adresse mail </th>
      <th scope="col">Age</th>
      <th scope="col" colspan="2">Actions</th>
    </tr>
  </thead>
  <tbody>
 
    <?php foreach ($users as $user) : ?>
      <tr>
        <td><?= $user->getName() ?></td>
        <td><?= $user->getEmail() ?></td>
        <td><?= $user->getAge() ?></td>
        <td><a href=""><i class="fa-solid fa-edit"></i></a></td>
        <td><a href=""><i class="fa-solid fa-trash"></i></a></td>

      </tr>
    <?php endforeach; ?>
  </tbody>
 

</table>


<a class="btn btn-success w-25 d-block m-auto" href="">Ajouter un utilisateur</a>

<?php

$content = ob_get_clean();
$title = "Nos utilisateurs  ";
require_once "base.html.php";

?>
