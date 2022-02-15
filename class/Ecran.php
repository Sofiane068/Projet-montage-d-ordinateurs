<?php
class Memoirevive extends Piece {
    protected ?int $taille;
   

    /**
     * Get the value of taille
     */ 
    public function getTaille()
    {
        return $this->taille;
    }

    /**
     * Set the value of taille
     *
     * @return  self
     */ 
    public function setTaille(int $taille)
    {
        $this->taille = $taille;

        return $this;
    }
}