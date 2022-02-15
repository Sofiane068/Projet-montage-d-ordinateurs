<?php
class Stock
{
    protected DateTime $dateCreation;
    protected int $quantite;
    protected bool $entreeEtSortie;

    public function __construct(DateTime $dateCreation, int $quantite, bool $entreeEtSortie)
    {
        $this->dateCreation = $dateCreation;
        $this->quantite = $quantite;
        $this->entreeEtSortie = $entreeEtSortie;
    }
    ///////////
    public function getdateCreation()
    {
        return $this->dateCreation;
    }

    public function setdateCreation(DateTime $dateCreation)
    {
        $this->dateCreation = $dateCreation;
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
        return $this->entreeEtSortie;
    }

    public function setentreeEtSortie(bool $entreeEtSortie)
    {
        $this->entreeEtSortie = $entreeEtSortie;
        return $this;
    }
};
