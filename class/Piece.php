
<?php

class Piece
{
   protected ?string $nom;
   protected ?float $prix;
   protected ?string $categorie;
   protected ?string $marque;
   protected ?float $quantite;
   protected ?float $nbDeModeleCreer;
   protected ?string $dateAjout;
   protected ?bool $compatiblePortable_;
   protected ?bool $archive;

   /**
    * Get the value of nom
    */
   public function getNom()
   {
      return $this->nom;
   }

   /**
    * Set the value of nom
    *
    * @return  self
    */
   public function setNom(string $nom)
   {
      $this->nom = $nom;

      return $this;
   }

   /**
    * Get the value of prix
    */
   public function getPrix()
   {
      return $this->prix;
   }

   /**
    * Set the value of prix
    *
    * @return  self
    */
   public function setPrix(float $prix)
   {
      $this->prix = $prix;

      return $this;
   }

   /**
    * Get the value of categorie
    */
   public function getCategorie()
   {
      return $this->categorie;
   }

   /**
    * Set the value of categorie
    *
    * @return  self
    */
   public function setCategorie(string $categorie)
   {
      $this->categorie = $categorie;

      return $this;
   }

   /**
    * Get the value of marque
    */
   public function getMarque()
   {
      return $this->marque;
   }

   /**
    * Set the value of marque
    *
    * @return  self
    */
   public function setMarque(string $marque)
   {
      $this->marque = $marque;

      return $this;
   }

   /**
    * Get the value of quantite
    */
   public function getQuantite()
   {
      return $this->quantite;
   }

   /**
    * Set the value of quantite
    *
    * @return  self
    */
   public function setQuantite(float $quantite)
   {
      $this->quantite = $quantite;

      return $this;
   }

   /**
    * Get the value of ndDeModeleCree
    */
   public function getNdDeModeleCree()
   {
      return $this->nbDeModeleCreer;
   }

   /**
    * Set the value of ndDeModeleCree
    *
    * @return  self
    */
   public function setNdDeModeleCree(float $nbDeModeleCreer)
   {
      $this->nbDeModeleCreer = $nbDeModeleCreer;

      return $this;
   }

   /**
    * Get the value of dateAjout
    */
   public function getDateAjout()
   {
      return $this->dateAjout;
   }

   /**
    * Set the value of dateAjout
    *
    * @return  self
    */ 
   public function setDateAjout(string $dateAjout)
   {
      $this->dateAjout = $dateAjout;

      return $this;
   }

   /**
    * Get the value of compatiblePortable
    */
   public function getCompatiblePortable()
   {
      return $this->compatiblePortable_;
   }

   /**
    * Set the value of compatiblePortable
    *
    * @return  self
    */
   public function setCompatiblePortable(bool $compatiblePortable_)
   {
      $this->compatiblePortable_ = $compatiblePortable_;

      return $this;
   }

   /**
    * Get the value of archive
    */ 
   public function getArchive()
   {
      return $this->archive;
   }

   /**
    * Set the value of archive
    *
    * @return  self
    */ 
   public function setArchive(bool $archive)
   {
      $this->archive = $archive;

      return $this;
   }
}
