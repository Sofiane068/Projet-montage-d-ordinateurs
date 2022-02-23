<?php
class Memoirevive extends Piece {
    protected ?float $capacite;
    protected ?int $nombre_de_barrettes;
    protected ?float $type__frequence___norme_memoire;

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
        return $this->nombre_de_barrettes;
    }

    /**
     * Set the value of nombreDeBarettes
     *
     * @return  self
     */ 
    public function setNombreDeBarettes(int $nombre_de_barrettes)
    {
        $this->nombre_de_barrettes = $nombre_de_barrettes;

        return $this;
    }

    /**
     * Get the value of typeFrequenceNormeMemoire
     */ 
    public function getTypeFrequenceNormeMemoire()
    {
        return $this->type__frequence___norme_memoire;
    }

    /**
     * Set the value of typeFrequenceNormeMemoire
     *
     * @return  self
     */ 
    public function setTypeFrequenceNormeMemoire(float $type__frequence___norme_memoire)
    {
        $this->type__frequence___norme_memoire = $type__frequence___norme_memoire;

        return $this;
    }
}