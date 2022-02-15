<?php
class Memoirevive extends Piece {
    protected ?float $capacite;
    protected ?int $nombreDeBarettes;
    protected ?float $typeFrequenceNormeMemoire;

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
     * Get the value of nombreDeBarettes
     */ 
    public function getNombreDeBarettes()
    {
        return $this->nombreDeBarettes;
    }

    /**
     * Set the value of nombreDeBarettes
     *
     * @return  self
     */ 
    public function setNombreDeBarettes(int $nombreDeBarettes)
    {
        $this->nombreDeBarettes = $nombreDeBarettes;

        return $this;
    }

    /**
     * Get the value of typeFrequenceNormeMemoire
     */ 
    public function getTypeFrequenceNormeMemoire()
    {
        return $this->typeFrequenceNormeMemoire;
    }

    /**
     * Set the value of typeFrequenceNormeMemoire
     *
     * @return  self
     */ 
    public function setTypeFrequenceNormeMemoire(float $typeFrequenceNormeMemoire)
    {
        $this->typeFrequenceNormeMemoire = $typeFrequenceNormeMemoire;

        return $this;
    }
}