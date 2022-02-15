<?php
class DisqueDurSsd extends Piece {
    protected ?float $capacite;
    protected ?bool $ssd;

    /**
     * Get the value of capacite
     */ 
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set the value of capacite
     *
     * @return  self
     */ 
    public function setCapacite(float $capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get the value of ssd
     */ 
    public function getSsd()
    {
        return $this->ssd;
    }

    /**
     * Set the value of ssd
     *
     * @return  self
     */ 
    public function setSsd(bool $ssd)
    {
        $this->ssd = $ssd;

        return $this;
    }
}