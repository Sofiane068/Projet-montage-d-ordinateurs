<?php
class Clavier extends Piece {
    protected ?bool $sansFil;
    protected ?bool $paveNum;
    protected ?string $typeTouche;

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
     * Get the value of paveNum
     */ 
    public function getPaveNum()
    {
        return $this->paveNum;
    }

    /**
     * Set the value of paveNum
     *
     * @return  self
     */ 
    public function setPaveNum(bool $paveNum)
    {
        $this->paveNum = $paveNum;

        return $this;
    }

    /**
     * Get the value of typeTouche
     */ 
    public function getTypeTouche()
    {
        return $this->typeTouche;
    }

    /**
     * Set the value of typeTouche
     *
     * @return  self
     */ 
    public function setTypeTouche(string $typeTouche)
    {
        $this->typeTouche = $typeTouche;

        return $this;
    }
}