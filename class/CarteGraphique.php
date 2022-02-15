<?php
class CarteGraphique extends Piece {
    protected ?float $memoire;
    protected ?bool $chipset;
  

    /**
     * Get the value of memoire
     */ 
    public function getMemoire()
    {
        return $this->memoire;
    }

    /**
     * Set the value of memoire
     *
     * @return  self
     */ 
    public function setMemoire(float $memoire)
    {
        $this->memoire = $memoire;

        return $this;
    }

    /**
     * Get the value of chipset
     */ 
    public function getChipset()
    {
        return $this->chipset;
    }

    /**
     * Set the value of chipset
     *
     * @return  self
     */ 
    public function setChipset(bool $chipset)
    {
        $this->chipset = $chipset;

        return $this;
    }
}