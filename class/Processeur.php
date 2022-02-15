<?php
class Processeur extends Piece {
   protected ?float $nombreDeCoeur;
   protected ?bool $chipsetCompatibles;
   protected ?float $frequenceCPU;

   /**
    * Get the value of nombreDeCoeur
    */ 
   public function getNombreDeCoeur()
   {
      return $this->nombreDeCoeur;
   }

   /**
    * Set the value of nombreDeCoeur
    *
    * @return  self
    */ 
   public function setNombreDeCoeur(float $nombreDeCoeur)
   {
      $this->nombreDeCoeur = $nombreDeCoeur;

      return $this;
   }

   /**
    * Get the value of chipsetCompatibles
    */ 
   public function getChipsetCompatibles()
   {
      return $this->chipsetCompatibles;
   }

   /**
    * Set the value of chipsetCompatibles
    *
    * @return  self
    */ 
   public function setChipsetCompatibles(bool $chipsetCompatibles)
   {
      $this->chipsetCompatibles = $chipsetCompatibles;

      return $this;
   }

   /**
    * Get the value of frequenceCPU
    */ 
   public function getFrequenceCPU()
   {
      return $this->frequenceCPU;
   }

   /**
    * Set the value of frequenceCPU
    *
    * @return  self
    */ 
   public function setFrequenceCPU(float $frequenceCPU)
   {
      $this->frequenceCPU = $frequenceCPU;

      return $this;
   }
}