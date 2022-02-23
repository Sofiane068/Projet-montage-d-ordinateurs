<?php
class Stock
{
    protected DateTime $createdDate;
    protected int $quantite;
    protected bool $entree_sortie;

    public function __construct(DateTime $createdDate="", int $quantite="", bool $entree_sortie=false)
    {
        if(!empty($createdDate)){
        $this->createdDate = $createdDate;
        }
        if (!empty($quantite)) {
        $this->quantite = $quantite;
        }
        if (!empty($entree_sortie)) {
        $this->entree_sortie = $entree_sortie;
        }
    }
    ///////////
    public function getdateCreation()
    {
        return $this->createdDate;
    }

    public function setdateCreation(DateTime $createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    ////////////
    public function getquantite()
    {
        return $this->quantite;
    }

    public function setquantite(int $quantite)
    {
        $this->quantite = $quantite;
        return $this;
    }

    /////////////


    public function getentreeEtSortie()
    {
        return $this->entree_sortie;
    }

    public function setentreeEtSortie(bool $entree_sortie)
    {
        $this->entree_sortie = $entree_sortie;
        return $this;
    }
};
