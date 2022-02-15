<?php
class Alimentation extends Piece {
    protected ?int $puissance;

    /**
     * Get the value of puissance
     */ 
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set the value of puissance
     *
     * @return  self
     */ 
    public function setPuissance(int $puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }
}