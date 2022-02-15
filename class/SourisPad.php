<?php
class SourisPad extends Piece {
    protected ?bool $sansFil;
    protected ?int $nombreDeTouches;

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
        return $this->nombreDeTouches;
    }

    /**
     * Set the value of nombreDeTouches
     *
     * @return  self
     */ 
    public function setNombreDeTouches(int $nombreDeTouches)
    {
        $this->nombreDeTouches = $nombreDeTouches;

        return $this;
    }
}