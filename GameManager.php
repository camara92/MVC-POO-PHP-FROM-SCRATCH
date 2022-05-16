<?php
class GameManager
{
    private $games;
    public function addGame($game)
    {
        $this->games[] = $game;
    }

    public function getGames()
    {
        return $this->games;
    }
}


/**
 * Gestion de l’entité
game et des games
dans notre app
 */
