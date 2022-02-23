<?php
class Processeur extends Piece {
   protected ?float $nombre_de_coeur;
   protected ?bool $chipsets_compatibles;
   protected ?float $frequence_CPU_;

   /**
    * Get the value of nombreDeCoeur
    */ 
   public function getNombreDeCoeur()
   {
      return $this->nombre_de_coeur;
   }

   /**
    * Set the value of nombreDeCoeur
    *
    * @return  self
    */ 
   public function setNombreDeCoeur(float $nombre_de_coeur)
   {
      $this->nombre_de_coeur= $nombre_de_coeur;

      return $this;
   }

   /**
    * Get the value of chipsetCompatibles
    */ 
   public function getChipsetCompatibles()
   {
      return $this->chipsets_compatibles;
   }

   /**
    * Set the value of chipsetCompatibles
    *
    * @return  self
    */ 
   public function setChipsetCompatibles(bool $chipsets_compatibles)
   {
      $this->chipsets_compatibles = $chipsets_compatibles;

      return $this;
   }

   /**
    * Get the value of frequenceCPU
    */ 
   public function getFrequenceCPU()
   {
      return $this->frequence_CPU_;
   }

   /**
    * Set the value of frequenceCPU
    *
    * @return  self
    */ 
   public function setFrequenceCPU(float $frequence_CPU_)
   {
      $this->frequence_CPU_= $frequence_CPU_;

      return $this;
   }
}