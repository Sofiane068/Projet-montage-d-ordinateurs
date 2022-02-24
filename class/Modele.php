<?php
class Modele {
    protected ?bool $pcPortable;
    protected ?string $nom;
    protected ?string $description;
    protected ?int $nombreExemplaire;
    protected ?bool $archive;
    protected ?int $quantite;

public function __construct(bool $pcPortable=false, string $nom="", string $description="", int $nombreExemplaire=null, bool $archive=false, int $quantite=null) 
    {
        if(!empty($pcPortable)){
        $this->pcPortable = $pcPortable;
        }
        if (!empty($nom)) {
        $this->nom = $nom;
        }
        if (!empty($description)) {
        $this->description = $description;
        }
        if (!empty($nombreExemplaire)) {
        $this->nombreExemplaire = $nombreExemplaire;
        }
        if (!empty($archive)) {
        $this->archive = $archive;
        }
        if (!empty($quantite)) {
        $this->quantite = $quantite;
        }
    }

/////////////////////////////////////////////
    public function getpcPortable(){
    return $this->pcPortable;
}

public function setpcPortable(bool $pcPortable){
$this->pcPortable= $pcPortable;
return $this;
}


/////////////////////////////////////

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

/////////////////////////////////////

        public function getDescription()
        {
                return $this->description;
        }

        public function setDescription(string $description)
        {
                $this->description = $description;

                return $this;
        }
/////////////////////////////////

    public function getNombreExemplaire()
    {
        return $this->nombreExemplaire;
    }

    public function setNombreExemplaire(int $nombreExemplaire)
    {
        $this->nombreExemplaire = $nombreExemplaire;

        return $this;
    }
////////////////////////////////

    public function getArchive()
    {
        return $this->archive;
    }

   
    public function setArchive(bool $archive)
    {
        $this->archive = $archive;

        return $this;
    }
////////////////////////////////////////

    public function getQuantite()
    {
        return $this->quantite;
    }


    public function setQuantite(int $quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }
}