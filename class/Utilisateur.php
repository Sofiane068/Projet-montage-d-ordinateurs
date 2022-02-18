<?php

class Utilisateur
{

    protected string  $adresseMail;
    protected string $motDePasse;

    public function __construct(string $adresseMail = "", string $motDePasse = "")
    {
        if (!empty($adresseMail)) {

            $this->adresseMail = $adresseMail;
        }
        if (!empty($motDePasse)) {
            $this->motDePasse = $motDePasse;
        }
    }


    public function getAddresseMail()
    {
        return $this->adresseMail;
    }


    public function setAdresseMail(string $adresseMail)
    {
        $this->adresseMail = $adresseMail;

        return $this;
    }

    public function getMotDePasse()
    {
        return $this->motDePasse;
    }


    public function setMotDePasse(string $motDePasse)
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }
}
