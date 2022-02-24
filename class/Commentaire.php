<?php
class Commentaire
{
    protected ?string $dateCommentaire;
    protected string $texte;
    protected bool $repondue;
    protected ?string $adresseMail_1;
    protected ?string $adresseMail;


    public function __construct(?string $dateCommentaire = null, string $texte = "", bool $repondue = false, string $adresseMail_1="", string $adresseMail="")
    {
        if (!empty($dateCommentaire)) {
            $this->dateCommentaire = $dateCommentaire;
        }
        if (!empty($texte)) {
            $this->texte = $texte;
        }
        if (!empty($repondue)) {
            $this->repondue = $repondue;
        }
        if (!empty($adresseMail_1)) {
            $this->adresseMail_1 = $adresseMail_1;
        }
        if (!empty($adresseMail)) {
            $this->adresseMail = $adresseMail;
        }
    }
    ///////////
    public function getdate(): DateTime
    {
        if (is_string($this->dateCommentaire)) {
            return new DateTime($this->dateCommentaire);
        }
        return $this->dateCommentaire;
    }

    public function setdate(DateTime $dateCommentaire)
    {
        $this->dateCommentaire = $dateCommentaire;
        return $this;
    }

    ////////////
    public function gettexte()
    {
        return $this->texte;
    }

    public function settexte(string $texte)
    {
        $this->text = $texte;
        return $this;
    }

    /////////////


    public function getreponse()
    {
        return $this->repondue;
    }

    public function setreponse(bool $repondue)
    {
        $this->repondue = $repondue;
        return $this;
    }

    /**
     * Get the value of adresseMail_1
     */ 
    public function getAdresseMail_1()
    {
        return $this->adresseMail_1;
    }

    /**
     * Set the value of adresseMail_1
     *
     * @return  self
     */ 
    public function setAdresseMail_1(string $adresseMail_1)
    {
        $this->adresseMail_1 = $adresseMail_1;

        return $this;
    }

    /**
     * Get the value of adresseMail
     */ 
    public function getAdresseMail()
    {
        return $this->adresseMail;
    }

    /**
     * Set the value of adresseMail
     *
     * @return  self
     */ 
    public function setAdresseMail(string $adresseMail)
    {
        $this->adresseMail = $adresseMail;

        return $this;
    }
};
