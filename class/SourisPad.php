<?php
class SourisPad extends Piece {
    protected ?bool $sansFil;
    protected ?int $nbTouche;

    /**
     * Get the value of sansFil
     */ 
    public function getSansFil()
    {
        return $this->sansFil;
    }

    /**
     * Set the value of sansFil
     *
     * @return  self
     */ 
    public function setSansFil(bool $sansFil)
    {
        $this->sansFil = $sansFil;

        return $this;
    }

    /**
     * Get the value of nombreDeTouches
     */ 
    public function getNombreDeTouches()
    {
        return $this->nbTouche;
    }

    /**
     * Set the value of nombreDeTouches
     *
     * @return  self
     */ 
    public function setNombreDeTouches(int $nbTouche)
    {
        $this->nbTouche = $nbTouche;

        return $this;
    }
}